@extends('layouts.admin')

@section('content')
    <h2>Listar os cursos</h2>
    <a href="{{ route('course.show') }}">Visualizar</a>
    <a href="{{ route('course.create') }}">Cadastrar</a><br><br>
    {{-- {{ dd($courses) }} --}}

    @forelse ($courses as $course)
        {{ $course->id }}<br>
        {{ $course->name }}<br>
        {{ \Carbon\Carbon::parse($course->created_at)->format('d/m/Y H:i:s') }}<br>
        {{ \Carbon\Carbon::parse($course->updated_at)->format('d/m/Y H:i:s') }}<br>
        <hr>
    @empty
        <p style="color:red">Nenhum curso encontrado!</p>
    @endforelse

    {{ $courses->links() }}
@endsection
