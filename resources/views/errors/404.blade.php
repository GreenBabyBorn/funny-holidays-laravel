@extends('layouts.app')

@section('title', 'Ничего не нацдено')


@section('header')
<x-header></x-header>
@endsection

@section('content')
<section class="notfound">
	<div class="notfound__container">
		<div class="notfound__title">
			<h3>404</h3>
			<span>Страница не найдена..</span>
		</div>
		<a href="./" class="notfound__button ">На главную</a>
	</div>
</section>
@endsection

@section('footer')
<x-footer></x-footer>
@endsection