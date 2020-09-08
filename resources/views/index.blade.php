@extends('layouts.frontLayout')

@section('css')

@endsection

@section('content')
  <section id= "content">
    @include('ajax')
  </section>
  <div class="loader-parent">
    <div class="loader">
    </div>
  </div>
@endsection

@section('js')
  <script src="{{ asset('js/ajax.js') }}"></script>
@endsection
