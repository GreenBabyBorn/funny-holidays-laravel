@extends('layouts.app')

@section('title', 'Аниматоры')


@section('header')
<x-header></x-header>
@endsection

@section('content')
<section class="about">
   <img src="{{Vite::asset('resources/img/child.jpg')}}" alt="Фон">
   <div class="about__container">
      {{-- <div class="about__title">
         
      </div> --}}
      <h1 class="about__title_sub">
         Аниматоры и персонажи
      </h1>
      {{-- <a href="#" class="about__button">Подробнее о нас</a> --}}
   </div>
</section>
<section class="products">
   <div class="products__container">
      <div class="products__top">
         {{-- <h2 class="products__title">Самые популярные персонажи и сценарии</h2>
         <p class="products__desc">
            Хорошие костюмы, отличный реквизит и<br>
            главное - сценарий соответствует тематике!
         </p> --}}
      </div>
      <div class="products__bottom">
         <div class="products__items products-items">
            <div class="products-items__item">
               <div class="products-items__img"><img src="{{Vite::asset('resources/img/product-img.png')}}" alt="Картинка"></div>
               <div class="products-items__title">Продукт</div>
               <div class="products-items__buttons">
                  <a href="#" class="products-items__button">Подробнее</a>
                  <a href="#" class="products-items__button products-items__button_yellow">Заказать</a>
               </div>
            </div>
            <div class="products-items__item">
               <div class="products-items__img"><img src="{{Vite::asset('resources/img/product-img.png')}}" alt="Картинка"></div>
               <div class="products-items__title">Продукт</div>
               <div class="products-items__buttons">
                  <a href="#" class="products-items__button">Подробнее</a>
                  <a href="#" class="products-items__button products-items__button_yellow">Заказать</a>
               </div>
            </div>
            <div class="products-items__item">
               <div class="products-items__img"><img src="{{Vite::asset('resources/img/product-img.png')}}" alt="Картинка"></div>
               <div class="products-items__title">Продукт</div>
               <div class="products-items__buttons">
                  <a href="#" class="products-items__button">Подробнее</a>
                  <a href="#" class="products-items__button products-items__button_yellow">Заказать</a>
               </div>
            </div>
            <div class="products-items__item">
               <div class="products-items__img"><img src="{{Vite::asset('resources/img/product-img.png')}}" alt="Картинка"></div>
               <div class="products-items__title">Продукт</div>
               <div class="products-items__buttons">
                  <a href="#" class="products-items__button">Подробнее</a>
                  <a href="#" class="products-items__button products-items__button_yellow">Заказать</a>
               </div>
            </div>
            <div class="products-items__item">
               <div class="products-items__img"><img src="{{Vite::asset('resources/img/product-img.png')}}" alt="Картинка"></div>
               <div class="products-items__title">Продукт</div>
               <div class="products-items__buttons">
                  <a href="#" class="products-items__button">Подробнее</a>
                  <a href="#" class="products-items__button products-items__button_yellow">Заказать</a>
               </div>
            </div>
            <div class="products-items__item">
               <div class="products-items__img"><img src="{{Vite::asset('resources/img/product-img.png')}}" alt="Картинка"></div>
               <div class="products-items__title">Продукт</div>
               <div class="products-items__buttons">
                  <a href="#" class="products-items__button">Подробнее</a>
                  <a href="#" class="products-items__button products-items__button_yellow">Заказать</a>
               </div>
            </div>
            <div class="products-items__item">
               <div class="products-items__img"><img src="{{Vite::asset('resources/img/product-img.png')}}" alt="Картинка"></div>
               <div class="products-items__title">Продукт</div>
               <div class="products-items__buttons">
                  <a href="#" class="products-items__button">Подробнее</a>
                  <a href="#" class="products-items__button products-items__button_yellow">Заказать</a>
               </div>
            </div>
            <div class="products-items__item">
               <div class="products-items__img"><img src="{{Vite::asset('resources/img/product-img.png')}}" alt="Картинка"></div>
               <div class="products-items__title">Продукт</div>
               <div class="products-items__buttons">
                  <a href="#" class="products-items__button">Подробнее</a>
                  <a href="#" class="products-items__button products-items__button_yellow">Заказать</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="services">
   <div class="services__container">
      <div class="services__top">
         <h3 class="services__title">
            Услуги
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

{{-- <section class="reviews">
   <div class="reviews__container">
      <div class="reviews__top">
         <h2 class="reviews__title">Отзывы</h2>
         <div class="reviews__items">
            <div class="reviews__item">
               <span class="reviews__name">Иван</span>
               <p class="reviews__text">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat fuga repellendus, suscipit
                  commodi tempore optio perspiciatis, velit eaque quos nam impedit natus doloremque quo
                  necessitatibus assumenda est neque alias reprehenderit.
               </p>
            </div>
            <div class="reviews__item">
               <span class="reviews__name">Иван</span>
               <p class="reviews__text">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat fuga repellendus, suscipit
                  commodi tempore optio perspiciatis, velit eaque quos nam impedit natus doloremque quo
                  necessitatibus assumenda est neque alias reprehenderit.
               </p>
            </div>
            <div class="reviews__item">
               <span class="reviews__name">Иван</span>
               <p class="reviews__text">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat fuga repellendus, suscipit
                  commodi tempore optio perspiciatis, velit eaque quos nam impedit natus doloremque quo
                  necessitatibus assumenda est neque alias reprehenderit.
               </p>
            </div>
         </div>
      </div>
      <div class="reviews__bottom">
         <form action="#" class="reviews__form form-reviews">
            <label for="name" class="form-reviews__label">
               Имя
               <input placeholder="" type="text" id="name" class="form-reviews__input">
            </label>
            <label for="phone" class="form-reviews__label">
               Электронная почта
               <input placeholder="" type="email" id="phone" class="form-reviews__input">
            </label>
            <label for="text" class="form-reviews__label">
               Отзыв
               <textarea placeholder="" class="form-reviews__textarea" name="text" id="text" cols="30" rows="5"></textarea>
            </label>
            <button class="form-reviews__btn">Отправить</button>
         </form>
      </div>
   </div>
</section> --}}
@endsection

@section('footer')
<x-footer></x-footer>
@endsection
