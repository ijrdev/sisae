<?php

namespace Modules\Sistema\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServicosController extends Controller
{
    public function index()
    {
        return view('sistema::servicos.index');
    }

    public function create()
    {
        return view('sistema::servicos.create');
    }
}
