@extends('layouts.front_ar')
@section('css')
    
@endsection

@section('body')
<section id="page-title" class="pg-title-fix">

    <div class="container clearfix">
        <h1>المقالات</h1>
        <span class="breadcrumb_ar">
                اخر الاخبار تابعاها هنا
        </span>
    </div>

</section><!-- #page-title end -->

<!-- Content
============================================= -->
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">

            <!-- Posts
            ============================================= -->
            <div id="posts" class="post-grid row grid-container gutter-40 clearfix" data-layout="fitRows">
                @foreach($blogs as $blog)
                    <div class="entry col-md-4 col-sm-6 col-12">
                        <div class="grid-inner">
                            <div class="entry-image">
                                @if($blog->image != null)
                                    <a href="#" data-lightbox="image"><img src="{{$blog->image}}" alt="Standard Post with Image"></a>
                                @else
                                    <a href="#" data-lightbox="image"><img src="{{asset('uploads/defaults/blog/defualt_blog.jpg')}}" alt="Standard Post with Image"></a>
                                @endif
                            </div>
                            <div class="entry-title">
                                <h2><a href="blog-single.html">{{$blog->title_ar}}</a></h2>
                            </div>
                            <div class="entry-meta">
                                <ul>
                                    <li><i class="icon-calendar3"></i> {{$blog->created_at}}</li>
                                </ul>
                            </div>
                            <div class="entry-content">
                                <p>{{$blog->description_ar}}</p>
                                <a href="blog-single.html" class="more-link">اقرأ المزيد</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div><!-- #posts end -->

            <div class="clear mt-5"></div>
        </div>
    </div>
</section><!-- #content end -->
@endsection

@section('scripts')
    
@endsection