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

    <div class="product-wrap">
        <div class="container">
            @forelse($products as $product)
                <div class="row">
                    <div class="col-md-4">
                        <img src="/{{ $product->img }}" alt="{{ $product->getTranslate('title') }}" class="product-img">
                    </div>
                    <div class="col-md-8">
                        <h2 class="product-name">{{ $product->getTranslate('title') }}</h2>
                        <div class="product-description">{!! $product->getTranslate('description') !!}</div>
                        <div class="sharing-wrap clearfix">
                            <div class="sharing-name">{{ trans('base.share') }}</div>
                            <div class="sharing-items">
                                <i class="fa fa-facebook"></i>
                                <i class="fa fa-twitter"></i>
                                <i class="fa fa-vk"></i>
                            </div>
                        </div>
                    </div>

                </div>
            @empty
                <div class="row">
                    <div class="col-md-12">
                        {{ trans('base.no_product') }}
                    </div>
                </div>
            @endforelse
        </div>
    </div>
@endsection