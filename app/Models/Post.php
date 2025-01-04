<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Definindo a tabela associada
    protected $table = 'posts';

    // Definindo a chave primária
    protected $primaryKey = 'ID';

    // Se a chave primária não é um inteiro auto-incrementado
    public $incrementing = true;

    // Se a chave primária é do tipo string
    protected $keyType = 'int';

    // Definindo os atributos que podem ser preenchidos em massa
    protected $fillable = [
        'author_id',
        'date',
        'date_expire',
        'title',
        'slug',
        'type',
        'content',
        'excerpt',
        'status',
        'parent',
        'restrict',
        'menu_order',
    ];

    // Definindo os atributos que devem ser tratados como data
    protected $dates = [
        'date',
        'date_expire',
    ];

    // Definindo os relacionamentos
    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    // Adicione outros relacionamentos e métodos conforme necessário
}
