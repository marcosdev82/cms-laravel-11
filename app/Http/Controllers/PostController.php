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
    public function index()
    {
        return view('post.index');
    }

    public function showPosts()
    {
        return view('post.show');
    }

    public function create()
    {
        return view('post.create');
    }

    public function store(Request $request)
    {
        // dd($request);

        Post::create([
            'title' => $request->title,
            'author_id' => 1,
            'date' => now(),
            'date_expire' => now(),
            'slug' => '',
            'type' => 'post',
            'content' => '',
            'excerpt' => '',
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
