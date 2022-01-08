@extends('layouts.front_ar')
@section('css')
    
@endsection

@section('body')
<section id="page-title" class="pg-title-fix">

    <div class="container clearfix">
        <h1>المنتجات</h1>
        <span class="breadcrumb_ar">
            احصل علي ما تحتاجه
        </span>
    </div>

</section><!-- #page-title end -->

    <!-- Content
============================================= -->
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">

            <div class="row gutter-40 col-mb-80">
                <!-- Post Content
                ============================================= -->
                <div class="postcontent col-lg-9 order-lg-last">

                    <!-- Shop
                    ============================================= -->
                    <div id="shop" class="shop row grid-container gutter-20" data-layout="fitRows">
                        <div class="oc-item row">
                            @foreach($products as $product)
                                <div class="entry event mb-3 col-lg-4">
                                    <div class="grid-inner row align-items-center g-0 p-4">
                                        <div class="col-md-12 mb-md-0">
                                            <a href="https://api.whatsapp.com/send/?phone=%2B201551364964&text={{$product->name_ar}} Available" class="entry-image">
                                                @if($product->image)
                                                <img src="{{$product->image}}">
                                                @else 
                                                <img src="{{asset('uploads/defaults/defualt_medicine.jpg')}}">
                                                @endif
                                            </a>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="entry-title title-xs">
                                                <h3 class="text-center"><a href="{{route('front_product_detail_ar',['product'=>$product->id])}}">{{$product->name_ar}}</a></h3>
                                            </div>
                                            <div class="entry-content">
                                                <a href="{{route('front_product_detail_ar',['product'=>$product->id])}}" class="btn btn-infoss btn-sm unique-btn">المزيد</a>
                                                <a href="https://api.whatsapp.com/send/?phone=%2B201551364964&text={{$product->name_ar}} Available" class="btn btn-dangerss btn-sm unique-btn2">WhatsApp</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    
                </div><!-- .postcontent end -->

                <!-- Sidebar
                ============================================= -->
                <div class="sidebar col-lg-3">
                    <div class="sidebar-widgets-wrap">

                        <div class="widget widget-filter-links">

                            <h4>اختر التصنيف</h4>
                            <ul>
                                <li class="widget-filter-reset active-filter"><a href="{{route('front_products')}}" data-filter="*">احذف</a></li>
                                @foreach($categories as $category)
                                    <li>
                                        <a href="{{route('front_products',['category'=>$category->id])}}" onMouseOver="this.style.color='#0000FF'" onMouseOut="this.style.color='#45433f'">
                                                {{$category->name}}
                                        </a>
                                        @if ($category->subCategory)
                                            <ul>
                                                @foreach ($category->subCategory as $sub)
                                                    <li><a href="{{route('front_products',['category'=>$sub->id])}}" onMouseOver="this.style.color='#0000FF'" onMouseOut="this.style.color='#45433f'">{{$sub->name}}</a></li>
                                                @endforeach
                                            </ul>
                                        @endif
                                        
                                    </li>
                                    
                                @endforeach
                            </ul>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection

@section('scripts')
    
@endsection