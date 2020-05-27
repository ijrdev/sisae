<?php

namespace Modules\Sistema\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Sistema\Entities\Models\Repositories\FuncionalidadesRepository;

class FuncionalidadesController extends Controller
{
    private $funcionalidadesRepository;

    public function __construct(FuncionalidadesRepository $funcionalidadesRepository)
    {
        $this->funcionalidadesRepository = $funcionalidadesRepository;
    }

    public function index()
    {
        try
        {
            $funcionalidades = $this->funcionalidadesRepository->getAllFuncionalidades();
        }
        catch(\Exception $e)
        {
            session()->flash('message', ['label' => 'danger', 'title' => 'Funcionalidades', 'description' => 'Algo de errado ocorreu, tente novamente.']);

            return redirect()->route('sistema.index.index');
        }

        return view('sistema::funcionalidades.index', compact('funcionalidades'));
    }
}
