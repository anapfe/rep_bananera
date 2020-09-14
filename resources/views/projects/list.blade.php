@extends('layouts.backLayout')

@section('content')

  <div class="main">
    <div id="modal">
      <div class="modalMessege">
        <p id="pregunta">¿ELIMINAR?</p>
        <p class="h5">No se puede deshacer.</p>
        <div class="confirmacion">
          <div  id="confirm" class="btn">Sí, eliminar</div>
          <div id="decline" class="btn neg">No, volver atrás</div>
        </div>
      </div>
    </div>
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
        <select name="">
          <option value=""><a href="#">Ordenar</a></option>
          {{-- <option value=""><a href="/admin/proyectos_eliminar">Eliminar</a></option> --}}
          <option value=""><a href="$">Ordenar por Fecha</a></option>
          <option value=""><a href="$">Ordenar por Nombre</a></option>
        </select>
        {{-- <div class=""><input type="checkbox" name="selectAll" id="selectAll"></div> --}}
      </div>
    </div>
    <div class="main-body">
      @if (count($projects) <= 0)
        <div class="results">
          No se encontraron resultados
        </div>
      @else
        @foreach ($projects as $project)
          <div class="projectBlock">
            <div class="one">
              <img src="{{ asset ( 'storage/' . $project->primary_img ) }}" alt="">
            </div>
            <div class="two">
              <span class="title">{{ $project->title }}</span>
              <span class="tags">
                @foreach ($project->tags as $tag)
                  @if ( $loop->first && $loop->last || $loop->last)
                    {{ $tag->es_name }}
                  @else
                    {{ $tag->es_name }},
                  @endif
                @endforeach
              </span>
              <span class="description">
                {{str_limit($project->es_description, 120, '...')}}
              </span>
            </div>
            <div class="three">
              <span class="client">{{ $project->client }}</span>
              <span class="year">{{ $project->year }}</span>
            </div>
            <div class="four">
              <a class="actions show" href="/proyecto/{{$project->slug}}"><i class="fa fa-eye" aria-hidden="true"></i></a>
              <a class="actions edit" href="/admin/proyecto_modificar/{{$project->id}}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
              <a class="actions delete" href="/admin/proyecto_eliminar/{{$project->id}}"><i class="fa fa-times" aria-hidden="true"></i></a>
              {{-- <div class="actions"><input type="checkbox" name="selectAll" class="select"></div> --}}
            </div>
          </div>
        @endforeach
      @endif
    </div>
  </div>
@endsection
