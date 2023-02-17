@extends('layouts.app')

@section('title', 'Оформление')


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
<section class="welcome">
   <img src="{{Vite::asset('resources/img/bg.jpg')}}" alt="Фон">
   <div class="welcome__container">
      <div class="welcome__title">
         <h2>Оформление праздника</h2>
      </div>
      {{-- <a href="#" class="welcome__button">Подробнее о нас</a> --}}
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
