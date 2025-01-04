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

    public function store()
    {
        dd('Cadastrar');
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
