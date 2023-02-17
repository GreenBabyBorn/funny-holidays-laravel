@extends('layouts.app')

@section('title', 'Отзывы')


@section('header')
<x-header></x-header>
@endsection

@section('content')
<section class="welcome">
   <img src="{{Vite::asset('resources/img/bg.jpg')}}" alt="Фон">
   <div class="welcome__container">
      <div class="welcome__title">
         <h2>Отзывы</h2>
      </div>
      {{-- <a href="#" class="welcome__button">Подробнее о нас</a> --}}
   </div>
</section>
<section class="reviews">
   <div class="reviews__container">
      <div class="reviews__top">
         <h2 class="reviews__title">Написать отзыв</h2>
         <div class="reviews__items">
            @foreach($reviews as $review)
            <div class="reviews__item">
               <span class="reviews__name">{{$review->author}}</span>
               <p class="reviews__text">
                  {{$review->text}}
               </p>
            </div>
            @endforeach
         </div>
      </div>
      <div class="reviews__bottom">
         <form action="/" method="POST" class="reviews__form form-reviews">
            @csrf
            <label for="author" class="form-reviews__label">
               Имя
               <input placeholder="" name="author" type="text" id="author" class="form-reviews__input">
            </label>
            <label for="email" class="form-reviews__label">
               Электронная почта
               <input placeholder="" name="email" type="email" id="email" class="form-reviews__input">
            </label>
            <label for="text" class="form-reviews__label">
               Отзыв
               <textarea placeholder="" class="form-reviews__textarea" name="text" id="text" cols="30" rows="5"></textarea>
            </label>
            <button class="form-reviews__btn">Отправить</button>
         </form>
      </div>
   </div>
</section>
@endsection

@section('footer')
<x-footer></x-footer>
@endsection
