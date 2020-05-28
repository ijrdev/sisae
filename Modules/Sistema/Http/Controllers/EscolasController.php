<?php

namespace Modules\Sistema\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Sistema\Entities\Models\Repositories\EscolasRepository;

class EscolasController extends Controller
{
    private $escolasRepository;

    public function __construct(EscolasRepository $escolasRepository)
    {
        $this->escolasRepository = $escolasRepository;
    }

    public function index()
    {
        try
        {
            $escolas = $this->escolasRepository->getAllEscolas();
        }
        catch(\Exception $e)
        {
            session()->flash('message', ['label' => 'danger', 'title' => 'Escolas', 'description' => 'Algo de errado ocorreu, tente novamente.']);

            return redirect()->route('sistema.escolas.index');
        }

        return view('sistema::escolas.index', compact('escolas'));
    }

    public function create()
    {
        return view('sistema::escolas.create');
    }
}
