@extends('layouts.admin')
@section('content')
    <h2>Detalhoes do curso</h2>
    <a href="{{ route('courses.index') }}">Listar</a>
    <a href="{{ route('courses.edit') }}">Editar</a>
@endsection
