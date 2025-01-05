@extends('layouts.admin')

@section('content')
    <h2>Listar os terms</h2>
    <a href="{{ route('term.show') }}">Visualizar</a>
    <a href="{{ route('term.create') }}">Cadastrar</a><br><br>

    @forelse ($terms as $term)
        {{ $term->term_id }}<br>
        {{ $term->name }}<br>
        <hr>
    @empty
        <p style="color:red">Nenhum term encontrado!</p>
    @endforelse

    {{ $terms->links() }}
@endsection
