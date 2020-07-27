<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="icon" href="{{asset('favicon.ico')}}" type="image/x-icon"/>
  <link rel="shortcut icon" href="{{asset('favicon.ico')}}" type="image/x-icon"/>
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>ADMINISTRACIÓN</title>

  <!-- Styles -->
  <link href="{{ asset('css/admin.css') }}" rel="stylesheet">

  {{-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous"> --}}
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
  <script src="https://use.fontawesome.com/01079405e7.js"></script>
</head>

<body>
  <header>
    <a class="logo" href="/">
      <img class="logo-mobile" src="{{asset('images/logo-responsive.png')}}" alt="">
      <img class="logo-desktop" src="{{asset('images/logo.png')}}" alt="">
    </a>
    <div class="adminTitle">
      <ul class="adminItem">
        @if ((Auth::user()->name == 'admin'))
          <li class="adminItem">Hola {{ Auth::user()->name }}</li>
        @endif
      </ul>
    </div>
    {{-- <nav class="menu">
      <ul class="menu-items">
        @if ((Auth::user()->name == 'admin'))
          <li class="menu-item"><a href="#">Hola {{ Auth::user()->name }}</a></li>
        @endif
      </ul>
      <a class="menu-hamburger">
        <i class="fa fa-bars" aria-hidden="true"></i>
      </a>
    </nav> --}}
  </header>

  <div class="container">
    <div class="left-nav">
      @guest
      @else
        <div class="user-data">
          {{-- se puede eliminar --}}
          {{-- <img class="admin-foto" src="{{asset('storage/' . Auth::user()->photo)}}" alt=""> --}}
        </div>
        <div class="menu">
          <ul>
            <li class="dropdown">
              <a class="menu-item" id="projects" href="/admin/proyectos">Proyectos <i class="fa fa-list-alt" aria-hidden="true"></i></a>
            </li>
            <li class="dropdown">
              <a class="menu-item" id="products" href="/admin/productos">Productos <i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
            </li>
            <li class="dropdown">
              <a class="menu-item" id="tags" href="/admin/etiquetas">Etiquetas <i class="fa fa-tag" aria-hidden="true"></i></a>
            </li>
            {{-- <li><a class="menu-item" href="/editar_cuenta/{{ Auth::user()->id }}">Editar Perfil</a></li> --}}
            <li>
              <a class="menu-item" href="{{ route('logout') }}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">Salir
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
            </form>
          </li>
        </ul>
      </div>
    @endguest
  </div>
  @yield('content')
</div>
@yield('scripts')
<script src="{{ asset( 'js/backdesk.js' ) }}"></script>
</body>
</html>
