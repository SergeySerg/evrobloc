@extends('ws-app')
@section('content')
    @section('news_head')
        <div class="services-name-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="services-name">{{ trans('base.last_news') }}</h1>
                    </div>
                </div>
            </div>
        </div>
    @show
    <div class="news-wrap">
        <div class="container">
            <div class="row">
                @forelse($news as $new)
                    <div class="singl-news-wrap col-md-6">
                        <a href="/{{ App::getLocale() }}/news/{{ $new->id }}"><div class="news-img_block" style="background-image: url('/{{ $new->img }}')"></div></a>
                        <a href="/{{ App::getLocale() }}/news/{{ $new->id }}"><h2 class="news_title">{{ $new->getTranslate('title') }}</h2></a>
                        <p class="news_short-description">{!! $new->getTranslate('short_description') !!} </p>
                        <a href="/{{ App::getLocale() }}/news/{{ $new->id }}" class="read-news">{{ trans('base.more') }}<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                    </div>
                @empty
                    <div class="row">
                        <div class="col-md-12">
                            {{ trans('base.no_news') }}
                        </div>
                    </div>
                @endforelse
            </div>

            <div class="col-md-12">
                <div class="paginate" style="text-align: center;">
                    {!! $news->render() !!}
                </div>

            </div>
        </div>
    </div>
@endsection