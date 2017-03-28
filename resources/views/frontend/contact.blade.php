@extends('ws-app')
@section('content')
    <div class="map">
        <iframe src="{{ $texts->get('map') }}" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>

    <div class="callback-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="callback-name">{{ trans('callback') }}</h1>
                </div>
                <div class="col-md-9">
                    <form action="" class="row callback-form">
                        <div class="col-md-6">
                            <input id="name" name="name" placeholder="{{ trans('put_name') }}" required type="text">
                        </div>
                        <div class="col-md-6">
                            <input id="phone" name="phone" placeholder="{{ trans('put_phone') }}" required type="tel">
                        </div>
                        <div class="col-md-12">
                            <textarea name="comment" id="comment" placeholder="{{ trans('message') }}" rows="4"></textarea> <br>
                        </div>
                        <div class="col-md-12">
                            <button>{{ trans('send') }}</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-3">
                    <div class="contact-block">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <div class="contact-block_name">Адреса офісу</div>
                        <div class="contact-block_content">{{ $texts->get('address') }}</div>
                    </div>
                    <div class="contact-block">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <div class="contact-block_name">Телефони</div>
                        <div class="contact-block_content">{{ $texts->get('telephone_one') }} <br> {{ $texts->get('telephone_two') }}</div>
                    </div>
                    <div class="contact-block">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <div class="contact-block_name">E-mail</div>
                        <div class="contact-block_content">{{ $texts->get('mail') }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection