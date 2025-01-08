<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TermTaxonomy extends Model
{
    // Define a tabela associada
    protected $table = 'term_taxonomy';

    // Indique que não usa timestamps (created_at, updated_at)
    public $timestamps = false;

    // Permite atribuição em massa
    protected $fillable = ['term_id', 'taxonomy', 'description', 'parent', 'count'];

    /**
     * Relacionamento com _terms
     */
    public function term()
    {
        return $this->belongsTo(Term::class, 'term_id', 'term_id');
    }
}
