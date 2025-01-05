<?php

namespace App\Http\Controllers;

use App\Models\Term;
use Illuminate\Http\Request;

class TermController extends Controller
{
    /**
     * Exibir a lista de cursos.
     *
     * @return \Illuminate\View\View
     */
    public function showTerms()
    {
        // $terms = term::get();
        $terms = Term::paginate(3);

        return view('term.index', ['terms' => $terms]);
    }

    public function create()
    {
        return view('term.create');
    }

    public function store(Request $request)
    {
        // dd($request);

        // Criação do novo term
        $term = Term::create([
            'name' => $request->name,
            'slug' => $request->slug ?: '', // Se slug não for fornecido, usa uma string vazia
            'description' => $request->description ?: '',
            'term_group' => $request->term_group ?: 1,
        ]);

        return redirect()->route('term.create')->with('success', 'Term cadastrado com sucesso!');
    }

    public function edit()
    {
        return view('term.edit');
    }

    public function update()
    {
        dd('Atualizar');
    }

    public function destroy()
    {
        dd('Excluir');
    }
}
