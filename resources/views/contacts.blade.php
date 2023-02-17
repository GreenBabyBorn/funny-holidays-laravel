@extends('layouts.app')

@section('title', 'Контакты')


@section('header')
<x-header></x-header>
@endsection

@section('content')
<section class="welcome">
	<img src="{{Vite::asset('resources/img/bg.jpg')}}" alt="Фон">
	<div class="welcome__container">
		<div class="welcome__title">
			<h2>Контакты</h2>
		</div>
		{{-- <a href="#" class="welcome__button">Подробнее о нас</a> --}}
	</div>
</section>
<div class="map">
	<div class="map__container">
		<iframe src="https://yandex.ru/map-widget/v1/?z=12&amp;ol=biz&amp;oid=35812762837" width="100%" height="600"
			frameborder="0"></iframe>
	</div>

</div>
@endsection

@section('footer')
<x-footer></x-footer>
@endsection