@extends('ws-app')
@section('content')
    <div class="services-name-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="services-name">{{ trans('base.last_news') }}</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="news-wrap">
        <div class="container">
            <div class="row">
                <div class="singl-news-wrap col-md-8">
                    <a href="#"><div class="news-img_block" style="background-image: url('/{{ $new_single->img }}')"></div></a>
                    <a href="#"><h2 class="news_title">{{ $new_single->getTranslate('title') }}</h2></a>
                    <p class="news_description">{!! $new_single->getTranslate('description') !!}</p>
                    <a href="/{{ App::getLocale() }}/news" class="read-news all-news">{{ trans('base.all_news') }}<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                </div>
                <div class="col-md-4">
                    <h3 class="latest-news_block-title">{{ trans('base.last_news') }}</h3>
                        @forelse($last_news as $last_new)
                            <a href="/{{ App::getLocale() }}/news/{{ $last_new->id }}" class="latest-news-wrap clearfix">
                                <div class="latest-news-img_block" style="background-image: url('/{{ $last_new->img }}')"></div>
                                <h4 class="news_title">{{ str_limit($last_new->getTranslate('title'),23,'...') }}</h4>
                                <p class="latest-news_short-description">{!! str_limit($last_new->getTranslate('short_description'),128,'...') !!}</p>
                            </a>
                    @empty
                        {{ trans('base.no_news') }}
                    @endforelse
                </div>
            </div>
        </div>
    </div>

@endsection