@extends('layouts.frontLayout')

@section('css')

@endsection

@section('content')
  <div id= "content">
    @include('ajax')
  </div>
  <div class="loader">
  </div>
@endsection

@section('js')
  <script src="{{ asset('js/ajax.js') }}"></script>
@endsection
