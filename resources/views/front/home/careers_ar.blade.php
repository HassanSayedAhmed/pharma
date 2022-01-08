@extends('layouts.front_ar')
@section('css')
    
@endsection

@section('body')
<section id="page-title" class="pg-title-fix">

    <div class="container clearfix">
        <h1>الوظائف</h1>
        <span class="breadcrumb_ar">
        هنا تجد ما تريده.
        </span>
    </div>

</section><!-- #page-title end -->

    <!-- Content
============================================= -->
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">

        <div class="row"> 
            @foreach($jobs as $job)
            <card class="careers-card col-lg-4">
                <div class="card-content-edit">
                    <h3>
                            {{$job->title_ar}} 
                    </h3>
                </div>
                <button>
                    <a href="{{route('front_apply_career',['id'=>$job->id])}}">للمزيد من التفاصيل</a>
                </button>
            </card>
            @endforeach
        </div>

        </div>
    </div>
</section><!-- #content end -->

@endsection

@section('scripts')
    
@endsection