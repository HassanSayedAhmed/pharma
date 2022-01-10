<?php

namespace App\Http\ApiControllers;

use App;
use App\Course;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\Paginator;
use Symfony\Component\HttpFoundation\Response;


class ApiController extends Controller
{
    use ResponseTrait;

    public function __construct() {

       //$this->middleware('auth:api');
       $this->middleware('ValidateRequests');
    }    

    public function getCourses() {

        $courses = Course::get();

        return $this->ApiResponse($courses);
    }

    public function getCategories() {

        $categories = Category::get();

        return $this->ApiResponse($categories);
    }
}
