@extends('layouts.front')
@section('css')
    
@endsection

@section('body')
<section id="page-title" class="pg-title-fix">

    <div class="container clearfix">
        <h1>Careers</h1>
        <span class="breadcrumb">
        Here you can find your way.	
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
                            {{$job->title}} 
                    </h3>
                </div>
                <button>
                    <a href="{{route('front_apply_career',['id'=>$job->id])}}">More Details</a>
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