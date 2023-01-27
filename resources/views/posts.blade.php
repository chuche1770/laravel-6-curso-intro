@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

        <!-- CICLO FOR DE POSTS para recuperar todo los post y mostarlos por pantalla -->
        @foreach($posts as $post)
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">{{$post->title}}</h5>

                    <!-- POST TEXT Y BUTTON -->
                    <p class="card-text">
                        <!-- //extracto de post -->
                        {{$post->get_excerpt}}
                        <!-- Nombre ruta, esta instancia de posts  -->
                        <a href="{{ route('post',$post) }}">Leer más</a>
                    </p>

                    <!-- # USER NAME Y DATE -->
                    <p class="text-muted mb-0">
                        <em>
                            &ndash; {{$post->user->name}}
                        </em>
                        {{$post->created_at->format("d M Y")}}
                    </p>

                </div>
            </div>
        @endforeach
        {{ $posts->links()}}

        </div>
    </div>
</div>
@endsection
