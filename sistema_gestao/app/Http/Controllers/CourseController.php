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
        // Você pode adicionar lógica para buscar cursos no banco de dados aqui, se necessário.
        return view('courses.index');
    }
}
