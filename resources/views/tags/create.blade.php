@extends('layouts.backLayout')

@section('content')
  <div class="main">
    <div class="section-title">
      <span>Etiqueta - Nueva</span>
    </div>
    <div class="main-body">
      <form class="form-project" action="/admin/etiqueta_nueva" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}

          <div class="cajitas-form">
            <div class="input-div" id="es_name">
              <label class="form-label" for="es_name">Nombre Español</label>
              <input class="input-project" type="text" name="es_name" value="{{ old('es_name') }}" autofocus>
            </div>
            <div class="input-div" id="en_name">
              <label class="form-label" for="en_name">Nombre Inglés</label>
              <input class="input-project" type="text" name="en_name" value="{{ old('en_name') }}" autofocus>
            </div>
            <div class="input-div" id="cat_name">
              <label class="form-label" for="cat_name">Nombre Catalán</label>
              <input class="input-project" type="text" name="cat_name" value="{{ old('cat_name') }}" autofocus>
            </div>
          </div>

          <div class="input">
            <button class="btn" type="submit" name="button">Subir</button>
            <button class="btn neg" type="cancel" name="button">Cancelar</button>
          </div>
        </form>

    </div>
  @endsection
