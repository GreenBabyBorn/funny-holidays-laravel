@extends('layouts.app')

@section('title', 'Цены')


@section('header')
<x-header></x-header>
@endsection

@section('content')
<section class="welcome">
   <img src="{{Vite::asset('resources/img/bg.jpg')}}" alt="Фон">
   <div class="welcome__container">
      <div class="welcome__title">
         <h2>Цены</h2>
      </div>
      {{-- <a href="#" class="welcome__button">Подробнее о нас</a> --}}
   </div>
</section>

<div class="costs">
   <div class="costs__container">
      <h2 class="costs__title">ПАКЕТЫ ПРАЗДНИКОВ</h2>
      <div class="costs__items products-items">
         <div class="products-items__item">
            <div class="products-items__img"><img src="{{Vite::asset('resources/img/cost.jpg')}}" alt="Картинка">
            </div>
            <div class="products-items__title">Продукт</div>
            <div class="products-items__buttons">
               {{-- <!-- <a href="#" class="products-items__button">Подробнее</a> --> --}}
               <a href="#" class="products-items__button products-items__button_yellow">Заказать</a>
            </div>
         </div>
         <div class="products-items__item">
            <div class="products-items__img"><img src="{{Vite::asset('resources/img/cost.jpg')}}" alt="Картинка">
            </div>
            <div class="products-items__title">Продукт</div>
            <div class="products-items__buttons">
               {{-- <!-- <a href="#" class="products-items__button">Подробнее</a> --> --}}
               <a href="#" class="products-items__button products-items__button_yellow">Заказать</a>
            </div>
         </div>
         <div class="products-items__item">
            <div class="products-items__img"><img src="{{Vite::asset('resources/img/cost.jpg')}}" alt="Картинка">
            </div>
            <div class="products-items__title">Продукт</div>
            <div class="products-items__buttons">
               {{-- <!-- <a href="#" class="products-items__button">Подробнее</a> --> --}}
               <a href="#" class="products-items__button products-items__button_yellow">Заказать</a>
            </div>
         </div>
         <div class="products-items__item">
            <div class="products-items__img"><img src="{{Vite::asset('resources/img/cost.jpg')}}" alt="Картинка">
            </div>
            <div class="products-items__title">Продукт</div>
            <div class="products-items__buttons">
               {{-- <!-- <a href="#" class="products-items__button">Подробнее</a> --> --}}
               <a href="#" class="products-items__button products-items__button_yellow">Заказать</a>
            </div>
         </div>
         <div class="products-items__item">
            <div class="products-items__img"><img src="{{Vite::asset('resources/img/cost.jpg')}}" alt="Картинка">
            </div>
            <div class="products-items__title">Продукт</div>
            <div class="products-items__buttons">
               {{-- <!-- <a href="#" class="products-items__button">Подробнее</a> --> --}}
               <a href="#" class="products-items__button products-items__button_yellow">Заказать</a>
            </div>
         </div>
         <div class="products-items__item">
            <div class="products-items__img"><img src="{{Vite::asset('resources/img/cost.jpg')}}" alt="Картинка">
            </div>
            <div class="products-items__title">Продукт</div>
            <div class="products-items__buttons">
               {{-- <!-- <a href="#" class="products-items__button">Подробнее</a> --> --}}
               <a href="#" class="products-items__button products-items__button_yellow">Заказать</a>
            </div>
         </div>
         <div class="products-items__item">
            <div class="products-items__img"><img src="{{Vite::asset('resources/img/cost.jpg')}}" alt="Картинка">
            </div>
            <div class="products-items__title">Продукт</div>
            <div class="products-items__buttons">
               {{-- <!-- <a href="#" class="products-items__button">Подробнее</a> --> --}}
               <a href="#" class="products-items__button products-items__button_yellow">Заказать</a>
            </div>
         </div>
         <div class="products-items__item">
            <div class="products-items__img"><img src="{{Vite::asset('resources/img/cost.jpg')}}" alt="Картинка">
            </div>
            <div class="products-items__title">Продукт</div>
            <div class="products-items__buttons">
               {{-- <a href="#" class="products-items__button">Подробнее</a> --}}
               <a href="#" class="products-items__button products-items__button_yellow">Заказать</a>
            </div>
         </div>
      </div>
   </div>
</div>

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
