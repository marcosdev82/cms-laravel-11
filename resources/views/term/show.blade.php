@extends('layouts.admin')
@section('content')
    <h2>Detalhes do term</h2>
    <a href="{{ route('term.index') }}">Listar</a>
    <a href="{{ route('term.edit') }}">Editar</a>
@endsection
