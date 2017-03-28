@extends('ws-app')
@section('content')
    <div class="slider">

        <div id="webstudio-slider" style="display:none;">
            @forelse( $slides as $key => $slide)
                <img alt="{{ $slide->getTranslate('title') }}"
                     src="/{{ $slide->img }}"
                     data-image="/{{ $slide->img }}"
                     id="img-{{ $key }}"
                     data-description=" {{$slide->getTranslate('description')}}">
                @empty
                Нет картинки
            @endforelse
           {{-- @foreach($slides as $slide)

                @if(count($slide->getImages()) > 0)

                    <img alt="{{$slide->getTranslate('title')}}"
                         src="/{{$slide->getImages()[0]['full']}}"
                         data-image="/{{$slide->getImages()[0]['full']}}"
                         id="img-{{$slide->id}}"
                         data-description=" {{$slide->getTranslate('description')}}">

                @endif

            @endforeach
--}}


        </div>

    </div>
@endsection