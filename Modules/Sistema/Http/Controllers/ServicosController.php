<?php

namespace Modules\Sistema\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Sistema\Entities\Models\Contracts\ServicosRepositoryContract;
use Modules\Sistema\Http\Requests\Servicos\ServicoAlterarRequest;
use Modules\Sistema\Http\Requests\Servicos\ServicoCadastroRequest;
use Symfony\Component\HttpFoundation\Request;

class ServicosController extends Controller
{
    private $servicosRepositoryContract;

    public function __construct(ServicosRepositoryContract $servicosRepositoryContract)
    {
        $this->servicosRepositoryContract = $servicosRepositoryContract;
    }

    public function index()
    {
        try
        {
            $servicos = $this->servicosRepositoryContract->getAllServicos();
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

    public function store(ServicoCadastroRequest $request)
    {
        try
        {
            $this->servicosRepositoryContract->addServico($request->only(['nome_servico', 'label_servico']));

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
            $servico = $this->servicosRepositoryContract->getServico($id);
        }
        catch(\Exception $e)
        {
            session()->flash('message', ['label' => 'danger', 'title' => 'Serviços - Alterar', 'description' => 'Algo de errado ocorreu, tente novamente.']);

            return redirect()->route('sistema.servicos.index');
        }

        return view('sistema::servicos.edit', compact(('servico')));
    }

    public function update(ServicoAlterarRequest $request)
    {
        try
        {
            $this->servicosRepositoryContract->update($request->validated());

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
            $servico = $this->servicosRepositoryContract->getServico($id);
        }
        catch(\Exception $e)
        {
            session()->flash('message', ['label' => 'danger', 'title' => 'Serviços - Excluir', 'description' => 'Algo de errado ocorreu, tente novamente.']);

            return redirect()->route('sistema.servicos.index');
        }

        return view('sistema::servicos.remove', compact(('servico')));
    }

    public function delete(Request $request)
    {
        try
        {
            $this->servicosRepositoryContract->delete($request->id_servico);

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