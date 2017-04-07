@extends('ws-app')
@section('content')

    <div class="services-name-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="services-name">{{ trans('base.cooperation') }}</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="news-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-12 center">
                    <div class="about-us_img" style="background-image: url('/{{ $category->img }}')"></div>
                </div>
                <div class="col-md-12">
                    <div class="content-wrap">
                        {!! $category->getTranslate('description') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
