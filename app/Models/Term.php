<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Term extends Model
{
    // Define a tabela associada
    protected $table = 'terms';

    // Indique que não usa timestamps (created_at, updated_at)
    public $timestamps = false;

    // Permite atribuição em massa
    protected $fillable = ['name', 'slug', 'term_group'];

    /**
     * Relacionamento com term_taxonomy
     */
    public function taxonomy()
    {
        return $this->hasOne(TermTaxonomy::class, 'term_id', 'term_id');
    }
}
