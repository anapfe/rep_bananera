@extends('layouts.backLayout')

@section('content')
  <div class="main-wrapper">
    <div class="section-title">
      <span>Nuevo proyecto</span>
    </div>
    <div class="main-body">
      <form class="form-project" action="/admin/proyecto_nuevo" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="input-div {{ $errors->has('title') ? ' has-error' : '' }}" id="title">
          <label class="form-label" for="title">Titulo</label>
          <input class="input-project" type="text" name="title" value="{{ old('title') }}" autofocus>
          @if ($errors->has('title'))
            <span class="errors">
              <strong>{{ $errors->first('title') }}</strong>
            </span>
          @endif
        </div>
        <div class="input-div {{ $errors->has('year') ? ' has-error' : '' }}" id="year">
          <label class="form-label" for="year">Año</label>
          <input class="input-project" type="text" name="year" value="{{ old('year') }}">
          @if ($errors->has('year'))
            <span class="errors">
              <strong>{{ $errors->first('year') }}</strong>
            </span>
          @endif
        </div>
        <div class="input-div {{ $errors->has('client') ? ' has-error' : '' }}" id="client">
          <label class="form-label" for="client">Cliente</label>
          <input class="input-project" type="text" name="client" value="{{ old('client') }}">
          @if ($errors->has('client'))
            <span class="errors">
              <strong>{{ $errors->first('client') }}</strong>
            </span>
          @endif
        </div>
        {{-- descripción en español --}}
        <div class="input-div {{ $errors->has('es_description') ? ' has-error' : '' }}" id="es_description">
          <label class="form-label" for="es_description">Descripción en español</label>
          <textarea class="input-textarea" name="es_description" value="{{ old('es_description') }}"></textarea>
          @if ($errors->has('es_description'))
            <span class="errors">
              <strong>{{ $errors->first('es_description') }}</strong>
            </span>
          @endif
        </div>
        {{-- descripción en ingles  --}}
        <div class="input-div {{ $errors->has('en_description') ? ' has-error' : '' }}" id="en_description">
          <label class="form-label" for="en_description">Descripción en inglés</label>
          <textarea class="input-textarea" name="en_description" value="{{ old('en_description') }}"></textarea>
          @if ($errors->has('en_description'))
            <span class="errors">
              <strong>{{ $errors->first('en_description') }}</strong>
            </span>
          @endif
        </div>
        {{-- descripción en catalan --}}
        <div class="input-div {{ $errors->has('es_description') ? ' has-error' : '' }}" id="cat_description">
          <label class="form-label" for="cat_description">Descripción en catalan</label>
          <textarea class="input-textarea" name="cat_description" value="{{ old('cat_description') }}"></textarea>
          @if ($errors->has('cat_description'))
            <span class="errors">
              <strong>{{ $errors->first('cat_description') }}</strong>
            </span>
          @endif
        </div>
        {{-- tags --}}
        <div class="div-tags {{ $errors->has('tags') ? ' has-error' : '' }}">
          <label class="form-label">Etiquetas</label>
          @foreach ($tags as $tag)
            <input type="checkbox" name="tags[]" value="{{$tag->id}}" id="{{ $tag->es_name }}">
            <label for="{{ $tag->es_name }}" class="tag-text">
              {{$tag->es_name}}
            </label>
          @endforeach
          @if ($errors->has('tags'))
            <span class="errors">
              <strong>{{ $errors->first('tags') }}</strong>
            </span>
          @endif
        </div>
        <div class="input-div {{ $errors->has('primary_img') ? ' has-error' : '' }}">
          <label class="form-label" for="primary_img">Imagen home</label>
          <input class="upload-file" type="file" name="primary_img" id="primary_img"  >
          @if ($errors->has('primary_img'))
            <span class="errors">
              <strong>{{ $errors->first('primary_img') }}</strong>
            </span>
          @endif
        </div>
        <div class="input-div">
          <label class="form-label" for="altImg[]">Otras imagenes</label>
          <input class="upload-file" type="file" name="altImg[]">
        </div>
        <div class="input-div">
          <input class="upload-file" type="file" name="altImg[]">
        </div>
        <div class="input-div">
          <input class="upload-file" type="file" name="altImg[]">
        </div>
        <div class="input-div">
          <input class="upload-file" type="file" name="altImg[]">
        </div>
        <div class="input-div">
          <input class="upload-file" type="file" name="altImg[]">
        </div>
        <div class="input">
          <button class="btn" type="submit" name="button">Subir</button>
        </div>
      </form>
    </div>
  </div>
@endsection

@section('scripts')
  {{-- <SCRIPT LANGUAGE="JavaScript">

  var time = new Date();
  var year = time.getYear();
  if (year < 1900) {
  year = year + 1900;
}
var date = year - 20; /*change the '101' to the number of years in the past you want to show */
var future = year + 10; /*change the '100' to the number of years in the future you want to show */
document.writeln ("<FORM><SELECT><OPTION value=\"\">Year");
do {
date++;
document.write ("<OPTION value=\"" +date+"\">" +date+ "");
}
while (date < future)
document.write ("</SELECT></FORM>");

</script> --}}

@endsection
