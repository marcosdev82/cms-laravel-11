<?php

namespace App\Console\Commands;

use App\Models\Term;
use App\Models\TermTaxonomy;
use Illuminate\Console\Command;

class RegisterTaxonomyCommand extends Command
{
    protected $signature = 'taxonomy:register {label} {taxonomy}';
    protected $description = 'Registrar uma nova taxonomia';

    public function handle()
    {

        $label = ucfirst($this->argument('label'));
        $slug = $this->argument('taxonomy');

        $defaults = [
            'label' => $label,
            'slug' => $slug,
        ];

        try {

            $term = Term::create([
                'name' => $defaults['label'],
                'slug' => $defaults['slug'],
                'term_group' => 0,
            ]);

            TermTaxonomy::create([
                'term_id' => $term->id,
                'taxonomy' => $slug,
                'description' => $defaults['label'] . ' Taxonomy',
                'parent' => 0,
                'count' => 0,
            ]);

            $this->info("Taxonomia '{$slug}' cadastrada com sucesso!");
        } catch (\Exception $e) {
            // Erro
            $this->error("Erro ao registrar a taxonomia '{$slug}': " . $e->getMessage());
        }
    }
}
