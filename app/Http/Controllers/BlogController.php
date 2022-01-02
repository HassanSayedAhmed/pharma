<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use App\blog;
class BlogController extends Controller
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

            $query = blog::select('id','title','description','image','active')
                ->orderBy($orderBy, $orderDir);


            if ($textSearch) {
              $textSearch = mb_ereg_replace(" ", "%", $textSearch);
              $query->Where(\DB::raw("COALESCE(active,'')") , "like", "%$textSearch%");
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

        return view('backend.blog.index');
    }

    public function save(Request $request)
    {
        if($request->id == 0)
        {
            $blog = new blog();
            $blog->title = $request->title;
            $blog->description = $request->description;
            $blog->active = blog::ACTIVE;
            if($request->has('image')){
                $file = $request->file('image');
                $blog->image = '/uploads/blogs/'. $file->getClientOriginalName();
                $destinationPath = '/uploads/blogs';
                $file->move(public_path($destinationPath), $file->getClientOriginalName());
            }
            $blog->save();
        }
        else
        {
            $blog = blog::find($request->id);
            $blog->title = $request->title;
            $blog->description = $request->description;
            if($request->has('image')){
                $file = $request->file('image');
                $blog->image = '/uploads/categories/'. $file->getClientOriginalName();
                $destinationPath = '/uploads/categories';
                $file->move(public_path($destinationPath), $file->getClientOriginalName());
            }
            $blog->save();
        }
        return response()->json($request);
    }

    public function delete($id)
    {
        $blog = blog::find($id);
        $blog->delete();
        return response()->json($id);
    }

}
