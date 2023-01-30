@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Crea Artículo</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{route('posts.store')}}"
                        method="post"
                        enctype="multipart/form-date"
                    >

                        <div class="form-group mb-2">
                            <label for="">Título *</label>
                            <input type="text" name="title" class="form-control" required>
                        </div>
                        <div class="form-group mb-2">
                            <label for="">Image</label>
                            <input type="file" name="file" class="">
                        </div>
                        <div class="form-group mb-2">
                            <label for="">Contenido *</label>
                            <textarea name="body" rows="6" class="form-control"></textarea>
                        </div>

                        <div class="form-group mb-2">
                            <label for="">Contenido embebido</label>
                            <textarea name="iframe" class="form-control" required></textarea>
                        </div>
                        <div class="form-group mb-2">
                            @csrf
                            <input type="submit" value="Enviar" class="btn btn-sm btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
