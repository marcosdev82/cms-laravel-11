<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Exibir a lista de posts.
     *
     * @return \Illuminate\View\View
     */
    public function showPosts()
    {
        $posts = Post::paginate(3);
        return view('post.index', ['posts' => $posts]);
    }

    public function create()
    {
        return view('post.create');
    }

    public function store(Request $request)
    {
        // Validação dos dados do request
        $request->validate([
            'post_title' => 'required|string|max:255',
            'post_type' => 'required|string|max:100',
            'post_content' => 'nullable|string',
            'post_excerpt' => 'nullable|string',
            'post_status' => 'nullable|string|max:20',
            'comment_status' => 'nullable|string|max:20',
            'ping_status' => 'nullable|string|max:20',
            'post_password' => 'nullable|string|max:20',
            // Adicione outras validações conforme necessário
        ]);

        // Verifique se o autor existe
        $authorId = 1; // Ajuste para o ID do autor atual
        if (!User::find($authorId)) {
            return redirect()->back()->withErrors(['author' => 'Autor não encontrado.']);
        }

        // Criação do novo post
        Post::create([
            'post_author' => $authorId,
            'post_date' => now(),
            'post_date_gmt' => now(),
            'post_title' => $request->post_title,
            'post_excerpt' => $request->post_excerpt ?: '',
            'post_status' => $request->post_status ?: 'draft',
            'comment_status' => $request->comment_status ?: 'open',
            'ping_status' => $request->ping_status ?: 'open',
            'post_password' => $request->post_password ?: '',
            'to_ping' => $request->to_ping ?: '',
            'pinged' => $request->pinged ?: '',
            'post_modified' => now(),
            'post_modified_gmt' => now(),
            'post_content_filtered' => $request->post_content_filtered ?: '',
            'post_parent' => $request->post_parent ?: 0,
            'guid' => $request->guid ?: '',
            'menu_order' => $request->menu_order ?: 0,
            'post_type' => $request->post_type ?: 'post',
            'post_mime_type' => $request->post_mime_type ?: '',
            'comment_count' => $request->comment_count ?: 0,
        ]);

        return redirect()->route('post.create')->with('success', 'Post cadastrado com sucesso!');
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('post.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        // Validação dos dados do request
        $request->validate([
            'post_title' => 'required|string|max:255',
            'post_type' => 'required|string|max:100',
            'post_content' => 'nullable|string',
            'post_excerpt' => 'nullable|string',
            'post_status' => 'nullable|string|max:20',
            'comment_status' => 'nullable|string|max:20',
            'ping_status' => 'nullable|string|max:20',
            'post_password' => 'nullable|string|max:20',
            // Adicione outras validações conforme necessário
        ]);

        // Encontre o post e atualize
        $post = Post::findOrFail($id);
        $post->update([
            'post_title' => $request->post_title,
            'post_excerpt' => $request->post_excerpt ?: '',
            'post_status' => $request->post_status ?: 'draft',
            'comment_status' => $request->comment_status ?: 'open',
            'ping_status' => $request->ping_status ?: 'open',
            'post_password' => $request->post_password ?: '',
            'post_modified' => now(),
            'post_modified_gmt' => now(),
            'post_content_filtered' => $request->post_content_filtered ?: '',
            'post_parent' => $request->post_parent ?: 0,
            'guid' => $request->guid ?: '',
            'menu_order' => $request->menu_order ?: 0,
            'post_type' => $request->post_type ?: 'post',
            'post_mime_type' => $request->post_mime_type ?: '',
            'comment_count' => $request->comment_count ?: 0,
        ]);

        return redirect()->route('post.index')->with('success', 'Post atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->route('post.index')->with('success', 'Post excluído com sucesso!');
    }
}
