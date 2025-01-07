<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TermRelationship extends Model
{
    // Define a tabela associada ao model
    protected $table = 'term_relationships';

    // Indica que a tabela não utiliza timestamps (created_at, updated_at)
    public $timestamps = false;

    // Define os campos que podem ser preenchidos via mass assignment
    protected $fillable = ['object_id', 'term_taxonomy_id', 'term_order'];

    /**
     * Relacionamento com a tabela term_taxonomy
     * Cada relacionamento pertence a uma taxonomia específica.
     */
    public function taxonomy()
    {
        return $this->belongsTo(TermTaxonomy::class, 'term_taxonomy_id', 'term_taxonomy_id');
    }

    /**
     * Relacionamento com a tabela posts
     * Cada relacionamento está associado a um post (ou outro tipo de objeto).
     */
    public function post()
    {
        return $this->belongsTo(Post::class, 'object_id', 'ID');
    }
}
