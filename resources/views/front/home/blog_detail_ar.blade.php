@extends('layouts.front_ar')
@section('css')
    
@endsection

@section('body')
	<!-- Page Title
		============================================= -->
		<section id="page-title" class="pg-title-fix">

			<div class="container clearfix">
				<h1>المدونات</h1>
				<span class="breadcrumb_ar">
					هنا أحدث الأخبار
				</span>
			</div>

		</section><!-- #page-title end -->

	<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">

					<div class="single-post mb-0">

						<!-- Single Post
						============================================= -->
						<div class="entry clearfix">

							<!-- Entry Title
							============================================= -->
							<div class="entry-title">
								<h2>{{$blog->title_ar}}</h2>
							</div><!-- .entry-title end -->

							<!-- Entry Meta
							============================================= -->
							<div class="entry-meta">
								<ul>
									<li><i class="icon-calendar3"></i> {{$blog->created_at}}</li>
									{{-- <li><a href="#"><i class="icon-user"></i> admin</a></li>
									<li><i class="icon-folder-open"></i> <a href="#">General</a>, <a href="#">Media</a></li>
									<li><a href="#"><i class="icon-comments"></i> 43 Comments</a></li>
									<li><a href="#"><i class="icon-camera-retro"></i></a></li> --}}
								</ul>
							</div><!-- .entry-meta end -->

							<!-- Entry Content
							============================================= -->
							<div class="entry-content mt-0 ">

								<!-- Entry Image
								============================================= -->
								<div class="entry-image alignleft img-full">
									<a href="#">
                                        @if($blog->image != null)
                                            <a href="{{route('front_blog_detail',['blog'=>$blog->id])}}" data-lightbox="image"><img src="{{$blog->image}}" alt="Standard Post with Image"></a>
                                        @else
                                            <a href="{{route('front_blog_detail',['blog'=>$blog->id])}}" data-lightbox="image"><img src="{{asset('images/blog/full/10.jpg')}}" alt="Standard Post with Image"></a>
                                        @endif
                                    </a>
								</div><!-- .entry-image end -->

								<p>{{$blog->description}}</p>

							</div>
						</div><!-- .entry end -->
					
						<h4>Related Posts:</h4>

						<div class="related-posts row posts-md col-mb-30">
                            @foreach ($relatedBlogs as $relatedBlog)
                                <div class="entry col-12 col-md-6">
                                    <div class="grid-inner row align-items-center gutter-20">
                                        <div class="col-4 col-xl-5">
                                            <div class="entry-image">
                                                @if($relatedBlog->image != null)
                                                    <a href="{{route('front_blog_detail',['blog'=>$relatedBlog->id])}}" data-lightbox="image"><img src="{{$relatedBlog->image}}" alt="Blog Single"></a>
                                                @else
                                                    <a href="{{route('front_blog_detail',['blog'=>$relatedBlog->id])}}" data-lightbox="image"><img src="{{asset('/images/blog/small/10.jpg')}}" alt="Blog Single"></a>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-8 col-xl-7">
                                            <div class="entry-title title-xs nott">
                                                <h3><a href="{{route('front_blog_detail',['blog'=>$relatedBlog->id])}}">{{$relatedBlog->title_ar}}</a></h3>
                                            </div>
                                            <div class="entry-meta_ar">
                                                <ul>
                                                    <li><i class="icon-calendar3"></i> {{$relatedBlog->created_at}}</li>
                                                    {{-- <li><a href="#"><i class="icon-comments"></i> 12</a></li> --}}
                                                </ul>
                                            </div>
                                            <div class="entry-content d-none d-xl-block">{{$relatedBlog->description_ar}}</div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
							

						</div>

					</div>

				</div>
			</div>
		</section><!-- #content end -->
@endsection

@section('scripts')
    
@endsection