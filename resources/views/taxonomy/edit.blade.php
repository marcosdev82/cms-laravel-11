@extends('layouts.admin')
@section('content')
    <h2>Cadastrar Taxonomia</h2><br><br>
    <a href="{{ route('term.index') }}">Listar</a>

    @if (session('success'))
        <p style="color: green;">
            {{ session('success') }}
        </p>
    @endif

    <div class="container mt-5">
        <form action="" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="label" class="form-label">Rótulo (Label)</label>
                <input type="text" class="form-control" id="label" name="label" required>
            </div>
            <div class="mb-3">
                <label for="taxonomy" class="form-label">Taxonomia</label>
                <input type="text" class="form-control" id="taxonomy" name="taxonomy" required>
            </div>
            <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
    </div>

    </html>
@endsection
