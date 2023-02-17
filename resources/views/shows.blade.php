@extends('layouts.app')

@section('title', 'Шоу-программы')


@section('header')
<x-header></x-header>
@endsection

@section('content')
<section class="welcome">
   <img src="{{Vite::asset('resources/img/shows.jpg')}}" alt="Фон">
   <div class="welcome__container">
      <div class="welcome__title">
         <h2>Шоу-программы</h2>
      </div>

      {{-- <a href="#" class="welcome__button">Подробнее о нас</a> --}}
   </div>
</section>
<section class="services">
   <div class="services__container">
      <div class="services__top">
         <h3 class="services__title">
            Наши услуги
         </h3>
      </div>
      <div class="services__bottom">
         <div class="services__item">
            <img src="{{Vite::asset('resources/img/child.jpg')}}" alt="Услуги">
            <div class="services__item-body">
               <span class="services__item-desc">Аниматоры и персонажи</span>
               <a href="#" class="services__btn">Подробнее</a>
            </div>
         </div>
         <div class="services__item">
            <img src="{{Vite::asset('resources/img/child.jpg')}}" alt="Услуги">
            <div class="services__item-body">
               <span class="services__item-desc">Аниматоры и персонажи</span>
               <a href="#" class="services__btn">Подробнее</a>
            </div>

         </div>
         <div class="services__item">
            <img src="{{Vite::asset('resources/img/child.jpg')}}" alt="Услуги">
            <div class="services__item-body">
               <span class="services__item-desc">Аниматоры и персонажи</span>
               <a href="#" class="services__btn">Подробнее</a>
            </div>

         </div>
         <div class="services__item">
            <img src="{{Vite::asset('resources/img/child.jpg')}}" alt="Услуги">
            <div class="services__item-body">
               <span class="services__item-desc">Аниматоры и персонажи</span>
               <a href="#" class="services__btn">Подробнее</a>
            </div>

         </div>
         <div class="services__item">
            <img src="{{Vite::asset('resources/img/child.jpg')}}" alt="Услуги">
            <div class="services__item-body">
               <span class="services__item-desc">Аниматоры и персонажи</span>
               <a href="#" class="services__btn">Подробнее</a>
            </div>

         </div>
         <div class="services__item">
            <img src="{{Vite::asset('resources/img/child.jpg')}}" alt="Услуги">
            <div class="services__item-body">
               <span class="services__item-desc">Аниматоры и персонажи</span>
               <a href="#" class="services__btn">Подробнее</a>
            </div>

         </div>
      </div>
   </div>
</section>

@endsection

@section('footer')
<x-footer></x-footer>
@endsection
