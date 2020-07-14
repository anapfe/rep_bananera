@extends('layouts.frontLayout')

@section('content')
  <div class="main">
    <div class="tag-filter wrapper">
      <ul>
        <li class="tag">
          <a href="/">
            @if (App::isLocale('en'))
              all
            @elseif (App::isLocale('cat'))
              tots
            @else
              todos
            @endif
          </a>
        </li>
        @if (App::isLocale('en'))
          @foreach ($tags as $tag)
            <li class="tag">
              <a href="/proyectos/{{ $tag->es_name }}">
                {{ $tag->en_name}}
              </a>
            </li>
          @endforeach
        @elseif (App::isLocale('cat'))
          @foreach ($tags as $tag)
            <li class="tag">
              <a href="/proyectos/{{ $tag->es_name }}">
                {{ $tag->cat_name}}
              </a>
            </li>
          @endforeach
        @else
          @foreach ($tags as $tag)
            <li class="tag">
              <a href="/proyectos/{{ $tag->es_name }}">
                {{ $tag->es_name}}
              </a>
            </li>
          @endforeach
        @endif
      </ul>
    </div>
    <div class="project-wrapper">
      <div class="project-masonry">
        @foreach ($projects as $project)
          <div class="project-card">
            <a class="project-link" href="{{ '/proyecto/' . $project->id }}">
              <img class="project-img" src="{{ asset( '/storage/' . $project->primary_img )}}" alt="{{ $project->title }}">
              <div class="project-caption">
                <div>
                  <div>
                    <h3 class="project-title">{{ $project->title }}</h3>
                    <h2 class="tag-name">{{ $project->etiquetas }}</h2>
                  </div>
                </div>
              </div>
            </a>
          </div>
        @endforeach
      </div>
    </div>
  </div>
@endsection
