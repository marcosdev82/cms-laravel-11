@extends('layouts.admin')
@section('content')
    <h2>Cadastrar post</h2><br><br>
    <a href="{{ route('post.index') }}">Listar</a>

    @if (session('success'))
        <p style="color: green;">
            {{ session('success') }}
        </p>
    @endif

    <!DOCTYPE html>
    <html lang="pt-BR">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <title>Criar Post</title>
    </head>

    <body>

        <div class="container mt-5">
            <h2>Criar Novo Post</h2>
            <form action="{{ route('post.store') }}" method="POST">
                @csrf
                @method('POST')

                <div class="mb-3">
                    <label for="post_title" class="form-label">Título:</label>
                    <input type="text" name="post_title" id="post_title" class="form-control"
                        placeholder="Título do post" value="{{ old('post_title') }}" required>
                </div>

                <div class="mb-3">
                    <label for="slug" class="form-label">Slug:</label>
                    <input type="text" name="slug" id="slug" class="form-control" placeholder="Slug do post"
                        value="{{ old('slug') }}">
                </div>

                <div class="mb-3">
                    <label for="date_expire" class="form-label">Data de Expiração:</label>
                    <input type="datetime-local" name="date_expire" id="date_expire" class="form-control"
                        value="{{ old('date_expire') }}">
                </div>

                <div class="mb-3">
                    <label for="post_type" class="form-label">Tipo:</label>
                    <input type="text" name="post_type" id="post_type" class="form-control" placeholder="Tipo do post"
                        value="{{ old('type') }}" required>
                </div>

                <button type="submit" class="btn btn-primary">Criar Post</button>
            </form>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    </body>

    </html>
@endsection
