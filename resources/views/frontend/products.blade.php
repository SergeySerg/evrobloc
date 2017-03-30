@extends('ws-app')
@section('content')
    <div class="services-name-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="services-name">{{ $product_category->getTranslate('title') }}</h1>
                </div>
            </div>
        </div>
    </div>

    @forelse($products as $product)
        <div class="product-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 center">
                        <img src="/{{ $product->img }}" alt="{{ $product->getTranslate('title') }}" class="product-img">
                    </div>
                    <div class="col-md-8">
                        <h2 class="product-name">{{ $product->getTranslate('title') }}</h2>
                        <div class="product-description">{!! $product->getTranslate('description') !!}</div>
                        <div class="sharing-wrap clearfix">
                            <div class="sharing-name">{{ trans('base.share') }}</div>
                            <div class="sharing-items">
                                <div class="share42init"
                                     data-image="http://evroblok.loc/{{ $product->img }}"
                                     data-url="{{Request::fullUrl()}}"
                                     data-title="{{ $product->getTranslate('title') }}"
                                     data-description="{!! $product->getTranslate('description') !!}"
                                     data-path="{{asset('/share42/')}}/"
                                     data-icons-file="icons.png">
                                </div>
                                <script type="text/javascript" src="{{asset('/share42/share42.js')}}"></script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @empty
        <div class="product-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        {{ trans('base.no_product') }}
                    </div>
                </div>
            </div>
        </div>
    @endforelse
@endsection