<?php

namespace App\Http\Controllers;

use App\Models\Term;
use App\Models\TermTaxonomy;
use Illuminate\Http\Request;

class RegisterTypes extends Controller
{
    public function register(Request $request) {

        $slug = preg_replace('/[^a-z0-9]+/', '-', strtolower($request->slug));
        $slug = trim($slug, '-');

        $originalSlug = $slug;
        $count = 1;
        while (Term::where('slug', $slug)->exists()) {
            $slug = "{$originalSlug}-{$count}";
            $count++;
        }

        $defaults = [
            'label' => ucfirst($request->label),
            'slug' => $request->taxonomy,
            // 'capabilities' => [],
        ];

        $args = [];

        $args = array_merge($defaults, $args);

        try {
            $term = Term::create([
                'name' => $args['label'],
                'slug' => $args['slug'],
                'term_group' => 0,
            ]);

            TermTaxonomy::create([
                'term_id' => $term->id,
                'taxonomy' =>  $request->taxonomy,
                'description' => $args['label'] . ' Taxonomy',
                'parent' => 0,
                'count' => 0,
            ]);

            return redirect()->route('taxonomy.edit')->with('success', 'Taxonomia cadastrada com sucesso!');
        } catch (\Exception $e) {
            return "Erro ao registrar a taxonomia '{ $request->taxonomy}': " . $e->getMessage();
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
