<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    /**
     * Exibir a lista de cursos.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('course.index');
    }

    public function show()
    {
        return view('course.show');
    }

    public function create()
    {
        return view('course.create');
    }

    public function store(Request $request)
    {
        // dd($request);
        Course::create([
            'name' => $request->name
        ]);

        return redirect()->route('course.create')->width('success', 'Curso cadastrado com sucesso!');
    }

    public function edit()
    {
        return view('course.edit');
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
