<?php

namespace Modules\Sistema\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EscolasController extends Controller
{
    public function index()
    {
        return view('sistema::escolas.index');
    }

    public function create()
    {
//        return view('sistema::escolas.create');
    }
}
