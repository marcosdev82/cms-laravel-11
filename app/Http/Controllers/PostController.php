<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Exibir a lista de cursos.
     *
     * @return \Illuminate\View\View
     */
    public function showPosts()
    {
        // Você pode adicionar lógica para buscar cursos no banco de dados aqui, se necessário.
        return view('posts.index');
    }
}
