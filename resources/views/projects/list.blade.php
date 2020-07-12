@extends('layouts.backLayout')

@section('content')

  <div class="main">
    <div class="section-title">
      <span>Proyectos</span>
      <div class="controls">
        <div class="control">
          <a href="/admin/proyecto_nuevo">+</a>
        </div>
        <form class="search" action="/admin/buscarProyectos" method="get">
          <input class="search-box" type="text" name="search" value="" placeholder="buscar">
          <button class="search-button" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
        </form>
        <select class="control-select" name="">
          <option value=""><a href="#">Acciones por Lote</a></option>
          <option value=""><a href="/admin/proyectos_eliminar">Eliminar</a></option>
        </select>
      </div>
    </div>
    <div class="main-body">
      @if (count($projects) <= 0)
        <div class="results">
          No se encontraron resultados
        </div>
      @else
        <table>
          <tr>
            <th class="project-10">Foto Inicio</th>
            <th class="project-15"><a href="/proyectos_titulo">Título ˅</a></th>
            <th class="project-description">Descripción ES</th>
            <th class="project-description">Descripción EN</th>
            <th class="project-description">Descripción CAT</th>
            <th class="project-ctrl"><a href="/admin/proyectos_año">Año ˅</a></th>
            <th class="project-10"><a href="/admin/proyectos_cliente">Cliente ˅</a></th>
            <th class="project-15">Etiquetas</th>
            <th class="project-ctrl">Editar</th>
            <th class="project-ctrl">Eliminar</th>
            <th class="project-ctrl"><input type="checkbox" name="selectAll" id="selectAll"></th>
          </tr>

          @foreach ($projects as $project)
            {{-- {{dd($project->tags)}} --}}
            <tr>
              <td><img class="project-img" src="{{ asset ( 'storage/' . $project->primary_img ) }}" alt=""></td>
              <td>{{ $project->title }}</td>
              <td>{{ $project->es_description }}</td>
              <td>{{ $project->en_description }}</td>
              <td>{{ $project->cat_description }}</td>
              <td>{{ $project->year }}</td>
              <td>{{ $project->client }}</td>
              <td>
                @foreach ($project->tags as $tag)
                  {{ $tag->es_name }},
                @endforeach

                {{-- {{ dd($project->tags[0]->name) }} --}}
              </td>
              <td><a href="/admin/proyecto_modificar/{{$project->id}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
              <td><a class="delete" href="/admin/proyecto_eliminar/{{$project->id}}"><i class="fa fa-times" aria-hidden="true"></i></a></td>
              <td><input type="checkbox" name="selectAll" class="select"> </td>
            </tr>
          @endforeach
        </table>
      @endif
    </div>
  </div>
@endsection
