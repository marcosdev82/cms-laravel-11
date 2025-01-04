@extends('layouts.admin')
@section('content')
    <h2>Cadastrar curso</h2><br><br>
    <a href="{{ route('course.index') }}">Listar</a>
    <form action="{{ route('course.store') }}" method="POST">
        @csrf
        @method('POST')

        <label for="name"> Nome: </label>
        <input type="text" name="name" id="name" placeholder="Nome do curso" value="{{ old('name') }}" required>
        <button type="submit">Cadastrar</button>
    </form>
@endsection
