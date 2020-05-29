<?php

namespace Modules\Sistema\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Sistema\Entities\Models\Repositories\ServicosRepository;
use Modules\Sistema\Http\Requests\Servicos\ServicosAlterarRequest;
use Modules\Sistema\Http\Requests\Servicos\ServicosCadastrarRequest;
use Symfony\Component\HttpFoundation\Request;

class ServicosController extends Controller
{
    private $servicosRepository;

    public function __construct(ServicosRepository $servicosRepository)
    {
        $this->servicosRepository = $servicosRepository;
    }

    public function index()
    {
        try
        {
            $servicos = $this->servicosRepository->getAllServicos();
        }
        catch(\Exception $e)
        {
            session()->flash('message', ['label' => 'danger', 'title' => 'Serviços', 'description' => 'Algo de errado ocorreu, tente novamente.']);

            return redirect()->route('sistema.index.index');
        }

        return view('sistema::servicos.index', compact('servicos'));
    }

    public function create()
    {
        return view('sistema::servicos.create');
    }

    public function store(ServicosCadastrarRequest $request)
    {
        try
        {
            $this->servicosRepository->addServico($request->validated());

            session()->flash('message', ['label' => 'success', 'title' => 'Serviços - Cadastrar', 'description' => 'Operação realizada com sucesso!']);

            return redirect()->route('sistema.servicos.index');
        }
        catch(\Exception $e)
        {
            session()->flash('message', ['label' => 'danger', 'title' => 'Serviços - Cadastrar', 'description' => 'Algo de errado ocorreu, tente novamente.']);

            return redirect()->route('sistema.servicos.index');
        }
    }

    public function edit($id)
    {
        try
        {
            $servico = $this->servicosRepository->getServico($id);
        }
        catch(\Exception $e)
        {
            session()->flash('message', ['label' => 'danger', 'title' => 'Serviços - Alterar', 'description' => 'Algo de errado ocorreu, tente novamente.']);

            return redirect()->route('sistema.servicos.index');
        }

        return view('sistema::servicos.edit', compact('servico'));
    }

    public function update(ServicosAlterarRequest $request)
    {
        try
        {
            $this->servicosRepository->updateServico($request->validated());

            session()->flash('message', ['label' => 'success', 'title' => 'Serviços - Alterar', 'description' => 'Operação realizada com sucesso!']);

            return redirect()->route('sistema.servicos.index');
        }
        catch(\Exception $e)
        {
            session()->flash('message', ['label' => 'danger', 'title' => 'Serviços - Alterar', 'description' => 'Algo de errado ocorreu, tente novamente.']);

            return redirect()->route('sistema.servicos.index');
        }
    }

    public function remove($id)
    {
        try
        {
            $servico         = $this->servicosRepository->getServico($id);
            $funcionalidades = $servico->funcionalidades;
        }
        catch(\Exception $e)
        {
            session()->flash('message', ['label' => 'danger', 'title' => 'Serviços - Excluir', 'description' => 'Algo de errado ocorreu, tente novamente.']);

            return redirect()->route('sistema.servicos.index');
        }

        return view('sistema::servicos.remove', compact('servico', 'funcionalidades'));
    }

    public function delete(Request $request)
    {
        try
        {
            $this->servicosRepository->deleteServico($request->id_servico);

            session()->flash('message', ['label' => 'success', 'title' => 'Serviços - Excluir', 'description' => 'Operação realizada com sucesso!']);

            return redirect()->route('sistema.servicos.index');
        }
        catch(\Exception $e)
        {
            session()->flash('message', ['label' => 'danger', 'title' => 'Serviços - Excluir', 'description' => 'Algo de errado ocorreu, tente novamente.']);

            return redirect()->route('sistema.servicos.index');
        }
    }
}