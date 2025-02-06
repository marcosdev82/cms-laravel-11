@extends('layouts.admin')
@section('content')
    @if (session('success'))
        <p style="color: green;">
            {{ session('success') }}
        </p>
    @endif

    <div class="container-cluid mt-3">
        <div class="row">
            <div class="col col-md-4">
                <h4>Criar nova categoria</h4>
            </div>
            <div class="class col col-md-8">
                <div class="d-grid gap-2 mb-3 d-md-flex justify-content-md-end">
                    <a href="{{ route('term.index') }}" class="btn btn-primary btn-sm me-md-2">Listar</a>
                    <button class="btn btn-primary btn-sm  me-md-2" type="button">Salvar</button>
                    <button class="btn btn-primary btn-sm " type="button">Salvar e Adicionar</button>
                    <button class="btn btn-primary btn-sm " type="button">Cancelar</button>
                </div>
            </div>
        </div>

        <form action="{{ route('term.store') }}" id="meu-formulario" method="POST">

            <div class="row">
                <div class="col col-md-6">

                    @csrf
                    @method('POST')

                    <div class="card">
                        <div class="card-header">
                            Featured
                        </div>
                        <div class="card-body">
                            <div id="mensagem"></div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Term:</label>
                                <input type="text" name="name" id="name" class="form-control form-control-sm"
                                    placeholder="Nome" value="{{ old('name') }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="slug" class="form-label">Slug:</label>
                                <input type="text" name="slug" id="slug" class="form-control form-control-sm"
                                    placeholder="Slug do term" value="{{ old('slug') }}">
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">Descrição:</label>
                                <textarea name="description" id="description" class="form-control form-control-sm" style="height: 150px;">{{ old('slug') }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">Selecione um termo pai:</label>
                                <select name="term_id" class="form-select form-control-sm">
                                    <option value=" ">Selecione uma pai</option>
                                    @forelse ($terms as $term)
                                        <option value="{{ $term->term_id }}">{{ $term->name }}</option>
                                    @empty
                                        <option>Não há termos!</option>
                                    @endforelse
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Criar term</button>
                        </div>


                    </div>

                </div>
                <div class="col col-md-6">
                    <div class="card">
                        {{-- <div class="card-header">
                            Listagem de categorias
                        </div> --}}
                        <div class="card-body p-0">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">An item</li>
                                <li class="list-group-item">A second item</li>
                                <li class="list-group-item">A third item</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    </form>
    </div>
    {{-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('meu-formulario');

            form.addEventListener('submit', function(e) {
                e.preventDefault(); // Impede o envio padrão do formulário

                const formData = new FormData(form); // Cria um objeto FormData

                fetch("{{ route('inserir') }}", {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest', // Para indicar que é uma requisição AJAX
                            'X-CSRF-TOKEN': document.querySelector('input[name="_token"]')
                                .value // Adiciona o CSRF token
                        }
                    })
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Erro na resposta da rede');
                        }
                        return response.json();
                    })
                    .then(data => {
                        document.getElementById('mensagem').innerHTML = '<p>' + data.success + '</p>';
                        form.reset(); // Limpa o formulário
                    })
                    .catch(error => {
                        if (error instanceof TypeError) {
                            // Lida com erros de rede
                            document.getElementById('mensagem').innerHTML =
                                '<p style="color:red;">Erro de rede. Tente novamente.</p>';
                        } else {
                            // Lida com erros de validação
                            return response.json().then(errData => {
                                let errorMessages = '';
                                Object.values(errData.errors).forEach(messages => {
                                    errorMessages += messages.join('<br>') + '<br>';
                                });
                                document.getElementById('mensagem').innerHTML =
                                    '<p style="color:red;">' + errorMessages + '</p>';
                            });
                        }
                    });
            });
        });
    </script> --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
@endsection
