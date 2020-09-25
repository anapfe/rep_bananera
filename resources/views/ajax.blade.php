{{-- filtro de proyectos por tag --}}
<div class="tag-filter">
  <ul>
    <li class="tag">
      <a class="{{request()->session()->get('tag')==''?'tag-selected':''}}" href="javascript:ajaxLoad('{{ url( '?tag='. ' ' ) }}')">
        @if (App::isLocale('en'))
          all
        @elseif (App::isLocale('cat'))
          tots
        @else
          todos
        @endif
      </a>
    </li>
    @foreach ($tags as $tag)
      <li class="tag">
        @if (App::isLocale('en'))
          <a class="{{request()->session()->get('tag')==$tag->es_name?'tag-selected':''}}" href="javascript:ajaxLoad('{{ url( '?tag='. $tag->es_name ) }}')">{{ $tag->en_name}}</a>
        @elseif (App::isLocale('cat'))
          <a class="{{request()->session()->get('tag')==$tag->es_name?'tag-selected':''}}" href="javascript:ajaxLoad('{{ url( '?tag='. $tag->es_name ) }}')">{{ $tag->cat_name}}</a>
        @else
          {{-- esta linea ejecuta la funcion ajaxLoad con los datos pasados  --}}
          <a class="{{request()->session()->get('tag')==$tag->es_name?'tag-selected':''}}" href="javascript:ajaxLoad('{{ url( '?tag='. $tag->es_name ) }}')">{{ $tag->es_name}}</a>
        @endif
      </li>
    @endforeach
  </ul>
</div>
{{-- END filtro de proyectos por tag --}}
{{-- INICIO masonry de proyectos  --}}
<div class="project-wrapper">
  <div class="project-masonry">
    @foreach ($projects as $project)
      <div class="project-card">
        <a class="project-link" href="{{ '/proyecto/' . $project->slug }}">
          <img class="project-img" src="{{ asset( '/storage/' . $project->primary_img )}}" alt="{{ $project->title }}">
          <div class="project-caption">
            <div>
              <div>
                <h3 class="project-title">{{ $project->title }}</h3>
                <h2 class="tag-name">
                  @foreach ($project->tags as $key => $tag)
                    @if (count($project->tags) > 1 && !$loop->last)
                      @if (App::isLocale('en'))
                        {{$tag->en_name . ','}}
                      @elseif (App::isLocale('cat'))
                        {{$tag->cat_name . ','}}
                      @else
                        {{$tag->es_name . ','}}
                      @endif
                    @else
                      @if (App::isLocale('en'))
                        {{$tag->en_name }}
                      @elseif (App::isLocale('cat'))
                        {{$tag->cat_name }}
                      @else
                        {{$tag->es_name }}
                      @endif
                    @endif
                  @endforeach
                </h2>
              </div>
            </div>
          </div>
        </a>
      </div>
    @endforeach
  </div>
</div>
{{-- END masonry de proyectos  --}}
{{-- </div> --}}
