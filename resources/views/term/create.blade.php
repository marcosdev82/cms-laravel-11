@extends('layouts.admin')
@section('content')
    <h2>Cadastrar term</h2><br><br>
    <a href="{{ route('term.index') }}">Listar</a>

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
        <name>Criar term</name>
    </head>

    <body>

        <div class="container mt-5">
            <h2>Criar novo term</h2>
            <form action="{{ route('term.store') }}" method="POST">
                @csrf
                @method('POST')

                <div class="mb-3">
                    <label for="name" class="form-label">Term:</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Nome"
                        value="{{ old('name') }}" required>
                </div>

                <div class="mb-3">
                    <label for="slug" class="form-label">Slug:</label>
                    <input type="text" name="slug" id="slug" class="form-control" placeholder="Slug do term"
                        value="{{ old('slug') }}">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Descrição:</label>
                    <textarea name="description" id="description" class="form-control">{{ old('slug') }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">Criar term</button>
            </form>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    </body>

    </html>
@endsection
