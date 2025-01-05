<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Term extends Model
{
    use HasFactory;

    // A tabela associada ao modelo
    protected $table = 'terms'; // Use o nome da tabela correta

    // Os atributos que podem ser atribuídos em massa
    protected $fillable = [
        'name',
        'slug',
        'description',
        'term_group',
    ];

    // Se você deseja usar timestamps
    public $timestamps = true; // Isso é true por padrão

    // Você pode adicionar métodos adicionais conforme necessário
}
