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

  <title>panel administración</title>

  <!-- Styles -->
  <link href="{{ asset('css/admin.css') }}" rel="stylesheet">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap" rel="stylesheet">

  <!-- Scripts -->
  <script src="{{ asset('js/float-panel.js') }}"></script>

</head>

<body>
  <header>
    <a class="logo" href="/">
      <img class="logo-mobile" src="{{asset('images/logo-responsive.png')}}" alt="">
      <img class="logo-desktop" src="{{asset('images/logo.png')}}" alt="">
    </a>
    <nav class="menu">
      <ul class="menu-items">

        {{-- @if (App::isLocale('en'))
        <li class="menu-item"> <a href="/es">es</a> </li>
        <li class="menu-item"> <a href="/cat">cat</a> </li>
      @elseif (App::isLocale('cat'))
      <li class="menu-item"> <a href="/es">es</a> </li>
      <li class="menu-item"> <a href="/en">en</a> </li>
    @else
    <li class="menu-item"> <a href="/en">en</a> </li>
    <li class="menu-item"> <a href="/cat">cat</a> </li>
  @endif --}}

</ul>
</nav>
</header>

<div class="container">
  <div class="left-nav">
    @guest
    @else
      <div class="user-data">
        {{-- se puede eliminar --}}
        {{-- <img class="admin-foto" src="{{asset('storage/' . Auth::user()->photo)}}" alt=""> --}}
        <span class="username">Hola {{ Auth::user()->name }}</span>
      </div>
      <div class="menu">
        <ul>
          <li class="dropdown">
            <a class="menu-item" id="projects" href="#">Proyectos <i class="fa fa-angle-down" aria-hidden="true"></i></a>
            <ul class="hidden" id="dropProjects">
              <li class="menu-subitem"><a href="/admin/proyectos">Listado</a></li>
              <li class="menu-subitem"><a href="/admin/proyecto_nuevo">Nuevo Proyecto</a></li>
            </ul>
          </li>
          {{-- <li class="dropdown">
          <a class="menu-item" id="products" href="#">Productos <i class="fa fa-angle-down" aria-hidden="true"></i></a>
          <ul class="hidden" id="dropProducts">
          <li class="menu-subitem"><a href="/admin/productos">Listado</a></li>
          <li class="menu-subitem"><a href="/admin/producto_nuevo">Nuevo Producto</a></li>
        </ul>
      </li> --}}
      <li class="dropdown">
        <a class="menu-item" id="tags" href="#">Etiquetas <i class="fa fa-angle-down" aria-hidden="true"></i></a>
        <ul class="hidden" id="dropTags">
          <li class="menu-subitem"><a href="/admin/etiquetas">Listado</a></li>
          <li class="menu-subitem"><a href="/admin/etiqueta_nueva">Nueva Etiqueta</a></li>
        </ul>
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
