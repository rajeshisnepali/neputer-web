@extends('frontend.layouts.master')

@section('title', $_settings['career_page_seo_title'] ?? 'Career')
@section('keywords', $_settings['career_page_seo_keywords'] ?? 'Career')
@section('description', $_settings['career_page_seo_description'] ?? 'Career')

@push('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
@endpush

@section('content')

    <!--Breadcrumb Area-->
    @include('frontend.layouts.breadcrumb',[
        //'page'=>"Career",
        'title'=>"Career",
        'banner'=> $_settings['career_image']
    ])
    
{{--    @include('frontend.layouts.sweetalert')--}}
    <!--End Breadcrumb Area-->

    <!--Start About-->
    <section class="about-agencys pad-tb block-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="common-heading text-l">
                        <h2 class="mb20">{{  $_settings['career_title'] ?? 'Career' }}</h2>
                        <p>{!! $_settings['career_description'] ?? '' !!}</p>
                        <a href="#jobs"
                           class="btn-main bg-btn2 lnk mt30"> {{  $_settings['career_button_name'] ?? 'View Opening'  }}
                            <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                    </div>
                </div>
                <div class="col-lg-6 v-center">
                    <div class="image-block mb0 m-mt30">
                        <img src="{{ asset('Frontend/images/about/office-4.jpg') }}" alt="" class="img-fluid"/>
                    </div>
                </div>
            </div>
        </div>
    </section>

{{--    @if(count($data['career']) > 0)--}}
        @include('frontend.career.includes.enquiryForm')
{{--    @endif--}}
@endsection

@push('js')
    @include('frontend.career.includes.scripts')
    @include('admin.include.formValidation')
@endpush