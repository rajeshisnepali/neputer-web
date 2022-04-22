@extends('frontend.layouts.master')

@section('title', "Page Not Found")

@section('content')

{{--    @include('frontend.layouts.breadcrumb',[--}}
{{--    'title'=> 'Page Not Found'--}}
{{--    ])--}}

    <section class="error bg-gradient pad-tb">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center mt50 mb50">
                    <div class="layer-div">
                        <div class="error-block">
                            <h1>Page Not Found</h1>
                            <div class="images mt20">
                                <img src="{{ asset('static/error-page.png') }}" alt="error page" class="img-fluid">
                            </div>
                            <a href="{{ url('/') }}" class="btn-outline">Back to Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection