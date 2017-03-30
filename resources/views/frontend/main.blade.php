@extends('ws-app')
@section('content')
    <div class="slider">

        <div id="webstudio-slider" style="display:none;">
            @forelse( $slides as $key => $slide)
                <img alt="{{ $slide->getTranslate('title') }}"
                     src="/{{ $slide->img }}"
                     data-image="/{{ $slide->img }}"
                     id="img-{{ $key }}"
                     data-description="{{ $slide->getTranslate('short_description') }}">
                @empty
                Нет картинки
            @endforelse

        </div>

    </div>
@endsection