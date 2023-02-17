<!DOCTYPE html>

<html lang="ru">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Funny Holidays | Админ панель</title>
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
   @vite( ["resources/admin/plugins/fontawesome-free/css/all.min.css",])
   @vite( ["resources/admin/dist/css/adminlte.min.css",])

</head>
<body class="hold-transition sidebar-mini">
   <div class="wrapper">
      @yield('content')
   </div>
   @vite( ["resources/admin/plugins/jquery/jquery.min.js","resources/admin/plugins/bootstrap/js/bootstrap.bundle.min.js", "resources/admin/dist/js/adminlte.min.js"])
   @yield('scripts')
   {{-- <script src="plugins/jquery/jquery.min.js"></script>
      <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="dist/js/adminlte.min.js"></script> --}}
</body>
</html>
