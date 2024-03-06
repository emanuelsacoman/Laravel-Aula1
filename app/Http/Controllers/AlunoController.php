<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index() {
        return view('aluno');
    }

    public function update() {
        return view('updatealuno');
    }
}
