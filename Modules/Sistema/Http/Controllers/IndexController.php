<?php

namespace Modules\Sistema\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        // Buscar os serviços do usuário para serem carregados no menu ao inicializar.
        // Aqui não leva o middleware de autenticacao.

        return view('sistema::index.index');
    }
}
