@extends('layouts.admin')
@section('content')
    <h2>Detalhoes do curso</h2>
    <a href="{{ route('course.index') }}">Listar</a>
    <a href="{{ route('course.edit') }}">Editar</a>
@endsection
