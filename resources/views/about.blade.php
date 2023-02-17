@extends('layouts.app')

@section('title', 'О нас')


@section('header')
<x-header></x-header>
@endsection

@section('content')
<section class="welcome">
   <img src="{{Vite::asset('resources/img/bg.jpg')}}" alt="Фон">
   <div class="welcome__container">
      <div class="welcome__title">
         <h2>О нас</h2>
      </div>
      {{-- <a href="#" class="welcome__button">Подробнее о нас</a> --}}
   </div>
</section>
<div class="about-us">
   <div class="about-us__container">
      <div class="about-us__img">
         <img src="{{Vite::asset('resources/img/about.jpeg')}}" alt="Фото">
      </div>
      <div class="about-us__info">
         <h3 class="about-us__title">Немного о нас</h3>
         <p class="about-us__text">
            Это потрясающий проект, в который я влюблена по уши. Давайте познакомимся.
            Меня зовут Ирина Асатрян @asatryanko, или как уже прижилось среди наших ребят-ведущих, Ирина Караваевна)))
            Я больше 15 лет в праздниках!
            Конкретно «Каравай» возник два года назад, и за это время, начиная с закупки первых костюмов и поздравлений
            на выезде, мы успели:
         </p>
      </div>
   </div>
</div>

@endsection

@section('footer')
<x-footer></x-footer>
@endsection