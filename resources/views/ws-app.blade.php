<!DOCTYPE html>
<html lang="{{ App::getLocale() }}">
<head>
	<meta charset="utf-8">
	<title>
		@if(isset($category))
			{{ $category ->getTranslate('meta_title') }}
		@else
			Будматеріали
		@endif
	</title>

	@if(isset($category))
		<meta name="description" content="{{ $category ->getTranslate('meta_description') }}">
		<meta name="keywords" content="{{ $category ->getTranslate('meta_keywords') }}">
	@endif

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="shortcut icon" href="{{ asset('/img/favicon/favicon.ico') }}" type="image/x-icon">
	<link rel="apple-touch-icon" href="{{ asset('/img/favicon/apple-touch-icon.png') }}">
	<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/favicon/apple-touch-icon-72x72.png') }}">
	<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('/img/favicon/apple-touch-icon-114x114.png') }}">
	{{-- CSS --}}

	<link rel="stylesheet" href="{{ asset('/libs/normalize.css/normalize.css') }}">
	<link rel="stylesheet" href="{{ asset('/libs/bootstrap/dist/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('/libs/owl-carousel/owl.carousel.css') }}">
	<link rel="stylesheet" href="{{ asset('/libs/owl-carousel/owl.theme.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/frontend/fonts.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/frontend/font-awesome.min.css') }}">
	<link href="{{ asset('/css/frontend/main.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('/libs/unitegallery/dist/css/unite-gallery.css') }}">
	<link href="http://azmind.com/demo/andia-agency/v2-1/assets/css/animate.css" rel="stylesheet">
	<link href="{{ asset('/css/plugins/sweetalert.css') }}" rel="stylesheet">
	{{-- CSS --}}

</head>

<body>

	<header class="header">

		<div class="top-section">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<div class="top-section_text">
							<i class="fa fa-map-marker" aria-hidden="true"></i>
							{{  $texts->get('address') }}
						</div>
						<div class="top-section_text">
							<i class="fa fa-phone" aria-hidden="true"></i>
							{{  $texts->get('telephone_one') }} {{  $texts->get('telephone_two') }}
						</div>
						<div class="top-section_text">
							<i class="fa fa-clock-o" aria-hidden="true"></i>
							{{  $texts->get('schedule') }}
						</div>
					</div>
					<div class="col-md-2">
						<div class="header_social clearfix">
							<a href="{{  $texts->get('social_instagram') }}" target="_blank">
								<div>
									<i class="fa fa-instagram"></i>
								</div>
							</a>
							<a href="{{  $texts->get('social_vk') }}" target="_blank">
								<div>
									<i class="fa fa-vk" aria-hidden="true"></i>
								</div>
							</a>
							<a href="{{  $texts->get('social_facebook') }}" target="_blank">
								<div>
									<i class="fa fa-facebook"></i>
								</div>
							</a>
							<a href="{{  $texts->get('social_odnoklassniki') }}" target="_blank">
								<div>
									<i class="fa fa-odnoklassniki"></i>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-1">
						<ul class="lang">

							<li @if(App::getLocale() == 'ua') class="active"@endif><a href="{{str_replace(url(App::getLocale()), url('ua'), Request::url())}}">ua</a></li>
							<li @if(App::getLocale() == 'ru') class="active"@endif><a href="{{str_replace(url(App::getLocale()), url('ru'), Request::url())}}">ru</a></li>

						</ul>

					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="logo"><a href="{{ asset('/') }}">{{  $texts->get('company_name') }}</a></div>
				</div>
				<div class="col-md-9">
					<ul class="menu clearfix">
						@foreach( $categories as $category)
							<li class="menu_item active"><a href="/{{ App::getLocale() }}/{{$category->link}}">{{ $category->getTranslate('title') }}</a>
								@if($category->category_children->count())
									<ul class="sub-menu">
										@foreach($category->category_children as $category_children)
											<li class="sub-menu_item"><a href="/{{ App::getLocale() }}/products/{{ $category_children->link }}">{{ $category_children->getTranslate('title') }}</a></li>
										@endforeach
									</ul>
								@endif
							</li>
						@endforeach
					</ul>
				</div>
			</div>
		</div>

	</header>

	@yield('content')

	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h4 class="footer-title">Продукція</h4>
					<div id="webstudio-bottom-gallery" style="display:none;">

						@forelse( $slides as $key => $slide)
							<img alt="{{ $slide->getTranslate('title') }}"
								 src="/{{ $slide->img }}"
								 data-image="/{{ $slide->img }}"
								 id="img-{{ $key }}"
								 data-description=" {{$slide->getTranslate('description')}}">
						@empty
							Нет картинки
						@endforelse

					</div>
				</div>
				<div class="col-md-4">
					<h4 class="footer-title">Контактна інформація</h4>
					<ul class="footer-contact">
						<li class="footer-contact_item clearfix">
							<i class="fa fa-envelope-o"></i><span>{{ $texts->get('mail') }}</span></li>
						<li class="footer-contact_item clearfix"><i class="fa fa-phone"></i><span>{{ $texts->get('telephone_one') }} або {{ $texts->get('telephone_two') }} {{ $texts->get('telephone_three') }}</span></li>
						<li class="footer-contact_item clearfix"><i class="fa fa-map-marker"></i><span> {{ $texts->get('address') }}</span></li>
						<li class="footer-contact_item clearfix">
							<a href="{{  $texts->get('social_instagram') }}" target="_blank">
								<i class="fa fa-instagram"></i>
							</a>
							<a href="{{  $texts->get('social_vk') }}" target="_blank">
								<i class="fa fa-vk" aria-hidden="true"></i>
							</a>
							<a href="{{  $texts->get('social_facebook') }}" target="_blank">
								<i class="fa fa-facebook"></i>
							</a>
							<a href="{{  $texts->get('social_odnoklassniki') }}" target="_blank">
								<i class="fa fa-odnoklassniki"></i>
							</a>
						</li>
					</ul>
				</div>
				<div class="col-md-4">
					<h4 class="footer-title">Як нас знайти</h4>
					<div class="maps">
						<iframe src="{{ $texts->get('map') }}" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
	</footer>

{{--Файл переводов--}}
<script>
	var trans = {
		'base.success': '{{ trans('base.success_send_contact') }}',
		'base.error': '{{ trans('base.error_send_contact') }}',
	};
</script>
{{--Файл переводов--}}
{{-- JS --}}
	<script src="{{ asset('/libs/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>

<script src="{{ asset('/js/frontend/common.js') }}"></script>
<script src="{{ asset('/libs/owl-carousel/owl.carousel.min.js') }}"></script>
<script src="http://azmind.com/demo/andia-agency/v2-1/assets/js/wow.min.js" type="application/javascript"></script>
<script src="{{ asset('/libs/unitegallery/dist/themes/default/ug-theme-default.js') }}"></script>
<script src="{{ asset('/libs/unitegallery/dist/themes/slider/ug-theme-slider.js') }}"></script>
<script src="{{ asset('/libs/unitegallery/dist/themes/tilesgrid/ug-theme-tilesgrid.js') }}"></script>
<script src="{{ asset('/libs/unitegallery/dist/js/unitegallery.js') }}"></script>
<script src="{{ asset('/js/plugins/sweetalert.min.js') }}"></script>
<script>
	new WOW().init();
</script>

</body>
</html>