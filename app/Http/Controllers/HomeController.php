<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\category;


class HomeController extends Controller
{

    public function index()
    {
        $categories = category::where('active',1)->pluck('name','id')->toArray();
        $courses = Course::where('active',1)->paginate(1);

        return view('front.home.index',compact('categories','courses'));
    }
    
    public function indexSearch(Request $request)
    {
        $categories = category::where('active',1)->pluck('name','id')->toArray();
        //$courses = Course::where('active',1)->paginate(1);

        if($request->ajax()) {
            
            $textSearch = $request->text;
            $categoryID = $request->searchCategory;

            $courses = Course::where('active',1);

            if ($textSearch) {
        
                $courses->where('name' , "like", "%$textSearch%");            
            }
            if ($categoryID) {
                
                $courses->where('category_id', $categoryID);            
            }

            $courses = $courses->paginate(1);

            return view('front.home.courses', compact('courses','categories'))->render();

            //return response()->json($courses);
        }
     

        //return view('front.home.index',compact('categories','courses'));
    }
   
}
