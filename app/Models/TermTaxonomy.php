<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TermTaxonomy extends Model
{
    protected $table = 'term_taxonomy';

    public $timestamps = false;

    protected $fillable = ['term_id', 'taxonomy', 'description', 'parent', 'count'];

    /**
     * Relacionamento com _terms
     */
    public function term()
    {
        return $this->belongsTo(Term::class, 'term_id', 'term_id');
    }
}
