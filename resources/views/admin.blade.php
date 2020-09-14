@extends('layouts.backLayout')

@section('content')
  <div class="main">
    <div class="section-title">
      Panel de Administración
    </div>
    <div class="main-body">
      @if (session('status'))
        <div class="alert alert-success">
          {{ session('status') }}
        </div>
      @endif
      <div class="success-login">
        Estás logueado!
      </div>
    </div>
  </div>
@endsection
