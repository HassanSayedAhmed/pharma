@extends('layouts.front_ar')
@section('css')
    
@endsection

@section('body')
<section id="page-title" class="pg-title-fix">

    <div class="container clearfix">
        <h1>الوظائف الشاغرة</h1>
        <span class="breadcrumb_ar">
            انضم لفريقنا الرائع الذي يحتوي علي أفضل المتخصصين
        </span>
    </div>

</section><!-- #page-title end -->

    <!-- Content
============================================= -->
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">

            <div class="row col-mb-50">
                <div class="col-md-12">
                    <div class="fancy-title title-bottom-border">
                        <h3>{{$job->title_ar}}</h3>
                    </div>

                    <p>{{$job->description_ar}}</p>
                    <div class="accordion accordion-bg">

                        <div class="accordion-header">
                            <div class="accordion-icon">
                                <i class="accordion-closed icon-ok-circle"></i>
                                <i class="accordion-open icon-remove-circle"></i>
                            </div>
                            <div class="accordion-title">
                                المتطلبات
                            </div>
                        </div>
                        <div class="accordion-content">
                            <ul class="iconlist iconlist-color mb-0">
                                @foreach ($jobRequirements as $jobRequirement)
                                <li><i class="icon-ok"></i>{{$jobRequirement->name_ar}}</li>
                                @endforeach
                                
                            </ul>
                        </div>

                        <div class="accordion-header">
                            <div class="accordion-icon">
                                <i class="accordion-closed icon-ok-circle"></i>
                                <i class="accordion-open icon-remove-circle"></i>
                            </div>
                            <div class="accordion-title">
                                ماذا نتوقع منك؟
                            </div>
                        </div>
                        <div class="accordion-content">
                            <ul class="iconlist iconlist-color mb-0">
                                @foreach ($whatWeExpects as $whatWeExpect)
                                 <li><i class="icon-plus-sign"></i>{{$whatWeExpect->name_ar}}</li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="accordion-header">
                            <div class="accordion-icon">
                                <i class="accordion-closed icon-ok-circle"></i>
                                <i class="accordion-open icon-remove-circle"></i>
                            </div>
                            <div class="accordion-title">
                                ما يهمنا أن يكون لديك ؟
                            </div>
                        </div>
                        <div class="accordion-content">{{$job->what_you_have_got_ar}}</div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div id="job-apply" class="heading-block highlight-me">
                        <h2>
                        قدم الآن
                        </h2>
                        <span>
                        وسنعاود الاتصال بك في غضون 48 ساعة.
                        </span>
                    </div>

                    <div class="form-widget">
                        <div class="form-result"></div>

                        <form action="{{route('front_apply_to_job')}}" id="template-jobform" name="template-jobform" class="row mb-0" method="post">

                            <div class="form-process">
                                <div class="css3-spinner">
                                    <div class="css3-spinner-scaler"></div>
                                </div>
                            </div>

                            <div class="col-md-6 form-group">
                                <label for="template-jobform-fname">
                                الاسم الاول<small>*</small></label>
                                <input type="text" id="template-jobform-fname" name="first_name" value="" class="sm-form-control required" />
                            </div>

                            <div class="col-md-6 form-group">
                                <label for="template-jobform-lname">
                                اسم العائلة<small>*</small></label>
                                <input type="text" id="template-jobform-lname" name="last_name" value="" class="sm-form-control required" />
                            </div>

                            <div class="w-100"></div>

                            <div class="col-12 form-group">
                                <label for="template-jobform-email">البريد الإلكتروني <small>*</small></label>
                                <input type="email" id="template-jobform-email" name="email" value="" class="required email sm-form-control" />
                            </div>

                            <div class="col-md-6 form-group">
                                <label for="template-jobform-age">العمر <small>*</small></label>
                                <input type="text" name="template-jobform-age" id="age" value="" size="22" tabindex="4" class="sm-form-control required" />
                            </div>

                            <div class="col-md-6 form-group">
                                <label for="template-jobform-city">المدينة <small>*</small></label>
                                <input type="text" name="template-jobform-city" id="city" value="" size="22" tabindex="5" class="sm-form-control required" />
                            </div>

                            <div class="w-100"></div>

                            <div class="col-md-6 form-group">
                                <label for="template-jobform-salary">
                                الراتب المتوقع
                                </label>
                                <input type="text" name="template-jobform-salary" id="expected_salary" value="" size="22" tabindex="6" class="sm-form-control" />
                            </div>

                            <div class="col-md-6 form-group">
                                <label for="template-jobform-time">
                                تاريخ البدء
                                </label>
                                <input type="date" name="template-jobform-start" id="start_date" value="" size="22" tabindex="7" class="sm-form-control" />
                            </div>

                            <div class="w-100"></div>

                        

                            <div class="col-12 form-group">
                                <label for="experience">
                                خبراتك (اختياري)
                                </label>
                                <textarea name="experiencee" id="experience" rows="3" tabindex="10" class="sm-form-control"></textarea>
                            </div>

                            <div class="col-12 form-group">
                                <label for="application">
                                طلب <small>*</small></label>
                                <textarea name="application" id="application" rows="6" tabindex="11" class="sm-form-control required"></textarea>
                            </div>

                            <div class="col-12 form-group d-none">
                                <input type="text" id="template-jobform-botcheck" name="template-jobform-botcheck" value="" class="sm-form-control" />
                            </div>

                            <div class="col-12 form-group">
                                <button class="button button-3d button-large w-100 m-0 unique-btn" name="template-jobform-apply" type="submit" value="apply">
                                أرسل التطبيق
                                </button>
                            </div>

                            <input type="hidden" name="prefix" value="template-jobform-">

                        </form>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>  
@endsection

@section('scripts')
    
@endsection