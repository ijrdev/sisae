<?php

namespace Modules\Sistema\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Sistema\Entities\Models\Repositories\FuncionalidadesRepository;
use Modules\Sistema\Entities\Models\Repositories\ServicosRepository;
use Modules\Sistema\Http\Requests\Funcionalidades\FuncionalidadesAlterarRequest;
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
            $this->funcionalidadesRepository->addFuncionalidade($request->validated() + ['id_fk_servico' => $request->validated()['servico']]);

            session()->flash('message', ['label' => 'success', 'title' => 'Serviços - Cadastrar', 'description' => 'Operação realizada com sucesso!']);

            return redirect()->route('sistema.funcionalidades.index');
        }
        catch(\Exception $e)
        {
            session()->flash('message', ['label' => 'danger', 'title' => 'Serviços - Cadastrar', 'description' => 'Algo de errado ocorreu, tente novamente.']);

            return redirect()->route('sistema.funcionalidades.index');
        }
    }

    public function edit($id)
    {
        try
        {
            $funcionalidade = $this->funcionalidadesRepository->getFuncionalidade($id);
            $servico        = $funcionalidade->servico;
        }
        catch(\Exception $e)
        {
            session()->flash('message', ['label' => 'danger', 'title' => 'Funcionalidade - Alterar', 'description' => 'Algo de errado ocorreu, tente novamente.']);

            return redirect()->route('sistema.funcionalidade.index');
        }

        return view('sistema::funcionalidades.edit', compact('funcionalidade', 'servico'));
    }

    public function update(FuncionalidadesAlterarRequest $request)
    {
        try
        {
            $this->funcionalidadesRepository->updateFuncionalidade($request->validated());

            session()->flash('message', ['label' => 'success', 'title' => 'Funcionalidades - Alterar', 'description' => 'Operação realizada com sucesso!']);

            return redirect()->route('sistema.funcionalidades.index');
        }
        catch(\Exception $e)
        {
            session()->flash('message', ['label' => 'danger', 'title' => 'Funcionalidades - Alterar', 'description' => 'Algo de errado ocorreu, tente novamente.']);

            return redirect()->route('sistema.funcionalidades.index');
        }
    }

    public function remove($id)
    {
        try
        {
            $funcionalidade = $this->funcionalidadesRepository->getFuncionalidade($id);
            $servico        = $funcionalidade->servico;
        }
        catch(\Exception $e)
        {
            session()->flash('message', ['label' => 'danger', 'title' => 'Funcionalidades - Excluir', 'description' => 'Algo de errado ocorreu, tente novamente.']);

            return redirect()->route('sistema.funcionalidades.index');
        }

        return view('sistema::funcionalidades.remove', compact('funcionalidade', 'servico'));
    }

    public function delete(Request $request)
    {
        try
        {
            $this->funcionalidadesRepository->deleteFuncionalidade($request->id_funcionalidade);

            session()->flash('message', ['label' => 'success', 'title' => 'Funcionalidades - Excluir', 'description' => 'Operação realizada com sucesso!']);

            return redirect()->route('sistema.funcionalidades.index');
        }
        catch(\Exception $e)
        {
            session()->flash('message', ['label' => 'danger', 'title' => 'Funcionalidades - Excluir', 'description' => 'Algo de errado ocorreu, tente novamente.']);

            return redirect()->route('sistema.funcionalidades.index');
        }
    }
}
