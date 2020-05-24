<?php

namespace Modules\Sistema\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FuncionalidadesController extends Controller
{
    public function index()
    {
        return view('sistema::funcionalidades.index');
    }
}
