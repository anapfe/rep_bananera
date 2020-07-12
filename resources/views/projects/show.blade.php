@extends('layouts.layout')

@section('content')
  <div class="main">
    {{-- <div class="project-video">

  </div> --}}
  @if(isset($project->images))
    <div class="project-images">
      @foreach ($project->images as $image)
        <div class="project-image">
          <img src="{{ asset ( 'storage/' . $image->path ) }}" alt="imagen">
        </div>
      @endforeach
    @endif

  </div>
  <div class="project-data">
    <div class="left-side">
      <div class="top-left-side">
        <h3 class="project-data-title">
          {{ $project->title }}
        </h3>
        <h5 class="project-data-tag">
          {{ $project->etiquetas }}
        </h5>
      </div>
      <div class="project-description">
        @if (App::isLocale('en'))
          {{ $project->en_description }}
        @elseif (App::isLocale('cat'))
          {{ $project->cat_description }}
        @else
          {{ $project->es_description }}
        @endif
      </div>
    </div>
    <div class="right-side">
      <h4><span class="bold">{{ trans('file.año') }}: </span>{{ $project->year }}</h4>
      <h4><span class="bold">{{ trans('file.cliente') }}: </span>{{ $project->client }}</h4>
    </div>
  </div>
</div>
@endsection
