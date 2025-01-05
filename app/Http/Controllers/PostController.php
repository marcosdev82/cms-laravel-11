<?php

namespace App\Http\Controllers;

use App\Models\Post;
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
        // $posts = Post::get();
        $posts = Post::paginate(3);

        return view('post.index', ['posts' => $posts]);
    }

    public function create()
    {
        return view('post.create');
    }

    public function store(Request $request)
    {
        // dd($request);

        // Criação do novo post
        $post = Post::create([
            'title' => $request->title,
            'author_id' => 1, // Você pode ajustar isso para o ID do autor atual
            'date' => now(),
            'date_expire' => $request->date_expire ?: now(), // Se não for fornecido, usa a data atual
            'slug' => $request->slug ?: '', // Se slug não for fornecido, usa uma string vazia
            'type' => $request->type,
            'content' => $request->content ?: '',
            'excerpt' => $request->excerpt ?: '',
        ]);

        return redirect()->route('post.create')->with('success', 'Post cadastrado com sucesso!');
    }

    public function edit()
    {
        return view('post.edit');
    }

    public function update()
    {
        dd('Atualizar');
    }

    public function destroy()
    {
        dd('Excluir');
    }
}
