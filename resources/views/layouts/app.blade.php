<!DOCTYPE html>
<html lang="ru">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="FunnyHolidays">
   <meta name="keywords" content="организация праздников, мероприятия, детские праздники">
   <title>FunnyHolidays - @yield('title')</title>

   @vite( ["resources/sass/app.scss",])

   @yield('styles')
</head>


<body>
   <div class="wrapper">
      @yield('header')
      <main class="page">
         @yield('content')
      </main>
      @yield('footer')
   </div>
   @yield('scripts')

   @vite( ["resources/js/script.js",])
</body>

</html>
