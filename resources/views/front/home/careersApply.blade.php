@extends('layouts.front')
@section('css')
    
@endsection

@section('body')
<section id="page-title" class="pg-title-fix">

    <div class="container clearfix">
        <h1>Job Openings</h1>
        <span class="breadcrumb">
            Join our Fabulous Team of Intelligent Individuals
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
                        <h3>{{$job->title}}</h3>
                    </div>

                    <p>{{$job->description}}</p>

                    <div class="accordion accordion-bg">

                        <div class="accordion-header">
                            <div class="accordion-icon">
                                <i class="accordion-closed icon-ok-circle"></i>
                                <i class="accordion-open icon-remove-circle"></i>
                            </div>
                            <div class="accordion-title">
                                Requirements
                            </div>
                        </div>
                        <div class="accordion-content">
                            <ul class="iconlist iconlist-color mb-0">
                                @foreach ($jobRequirements as $jobRequirement)
                                <li><i class="icon-ok"></i>{{$jobRequirement->name}}</li>
                                @endforeach
                                
                            </ul>
                        </div>

                        <div class="accordion-header">
                            <div class="accordion-icon">
                                <i class="accordion-closed icon-ok-circle"></i>
                                <i class="accordion-open icon-remove-circle"></i>
                            </div>
                            <div class="accordion-title">
                                What we Expect from you?
                            </div>
                        </div>
                        <div class="accordion-content">
                            <ul class="iconlist iconlist-color mb-0">
                                @foreach ($whatWeExpects as $whatWeExpect)
                                 <li><i class="icon-plus-sign"></i>{{$whatWeExpect->name}}</li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="accordion-header">
                            <div class="accordion-icon">
                                <i class="accordion-closed icon-ok-circle"></i>
                                <i class="accordion-open icon-remove-circle"></i>
                            </div>
                            <div class="accordion-title">
                                What you've got?
                            </div>
                        </div>
                        <div class="accordion-content">{{$job->what_you_have_got}}</div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div id="job-apply" class="heading-block highlight-me">
                        <h2>Apply Now</h2>
                        <span>And we'll get back to you within 48 hours.</span>
                    </div>

                    <div class="form-widget">
                        <div class="form-result"></div>

                        <form action="{{route('front_apply_to_job')}}" class="row mb-0" method="post">
                            
                            {{ csrf_field() }}
                            <div class="form-process">
                                <div class="css3-spinner">
                                    <div class="css3-spinner-scaler"></div>
                                </div>
                            </div>
                            <input type="hidden" id="job_id" name="job_id" value="{{$job->id}}" class="sm-form-control required" />

                            <div class="col-md-6 form-group">
                                <label for="template-jobform-fname">First Name <small>*</small></label>
                                <input type="text" id="template_jobform_fname" name="first_name" value="" class="sm-form-control required" />
                            </div>

                            <div class="col-md-6 form-group">
                                <label for="template-jobform-lname">Last Name <small>*</small></label>
                                <input type="text" id="template_jobform_lname" name="last_name" value="" class="sm-form-control required" />
                            </div>

                            <div class="w-100"></div>

                            <div class="col-12 form-group">
                                <label for="template-jobform-email">Email <small>*</small></label>
                                <input type="email" id="template_jobform_email" name="email" value="" class="required email sm-form-control" />
                            </div>

                            <div class="col-md-6 form-group">
                                <label for="template-jobform-age">Age <small>*</small></label>
                                <input type="text" name="template_jobform_age" id="age" value="" size="22" tabindex="4" class="sm-form-control required" />
                            </div>

                            <div class="col-md-6 form-group">
                                <label for="template-jobform-city">City <small>*</small></label>
                                <input type="text" name="template_jobform_city" id="city" value="" size="22" tabindex="5" class="sm-form-control required" />
                            </div>

                            <div class="w-100"></div>

                            <div class="col-md-6 form-group">
                                <label for="template-jobform-salary">Expected Salary</label>
                                <input type="text" name="template_jobform_salary" id="expected_salary" value="" size="22" tabindex="6" class="sm-form-control" />
                            </div>

                            <div class="col-md-6 form-group">
                                <label for="template-jobform-time">Start Date</label>
                                <input type="date" name="template_jobform_start" id="start_date" value="" size="22" tabindex="7" class="sm-form-control" />
                            </div>

                            <div class="w-100"></div>

                            <div class="col-12 form-group">
                                <label for="experience">Experience (optional)</label>
                                <textarea name="experiencee" id="experience" rows="3" tabindex="10" class="sm-form-control"></textarea>
                            </div>

                            <div class="col-12 form-group">
                                <label for="application">Application <small>*</small></label>
                                <textarea name="application" id="application" rows="6" tabindex="11" class="sm-form-control required"></textarea>
                            </div>

                            <div class="col-12 form-group d-none">
                                <input type="text" id="template-jobform-botcheck" name="template-jobform-botcheck" value="" class="sm-form-control" />
                            </div>

                            <div class="col-12 form-group">
                                <button class="button button-3d button-large w-100 m-0 unique-btn" name="template-jobform-apply" type="submit" value="apply">Send Application</button>
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