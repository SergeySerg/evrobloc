<!DOCTYPE html>
<html lang="{{ App::getLocale() }}">
<head>
	<meta charset="utf-8">
	<title>
		@if(isset($new_single))
			{{ $new_single ->getTranslate('meta_title') }}
		@elseif(isset($category))
			{{ $category ->getTranslate('meta_title') }}
		@endif
	</title>
		<meta name="description"
		content="@if(isset($new_single))
					{{ $new_single ->getTranslate('meta_description') }}
				 @elseif(isset($category))
					{{ $category ->getTranslate('meta_description') }}
            	 @endif
		">
		<meta name="keywords"
			  content="
			  		@if(isset($new_single))
						{{ $new_single ->getTranslate('meta_keywords') }}
					@elseif(isset($category))
						{{ $category ->getTranslate('meta_keywords') }}
					@endif
		">


	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="shortcut icon" href="{{ asset('/img/favicon/favicon.ico') }}?ver={{ $version }}" type="image/x-icon">
	<link rel="apple-touch-icon" href="{{ asset('/img/favicon/apple-touch-icon.png') }}?ver={{ $version }}">
	<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/favicon/apple-touch-icon-72x72.png') }}?ver={{ $version }}">
	<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('/img/favicon/apple-touch-icon-114x114.png') }}?ver={{ $version }}">
	{{-- CSS --}}
	<link rel="stylesheet" href="{{ asset('/libs/normalize.css/normalize.css') }}">
	<link rel="stylesheet" href="{{ asset('/libs/bootstrap/dist/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/frontend/fonts.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/frontend/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('/libs/unitegallery/dist/css/unite-gallery.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/plugins/sweetalert.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/frontend/main.css') }}?ver={{ $version }}">
	{{-- CSS --}}

</head>

<body>

	<header class="header">

		<div class="top-section">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-9">
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
					<div class="col-xs-6 col-sm-6 col-md-2">
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
					<div class="col-xs-6 col-sm-6 col-md-1">
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
					<div class="logo"><a href="{{ asset('/') }}"><img class="logo_img" src="{{ asset('/img/frontend/logo.png') }}" alt="">{{  $texts->get('company_name') }}</a></div>
				</div>
				<div class="col-md-9">
					<ul class="menu clearfix">
						@foreach( $categories as $category)
							<li class="menu_item"><a href="/{{ App::getLocale() }}/{{$category->link}}">{{ $category->getTranslate('title') }}@if($category->category_children->count()) <i class="fa fa-angle-down" aria-hidden="true"></i>@endif</a>
								@if($category->category_children->count())
									<ul class="sub-menu clearfix">
										@foreach($category->category_children->sortByDesc('priority') as $category_children)
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
					<h4 class="footer-title">{{ trans('base.gallery') }}</h4>
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
					<h4 class="footer-title">{{ trans('base.contact_info') }}</h4>
					<ul class="footer-contact">
						<li class="footer-contact_item clearfix">
							<i class="fa fa-envelope-o"></i><span>{{ $texts->get('mail') }}</span></li>
						<li class="footer-contact_item clearfix"><i class="fa fa-phone"></i><span>{{ $texts->get('telephone_one') }} або {{ $texts->get('telephone_two') }} {{ $texts->get('telephone_three') }} або {{ $texts->get('telephone_four') }}</span></li>
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
					<h4 class="footer-title">{{ trans('base.want') }}</h4>
					<div id="map"></div>
					<script type="text/javascript">
						var myLat = +'{{  $texts->get('lat') }}';
						var myLng = +'{{  $texts->get('lng') }}';
						var myTitle = '{{  $texts->get('company_name') }}';
						var map;
						var map1;
						var marker;
						var marker1;
						function initMap() {
							var myLatLng = {lat: myLat, lng: myLng};
							map = new google.maps.Map(document.getElementById('map'), {
								center: myLatLng,
								zoom: 15
							});
							var marker = new google.maps.Marker({
								position: myLatLng,
								map: map,
								title: myTitle,
								label: myTitle
							});
							map1 = new google.maps.Map(document.getElementById('map1'), {
								center: myLatLng,
								zoom: 15
							});
							var marker1 = new google.maps.Marker({
								position: myLatLng,
								map: map1,
								title: myTitle,
								label: myTitle
							});
						}
					</script>
					<script async defer
							src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCXSIuFGADtHtXySwrTW1Ime_ISq33M3aY&callback=initMap">
					</script>
				</div>
				<div class="col-md-12">
				<!--LiveInternet counter-->
				<script type="text/javascript">
					document.write("<a href='//www.liveinternet.ru/click' "+
							"target=_blank><img src='//counter.yadro.ru/hit?t26.6;r"+
							escape(document.referrer)+((typeof(screen)=="undefined")?"":
							";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
									screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
							";"+Math.random()+
							"' alt='' title='LiveInternet: показано число посетителей за"+
							" сегодня' "+
							"border='0' width='88' height='15'><\/a>")
				</script><!--/LiveInternet-->
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

<script src="{{ asset('/libs/unitegallery/dist/themes/default/ug-theme-default.js') }}"></script>
<script src="{{ asset('/libs/unitegallery/dist/themes/slider/ug-theme-slider.js') }}"></script>
<script src="{{ asset('/libs/unitegallery/dist/themes/tilesgrid/ug-theme-tilesgrid.js') }}"></script>
<script src="{{ asset('/libs/unitegallery/dist/js/unitegallery.js') }}"></script>
<script src="{{ asset('/js/plugins/sweetalert.min.js') }}"></script>
<script src="{{ asset('/js/frontend/common.js') }}?ver={{ $version }}"></script>

</body>
</html>