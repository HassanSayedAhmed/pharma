<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class CategoryController extends Controller
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

            $query = category::select('categories.*')->orderBy($orderBy, $orderDir);


            if ($textSearch) {
              $textSearch = mb_ereg_replace(" ", "%", $textSearch);
              $query->Where(\DB::raw("COALESCE(name,'')") , "like", "%$textSearch%");
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

        return view('backend.category.index');
    }

    public function save(Request $request)
    {
        if($request->id == 0)
        {
            $category = new category();
            $category->name = $request->name;
            $category->active = $request->active;
           
            $category->save();
        }
        else
        {
            $category = category::find($request->id);
            $category->name = $request->name;
            $category->active = $request->active;
            
            $category->save();
        }
        return response()->json($request);
    }

    public function delete($id)
    {
        $category = category::find($id);
        $category->delete();
        return response()->json($id);
    }

}
