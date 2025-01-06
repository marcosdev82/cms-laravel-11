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
    // protected $keyType = 'bigint'; // 'bigint' é o tipo correto para Eloquent

    // Definindo os atributos que podem ser preenchidos em massa
    protected $fillable = [
        'post_author',
        'post_date',
        'post_date_gmt',
        'post_title',
        'post_excerpt',
        'post_status',
        'comment_status',
        'ping_status',
        'post_password',
        'to_ping',
        'pinged',
        'post_modified',
        'post_modified_gmt',
        'post_content_filtered',
        'post_parent',
        'guid',
        'menu_order',
        'post_type',
        'post_mime_type',
        'comment_count',
    ];

    // Definindo os atributos que devem ser tratados como data
    protected $dates = [
        'post_date',
        'post_date_gmt',
        'post_modified',
        'post_modified_gmt',
    ];

    // Definindo os relacionamentos
    public function author()
    {
        return $this->belongsTo(User::class, 'post_author');
    }

    // Adicione outros relacionamentos e métodos conforme necessário
}
