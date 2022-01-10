<?php

namespace App\Http\Controllers;

use App\Course;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class CourseController extends Controller
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

            $query = course::leftJoin('categories', 'categories.id', 'courses.category_id')
            ->select('courses.*','categories.id as category_id','categories.name as category_name')
            ->orderBy($orderBy, $orderDir);


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

        $categories = category::pluck('name', 'id')->toArray();

        return view('backend.course.index',compact('categories'));
    }

    public function save(Request $request)
    {
        if($request->id == 0)
        {
            $course = new course();
            $course->name = $request->name;
            $course->description = $request->description;
            $course->rating = $request->rating;
            $course->views = $request->views;
            $course->levels = $request->levels;
            $course->hours = $request->hours;
            $course->active = $request->active;
            $course->category_id = $request->category_id;
            
            $course->save();
        }
        else
        {
            $course = course::find($request->id);
            $course->name = $request->name;
            $course->description = $request->description;
            $course->rating = $request->rating;
            $course->views = $request->views;
            $course->levels = $request->levels;
            $course->hours = $request->hours;
            $course->active = $request->active;
            $course->category_id = $request->category_id;
            
            $course->save();
        }
        return response()->json($request);
    }

    public function delete($id)
    {
        $course = course::find($id);
        $course->delete();
        return response()->json($id);
    }
}
