@extends('layouts.admin')
@section('content')
    <h2>Cadastrar post</h2><br><br>
    <a href="{{ route('post.index') }}">Listar</a>

    @if (session('success'))
        <p style="color: green;">
            {{ session('success') }}
        </p>
    @endif

    <form action="{{ route('post.store') }}" method="POST">
        @csrf
        @method('POST')

        <label for="title"> Nome: </label>
        <input type="text" name="title" id="title" placeholder="Título do post" value="{{ old('title') }}" required>
        <button type="submit">Cadastrar</button>
    </form>
@endsection
