@extends('layouts.admin')

@section('content')
    <h2>Listar os posts</h2>
    <a href="{{ route('post.show') }}">Visualizar</a>
    <a href="{{ route('post.create') }}">Cadastrar</a><br><br>

    @forelse ($posts as $post)
        {{ $post->ID }}<br>
        {{ $post->post_title }}<br>
        {{ \Carbon\Carbon::parse($post->created_at)->format('d/m/Y H:i:s') }}<br>
        {{ \Carbon\Carbon::parse($post->updated_at)->format('d/m/Y H:i:s') }}<br>
        <hr>
    @empty
        <p style="color:red">Nenhum post encontrado!</p>
    @endforelse

    {{ $posts->links() }}
@endsection
