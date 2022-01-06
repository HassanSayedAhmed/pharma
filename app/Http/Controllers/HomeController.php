<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contact;
use App\product;
use App\category;
use App\blog;
use App\job;
use Products;
use App\JobWhatWeExpect;
use App\JobRequirements;
use App\JobApplicant;

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

    public function products(Category $category=null)
    {
        $products = product::select('products.*');
        if($category) {
            $products->where('category_id',$category->id);
        }
        $products = $products->get();

        $categories = Category::select('id','name','description','image','parent_id','active')
            ->where('parent_id', null)->orderBy('id', 'desc');

        $categories = $categories->paginate(Category::where('parent_id', null)->count('id'));
      
        $categories->getCollection()->transform(function ($value) {
            
            $value->subCategory = Category::where('parent_id',$value->id)->get();

            return $value;
        });

        return view('front.home.products',compact('products','categories'));
    }

    public function productsAr(Category $category=null)
    {
        $products = product::select('products.*');
        if($category) {
            $products->where('category_id',$category->id);
        }
        $products = $products->get();

        $categories = Category::select('id','name','description','image','parent_id','active')
            ->where('parent_id', null)->orderBy('id', 'desc');

        $categories = $categories->paginate(Category::where('parent_id', null)->count('id'));
      
        $categories->getCollection()->transform(function ($value) {
            
            $value->subCategory = Category::where('parent_id',$value->id)->get();

            return $value;
        });

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

    public function blogDetail(Blog $blog)
    {   
        $relatedBlogs = blog::where('id','!=',$blog->id)->get();

        return view('front.home.blog_detail',compact('blog','relatedBlogs'));
    }

    public function blogDetailAr(Blog $blog)
    {
        $relatedBlogs = blog::where('id','!=',$blog->id)->get();

        return view('front.home.blog_detail_ar',compact('blog','relatedBlogs'));
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
        $jobRequirements = JobRequirements::where('job_id',$id)->get();
        $whatWeExpects = JobWhatWeExpect::where('job_id',$id)->get();

        return view('front.home.careersApply',compact('job','jobRequirements','whatWeExpects'));
    }

    public function careersApplyAr($id)
    {
        $job = job::find($id);
        $jobRequirements = JobRequirements::where('job_id',$id)->get();
        $whatWeExpects = JobWhatWeExpect::where('job_id',$id)->get();

        return view('front.home.careersApply_ar',compact('job','jobRequirements','whatWeExpects'));
    }

    public function careersApplyToJob(Request $request)
    {
        
        $jobApplicant = new JobApplicant();
        $jobApplicant->first_name = $request->first_name;
        $jobApplicant->last_name = $request->last_name;
        $jobApplicant->email = $request->email;
        $jobApplicant->age = $request->template_jobform_age;
        $jobApplicant->city = $request->template_jobform_city;
        $jobApplicant->expected_salary = $request->template_jobform_salary;
        $jobApplicant->start_date = $request->template_jobform_start;
        $jobApplicant->experience = $request->experiencee;
        $jobApplicant->application = $request->application;
        $jobApplicant->job_id = $request->job_id;
        $jobApplicant->save();
      
        return redirect(route('front_careers'));
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
