@extends('layouts.app')

@section('title', 'Главная')


@section('styles')
<link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.1/css/lightgallery-bundle.min.css" />
<link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.1/css/lg-zoom.min.css" />
<link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.1/css/lg-autoplay.min.css" />
<link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.1/css/lg-thumbnail.min.css" />

@endsection

@section('header')
<x-header></x-header>
@endsection

@section('content')
<section class="about">
   <img src="{{Vite::asset('resources/img/about-img.jpg')}}" alt="Фон">
   <div class="about__container">
      <div class="about__title">
         <h1>Проведите день рождения
            <br>
            Вашего ребенка у нас в студии
         </h1>
      </div>
      <a href="#" class="about__button">Подробнее о нас</a>
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
<section class="products">
   <div class="products__container">
      <div class="products__top">
         <h2 class="products__title">Самые популярные персонажи и сценарии</h2>
         <p class="products__desc">
            Хорошие костюмы, отличный реквизит и<br>
            главное - сценарий соответствует тематике!
         </p>
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
<section class="portfolio">
   <div class="portfolio__container">
      <div class="lightgallery" id="static-thumbnails">
         <div class="lightgallery__gutter"></div>
         <a class="lightgallery__link" href="https://static.tildacdn.com/tild6663-3865-4362-b330-383663666635/IMG-20220320-WA0006.jpg">
            <img alt="img1" src="https://static.tildacdn.com/tild6663-3865-4362-b330-383663666635/IMG-20220320-WA0006.jpg" />
         </a>
         <a class="lightgallery__link" href="https://static.tildacdn.com/tild3464-3733-4635-a231-623933343864/IMG_20211115_111803.jpg">
            <img alt="img1" src="https://static.tildacdn.com/tild3464-3733-4635-a231-623933343864/IMG_20211115_111803.jpg" />
         </a>


         <a class="lightgallery__link" href="https://static.tildacdn.com/tild3163-3935-4332-b864-353563326539/IMG_20211116_132322.jpg">
            <img alt="img2" src="https://static.tildacdn.com/tild3163-3935-4332-b864-353563326539/IMG_20211116_132322.jpg" />
         </a>
         <a class="lightgallery__link" href="https://static.tildacdn.com/tild3037-3135-4639-b330-373135336339/IMG-20220126-WA0000.jpg">
            <img alt="img2" src="https://static.tildacdn.com/tild3037-3135-4639-b330-373135336339/IMG-20220126-WA0000.jpg" />
         </a>


         <a class="lightgallery__link" href="https://static.tildacdn.com/tild3637-3366-4231-b133-383938363763/IMG-20220320-WA0008.jpg">
            <img alt="img2" src="https://static.tildacdn.com/tild3637-3366-4231-b133-383938363763/IMG-20220320-WA0008.jpg" />
         </a>
         <a class="lightgallery__link" href="https://static.tildacdn.com/tild6337-3561-4761-b136-666130616339/IMG_20211115_111720.jpg">
            <img alt="img2" src="https://static.tildacdn.com/tild6337-3561-4761-b136-666130616339/IMG_20211115_111720.jpg" />
         </a>



         <a class="lightgallery__link" href="https://static.tildacdn.com/tild6261-3964-4237-a632-633138313461/IMG-20220315-WA0025.jpg">
            <img alt="img2" src="https://static.tildacdn.com/tild6261-3964-4237-a632-633138313461/IMG-20220315-WA0025.jpg" />
         </a>
         <a class="lightgallery__link" href="https://static.tildacdn.com/tild3637-3366-4231-b133-383938363763/IMG-20220320-WA0008.jpg">
            <img alt="img2" src="https://static.tildacdn.com/tild3637-3366-4231-b133-383938363763/IMG-20220320-WA0008.jpg" />
         </a>



      </div>


   </div>
</section>
<section class="reviews">
   <div class="reviews__container">
      <div class="reviews__top">
         <h2 class="reviews__title">Отзывы</h2>
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

@section('scripts')
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.1/plugins/thumbnail/lg-thumbnail.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.1/plugins/fullscreen/lg-fullscreen.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.1/plugins/autoplay/lg-autoplay.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.1/plugins/zoom/lg-zoom.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.1/lightgallery.min.js"></script>
@endsection
