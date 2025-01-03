<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Exibir a lista de cursos.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('courses.index');
    }

    public function show()
    {
        return view('courses.show');
    }

    public function create()
    {
        return view('courses.create');
    }

    public function store()
    {
        dd('Cadastrar');
    }

    public function edit()
    {
        return view('courses.edit');
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
