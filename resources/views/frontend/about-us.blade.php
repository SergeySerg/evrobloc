@extends('ws-app')
@section('content')

    <div class="services-name-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="services-name">{{ trans('base.about_us') }}</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="content-wrap">
                {!! $category->getTranslate('description') !!}
                </div>
            </div>
        </div>
    </div>

@endsection