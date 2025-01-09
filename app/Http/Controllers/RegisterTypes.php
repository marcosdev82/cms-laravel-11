<?php

namespace App\Http\Controllers;

use App\Models\Term;
use App\Models\TermTaxonomy;
use Illuminate\Http\Request;

class RegisterTypes extends Controller
{
    public function register(Request $request) {

        // Gerar o slug automaticamente a partir do 'label'
        $slug = preg_replace('/[^a-z0-9]+/', '-', strtolower($request->label));
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
            'slug' => $request->taxonomy,
        ];

        $args = [];

        // Mesclar os parâmetros padrão com os recebidos
        $args = array_merge($defaults, $args);

        try {
            // Criar o termo
            $term = Term::create([
                'name' => $args['label'],
                'slug' => $args['slug'],
                'term_group' => 0,
            ]);

            // Obter o ID do termo pai, se fornecido
            $parentId = $request->has('parent_id') ? $request->parent_id : 0;

            // Criar a taxonomia associando o termo ao parent (caso haja)
            TermTaxonomy::create([
                'term_id' => $term->id,
                'taxonomy' => 'eventos',
                'description' => $defaults['label'] . ' Taxonomy',
                'parent' => 0,
                'count' => 0,
            ]);

            return redirect()->route('taxonomy.edit')->with('success', 'Taxonomia cadastrada com sucesso!');
        } catch (\Exception $e) {
            return "Erro ao registrar a taxonomia '{$request->taxonomy}': " . $e->getMessage();
        }
    }

    public function create()
    {
        return view('taxonomy.create');
    }

    public function edit()
    {
        return view('taxonomy.edit');
    }
}
