<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contact;
use App\product;
use App\category;
use App\blog;
use App\job;

class HomeController extends Controller
{
    public function index()
    {
        return view('front.home.index');
    }
    public function indexAr()
    {
        return view('front.home.index_ar');
    }

    public function aboutus()
    {
        return view('front.home.aboutus');
    }

    public function aboutusAr()
    {
        return view('front.home.aboutus_ar');
    }

    public function products()
    {
        $products = product::get();
        $categories = category::get();
        return view('front.home.products',compact('products','categories'));
    }

    public function productsAr()
    {
        $products = product::get();
        $categories = category::get();
        return view('front.home.products_ar',compact('products','categories'));
    }

    public function blogs()
    {
        $blogs = blog::get();
        return view('front.home.blogs',compact('blogs'));
    }

    public function blogsAr()
    {
        $blogs = blog::get();
        return view('front.home.blogs_ar',compact('blogs'));
    }

    public function covid()
    {
        $products = product::where('type',product::COVID)->get();
        return view('front.home.covid',compact('products'));
    }

    public function covidAr()
    {
        $products = product::where('type',product::COVID)->get();
        return view('front.home.covid_ar',compact('products'));
    }

    public function careers()
    {
        $jobs = job::get();
        return view('front.home.careers',compact('jobs'));
    }

    public function careersAr()
    {
        $jobs = job::get();
        return view('front.home.careers_ar',compact('jobs'));
    }

    public function careersApply($id)
    {
        $job = job::find($id);
        return view('front.home.careersApply',compact('job'));
    }

    public function careersApplyAr($id)
    {
        $job = job::find($id);
        return view('front.home.careersApply_ar',compact('job'));
    }

    public function careersApplyToJob(Request $request)
    {
        dd($request);
        return redirect('front_careers');
    }

    public function contactus()
    {
        return view('front.home.contactus');
    }

    public function contactusAr()
    {
        return view('front.home.contactus_ar');
    }
   
}