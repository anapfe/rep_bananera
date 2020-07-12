@section('stylesheet')
  <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
@endsection

@section('scripts_header')
  <!-- Scripts -->
  <script src="{{ asset('js/float-panel.js') }}"></script>
@endsection

@section('title')
  <title>REPÚBLICA BANANERA</title>
@endsection

<body>
  <header>
    <div id="backtop">&#9650;</div>
    <a class="logo" href="/">
      <img class="logo-mobile" src="{{asset('images/logo-responsive.png')}}" alt="">
      <img class="logo-desktop" src="{{asset('images/logo.png')}}" alt="">
    </a>
    <nav class="menu">
      <ul class="menu-items">
        <li class="menu-item"> <a href="/">{{ trans('file.proyectos') }}</a> </li>
        <li class="menu-item"> <a href="/estudio">{{ trans('file.estudio') }}</a> </li>
        <li class="menu-item"> <a href="mailto:info@republicabananera.com">{{ trans('file.contacto') }}</a> </li>

        @if (App::isLocale('en'))
          <li class="menu-item"> <a href="/es">es</a> </li>
          <li class="menu-item"> <a href="/cat">cat</a> </li>
        @elseif (App::isLocale('cat'))
          <li class="menu-item"> <a href="/es">es</a> </li>
          <li class="menu-item"> <a href="/en">en</a> </li>
        @else
          <li class="menu-item"> <a href="/en">en</a> </li>
          <li class="menu-item"> <a href="/cat">cat</a> </li>
        @endif

        {{-- @auth
          <li class="menu-item"><a href="/carrito"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
        @endauth --}}
      </ul>
      <a class="menu-hamburger">
        <i class="fa fa-bars" aria-hidden="true"></i>
      </a>
    </nav>
  </header>
  {{-- @guest
@else
<li class="menu-item">
<a href="{{ route('logout') }}"
onclick="event.preventDefault();
document.getElementById('logout-form').submit();">
Salir
</a>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
{{ csrf_field() }}
</form>
</li>
@endguest --}}

@yield('content')

@yield('scripts')

<!-- Scripts -->
<script src="{{ asset('js/main.js') }}"></script>

</body>
</html>
