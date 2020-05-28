<?php

namespace Modules\Sistema\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Sistema\Entities\Models\Repositories\FuncionalidadesRepository;
use Modules\Sistema\Entities\Models\Repositories\ServicosRepository;
use Modules\Sistema\Http\Requests\Funcionalidades\FuncionalidadesCadastrarRequest;

class FuncionalidadesController extends Controller
{
    private $funcionalidadesRepository;
    private $servicosRepository;

    public function __construct(FuncionalidadesRepository $funcionalidadesRepository, ServicosRepository $servicosRepository)
    {
        $this->funcionalidadesRepository = $funcionalidadesRepository;
        $this->servicosRepository        = $servicosRepository;
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

    public function create()
    {
        try
        {
            $servicos = $this->servicosRepository->getAllServicos();
        }
        catch(\Exception $e)
        {
            session()->flash('message', ['label' => 'danger', 'title' => 'Funcionalidades', 'description' => 'Algo de errado ocorreu, tente novamente.']);

            return redirect()->route('sistema.index.index');
        }

        return view('sistema::funcionalidades.create', compact('servicos'));
    }

    public function store(FuncionalidadesCadastrarRequest $request)
    {
        try
        {
            $data = [
                'nome_func'     => $request->nome_func,
                'label_func'    => $request->label_func,
                'id_fk_servico' => $request->servico
            ];
            
            $this->funcionalidadesRepository->addFuncionalidade($data);

            session()->flash('message', ['label' => 'success', 'title' => 'Serviços - Cadastrar', 'description' => 'Operação realizada com sucesso!']);

            return redirect()->route('sistema.funcionalidades.index');
        }
        catch(\Exception $e)
        {
            session()->flash('message', ['label' => 'danger', 'title' => 'Serviços - Cadastrar', 'description' => 'Algo de errado ocorreu, tente novamente.']);

            return redirect()->route('sistema.funcionalidades.index');
        }
    }
}
