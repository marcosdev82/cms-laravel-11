<?php

namespace App\Http\Controllers;

use App\Models\Term;
use App\Models\TermTaxonomy;
use Illuminate\Http\Request;

class RegisterTypes extends Controller
{
    public function register(Request $request) {

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

            // TermTaxonomy::create([
            //     // 'term_id' => $term->term_id,
            //     'taxonomy' =>  $request->taxonomy,
            //     'description' => $args['label'] . ' Taxonomy',
            //     'parent' => 0,
            //     'count' => 0,
            // ]);

            return "Taxonomia '{ $request->taxonomy}' registrada com sucesso!";
        } catch (\Exception $e) {
            return "Erro ao registrar a taxonomia '{ $request->taxonomy}': " . $e->getMessage();
        }
    }

    public function create()
    {
        return view('taxonomy.create');
    }


}
