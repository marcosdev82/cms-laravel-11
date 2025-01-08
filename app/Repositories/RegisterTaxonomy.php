<?php

namespace App\Services;

use App\Models\Term;
use App\Models\TermTaxonomy;

class TaxonomyService
{
    public function registerTaxonomy($taxonomy, $postType, $args = [])
    {
        $defaults = [
            'label' => ucfirst($taxonomy),
            'slug' => $taxonomy,
            'capabilities' => [],
        ];
        $args = array_merge($defaults, $args);

        try {
            $term = Term::create([
                'name' => $args['label'],
                'slug' => $args['slug'],
                'term_group' => 0,
            ]);

            TermTaxonomy::create([
                'term_id' => $term->term_id,
                'taxonomy' => $taxonomy,
                'description' => $args['label'] . ' Taxonomy',
                'parent' => 0,
                'count' => 0,
            ]);

            return "Taxonomia '{$taxonomy}' registrada com sucesso!";
        } catch (\Exception $e) {
            return "Erro ao registrar a taxonomia '{$taxonomy}': " . $e->getMessage();
        }
    }
}
