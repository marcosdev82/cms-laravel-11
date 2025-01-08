<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function App\Repositories\registerTaxonomy;

class RegisterTypes extends Controller
{
    public function taxonomy() {

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
