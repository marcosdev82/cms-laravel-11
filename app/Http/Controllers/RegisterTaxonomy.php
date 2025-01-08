<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function App\Repositories\registerTaxonomy;

class RegisterTaxonomy extends Controller
{
    public function registerTaxonomy() {

        return registerTaxonomy('Categoria', 'post', [
            'label' => 'Pessoas',
            'slug' => 'pessoa',
            'capabilities' => [
                'assign_terms' => 'edit_guides',
                'edit_terms' => 'publish_guides',
            ],
        ]);
    }
}
