<?php

namespace App\Http\Controllers;

use App\Models\Term;
use App\Models\TermTaxonomy;
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

        $slug = preg_replace('/[^a-z0-9]+/', '-', strtolower($request->slug));
        $slug = trim($slug, '-');

        $originalSlug = $slug;
        $count = 1;

        // Garantir que o slug seja único
        while (Term::where('slug', $slug)->exists()) {
            $slug = "{$originalSlug}-{$count}";
            $count++;
        }

        $defaults = [
            'label' => ucfirst($slug),
            'slug' => 'eventos',
        ];

        $args = [];

        // Mesclar os parâmetros padrão com os recebidos
        $args = array_merge($defaults, $args);

        try {
            // Criar o termo
            $term = Term::create([
                'name' => $request->name,
                'slug' => $slug ?: '', // Se slug não for fornecido, usa uma string vazia
                'description' => $request->description ?: '',
                'term_group' => $request->term_group ?: 1,
            ]);

            // Obter o ID do termo pai, se fornecido
            // $parentId = $request->has('parent_id') ? $request->parent_id : 0;

            // Criar a taxonomia associando o termo ao parent (caso haja)
            TermTaxonomy::create([
                'term_id' => $term->id,
                'taxonomy' => 'eventos',
                'description' => $defaults['label'] . ' Taxonomy',
                'parent' => 0,
                'count' => 0,
            ]);

            return redirect()->route('term.edit')->with('success', 'Evento cadastrada com sucesso!');
        } catch (\Exception $e) {
            return redirect()->route('term.create')->with(
                'error',
                "Erro ao registrar a taxonomia '{$request->name}': " . $e->getMessage()
            );
        }
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
