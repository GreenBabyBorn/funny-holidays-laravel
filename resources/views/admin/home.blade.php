 @extends('layouts.admin')
 @section('content')


 <nav class="main-header navbar navbar-expand navbar-white navbar-light">

    <ul class="navbar-nav">
       <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
       </li>
       <li class="nav-item d-none d-sm-inline-block">
          <a href="" class="nav-link">Главная</a>
       </li>
       {{-- <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Contact</a>
       </li> --}}
    </ul>


    <ul class="navbar-nav ml-auto">

       {{-- <li class="nav-item">
          <a class="nav-link" data-widget="navbar-search" href="#" role="button">
             <i class="fas fa-search"></i>
          </a>
          <div class="navbar-search-block">
             <form class="form-inline">
                <div class="input-group input-group-sm">
                   <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                   <div class="input-group-append">
                      <button class="btn btn-navbar" type="submit">
                         <i class="fas fa-search"></i>
                      </button>
                      <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                         <i class="fas fa-times"></i>
                      </button>
                   </div>
                </div>
             </form>
          </div>
       </li> --}}


       {{-- <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
             <i class="far fa-comments"></i>
             <span class="badge badge-danger navbar-badge">3</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
             <a href="#" class="dropdown-item">

                <div class="media">
                   <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                   <div class="media-body">
                      <h3 class="dropdown-item-title">
                         Brad Diesel
                         <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                      </h3>
                      <p class="text-sm">Call me whenever you can...</p>
                      <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                   </div>
                </div>

             </a>
             <div class="dropdown-divider"></div>
             <a href="#" class="dropdown-item">

                <div class="media">
                   <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                   <div class="media-body">
                      <h3 class="dropdown-item-title">
                         John Pierce
                         <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                      </h3>
                      <p class="text-sm">I got your message bro</p>
                      <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                   </div>
                </div>

             </a>
             <div class="dropdown-divider"></div>
             <a href="#" class="dropdown-item">

                <div class="media">
                   <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                   <div class="media-body">
                      <h3 class="dropdown-item-title">
                         Nora Silvester
                         <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                      </h3>
                      <p class="text-sm">The subject goes here</p>
                      <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                   </div>
                </div>

             </a>
             <div class="dropdown-divider"></div>
             <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
          </div>
       </li> --}}

       {{-- <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
             <i class="far fa-bell"></i>
             <span class="badge badge-warning navbar-badge">15</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
             <span class="dropdown-header">15 Notifications</span>
             <div class="dropdown-divider"></div>
             <a href="#" class="dropdown-item">
                <i class="fas fa-envelope mr-2"></i> 4 new messages
                <span class="float-right text-muted text-sm">3 mins</span>
             </a>
             <div class="dropdown-divider"></div>
             <a href="#" class="dropdown-item">
                <i class="fas fa-users mr-2"></i> 8 friend requests
                <span class="float-right text-muted text-sm">12 hours</span>
             </a>
             <div class="dropdown-divider"></div>
             <a href="#" class="dropdown-item">
                <i class="fas fa-file mr-2"></i> 3 new reports
                <span class="float-right text-muted text-sm">2 days</span>
             </a>
             <div class="dropdown-divider"></div>
             <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
          </div>
       </li> --}}
       <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
             <i class="fas fa-expand-arrows-alt"></i>
          </a>
       </li>

       {{-- <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
             <i class="fas fa-th-large"></i>
          </a>
       </li> --}}
    </ul>
 </nav>



 <aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="#" class="brand-link">
       {{-- <img src="{{Vite::asset('resources/admin/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
       <span class="brand-text font-weight-light">FunnyHolidays</span>
    </a>


    <div class="sidebar">

       <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
             <img src="{{Vite::asset('resources/admin/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info d-flex justify-content-between w-100">
             <a href="#" class="d-block"> {{ Auth::user()->name }}</a>
             <div class="" aria-labelledby="navbarDropdown">
                <a class="" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                   {{ __('Выйти') }}

                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                   @csrf
                </form>
             </div>
          </div>

       </div>

       {{--
       <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
             <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
             <div class="input-group-append">
                <button class="btn btn-sidebar">
                   <i class="fas fa-search fa-fw"></i>
                </button>
             </div>
          </div>
       </div> --}}


       <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

             <li class="nav-item menu-open">
                <a href="#" class="nav-link active">
                   <i class="nav-icon fas fa-tachometer-alt"></i>
                   <p>
                      Все страницы
                      <i class="right fas fa-angle-left"></i>
                   </p>
                </a>
                <ul class="nav nav-treeview">
                   <li class="nav-item">
                      {{-- <a href="#" class="nav-link active"> --}}
                      <a href="{{ url('/') }}" class="nav-link">
                         {{-- <i class="far fa-circle nav-icon"></i> --}}
                         <p>Главная</p>
                      </a>
                   </li>
                   <li class="nav-item">
                      <a href="{{ url('about') }}" class="nav-link">
                         {{-- <i class="far fa-circle nav-icon"></i> --}}
                         <p>О нас</p>
                      </a>
                   </li>
                   <li class="nav-item">
                      <a href="{{ url('animators') }}" class="nav-link">
                         {{-- <i class="far fa-circle nav-icon"></i> --}}
                         <p>Аниматоры</p>
                      </a>
                   </li>
                   <li class="nav-item">
                      <a href="{{ url('contacts') }}" class="nav-link">
                         {{-- <i class="far fa-circle nav-icon"></i> --}}
                         <p>Контакты</p>
                      </a>
                   </li>
                   <li class="nav-item">
                      <a href="{{ url('costs') }}" class="nav-link">
                         {{-- <i class="far fa-circle nav-icon"></i> --}}
                         <p>Цены</p>
                      </a>
                   </li>
                   <li class="nav-item">
                      <a href="{{ url('decoration') }}" class="nav-link">
                         {{-- <i class="far fa-circle nav-icon"></i> --}}
                         <p>Оформление</p>
                      </a>
                   </li>
                   <li class="nav-item">
                      <a href="{{ url('reviews') }}" class="nav-link">
                         {{-- <i class="far fa-circle nav-icon"></i> --}}
                         <p>Отзывы</p>
                      </a>
                   </li>
                   <li class="nav-item">
                      <a href="{{ url('shows') }}" class="nav-link">
                         {{-- <i class="far fa-circle nav-icon"></i> --}}
                         <p>Шоу программы</p>
                      </a>
                   </li>
                </ul>
             </li>

          </ul>
       </nav>

    </div>

 </aside>


 <div class="content-wrapper">

    <div class="content-header">
       <div class="container-fluid">
          <div class="row mb-2">
             <div class="col-sm-6">
                <h1 class="m-0">Панель управления</h1>
             </div>
             <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                   <li class="breadcrumb-item"><a href="#">Главная</a></li>
                   <li class="breadcrumb-item active">Отзывы</li>
                </ol>
             </div>
          </div>
       </div>
    </div>

    <div class="content">
       <div class="container-fluid">
          <div class="row">
             <div class="col-lg-6">
                @foreach($reviews as $review)
                <div class="card card-primary card-outline">
                   <div class="card-header">
                      <h5 class="m-0">{{ $review->author}}</h5>
                   </div>

                   <div class="card-body">
                      <h6 class="card-title">{{ $review->email}}</h6>

                      <p class="card-text">{{ $review->text}}</p>
                      <a href="{{ 'reviews/' .  $review->id }}" class="btn btn-danger">Удалить</a>
                   </div>
                </div>
                @endforeach
             </div>

          </div>

       </div>
    </div>

 </div>



 <aside class="control-sidebar control-sidebar-dark">

    <div class="p-3">
       <h5>Title</h5>
       <p>Sidebar content</p>
    </div>
 </aside>



 <footer class="main-footer">

    <div class="float-right d-none d-sm-inline">
       ИС-301
    </div>

    <strong>Copyright &copy; 2023 <a href="https://adminlte.io">greenbabyborn</a>.</strong> Все права защищены.
 </footer>
 @endsection
