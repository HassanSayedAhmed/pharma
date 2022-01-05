<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use App\SubCategory;
use App\Category;

class SubCategoryController extends Controller
{
    public function index(Request $request){
        if($request->ajax())
        {
            $draw = $request->draw;
            $start = $request->start;
            $length = $request->length;
            $columns = $request->columns;
            $order = $request->order[0]['column'];
            $orderBy = $columns[$order]["name"];
            $orderDir = $request->order[0]['dir'];
            $textSearch = $request->search['value'];

            Paginator::currentPageResolver(function () use ($start, $length) {
                return ($start / $length + 1);
            });

            $query = SubCategory::join('categories','sub_categories.category_id','categories.id')
                ->select('sub_categories.id','sub_categories.name','sub_categories.image','sub_categories.active',
                'categories.name as category_name','sub_categories.category_id')
                ->orderBy($orderBy, $orderDir);


            if ($textSearch) {
              $textSearch = mb_ereg_replace(" ", "%", $textSearch);
              $query->Where(\DB::raw("COALESCE(sub_categories.name,'')") , "like", "%$textSearch%");
            }

            $rows = $query->paginate($length);

            $result = [
                'draw' => $draw,
                'recordsTotal' => $rows->total(),
                'recordsFiltered' => $rows->total(),
                'data' => $rows
            ];

            return $result;
        }

        $categories = category::pluck('name', 'id')->toArray();
        return view('backend.sub_category.index', compact('categories'));
    }

    public function save(Request $request)
    {
        if($request->id == 0)
        {
            $SubCategory = new SubCategory();
            $SubCategory->name = $request->name;
            $SubCategory->category_id = $request->category_id;
            $SubCategory->active = SubCategory::ACTIVE;
            if($request->has('image')){
                $file = $request->file('image');
                $SubCategory->image = '/uploads/sub_categories/'. $file->getClientOriginalName();
                $destinationPath = '/uploads/sub_categories';
                $file->move(public_path($destinationPath), $file->getClientOriginalName());
            }
            $SubCategory->save();
        }
        else
        {
            $SubCategory = SubCategory::find($request->id);
            $SubCategory->name = $request->name;
            $SubCategory->category_id = $request->category_id;
            if($request->has('image')){
                $file = $request->file('image');
                $SubCategory->image = '/uploads/sub_categories/'. $file->getClientOriginalName();
                $destinationPath = '/uploads/sub_categories';
                $file->move(public_path($destinationPath), $file->getClientOriginalName());
            }
            $SubCategory->save();
        }
        return response()->json($request);
    }

    public function delete($id)
    {
        $SubCategory = SubCategory::find($id);
        $SubCategory->delete();
        return response()->json($id);
    }
}
