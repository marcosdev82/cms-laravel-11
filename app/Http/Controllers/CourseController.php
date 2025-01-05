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
        // $courses = Course::get();
        $courses = Course::paginate(3);

        return view('course.index', ['courses' => $courses]);
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

        return redirect()->route('course.create')->with('success', 'Curso cadastrado com sucesso!');
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
