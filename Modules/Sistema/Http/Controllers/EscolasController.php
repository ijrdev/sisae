<?php

namespace Modules\Sistema\Http\Controllers;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Modules\Sistema\Entities\Models\Repositories\EscolasRepository;
use Modules\Sistema\Entities\Models\Repositories\EscolasRepositoryQueryBuilder;
use Modules\Sistema\Http\Requests\Escolas\EscolasAlterarRequest;
use Modules\Sistema\Http\Requests\Escolas\EscolasCadastrarRequest;

class EscolasController extends Controller
{
    private $escolasRepository;
    private $escolasRepositoryQueryBuilder;

    public function __construct(EscolasRepository $escolasRepository, EscolasRepositoryQueryBuilder $escolasRepositoryQueryBuilder)
    {
        $this->escolasRepository             = $escolasRepository;
        $this->escolasRepositoryQueryBuilder = $escolasRepositoryQueryBuilder;
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

    public function store(EscolasCadastrarRequest $request)
    {
        try
        {
            $this->escolasRepository->addEscola($request->validated() + ['dt_cadastro' => Carbon::now()]);

            session()->flash('message', ['label' => 'success', 'title' => 'Escolas - Cadastrar', 'description' => 'Operação realizada com sucesso!']);

            return redirect()->route('sistema.escolas.index');
        }
        catch(\Exception $e)
        {
            session()->flash('message', ['label' => 'danger', 'title' => 'Escolas - Cadastrar', 'description' => 'Algo de errado ocorreu, tente novamente.']);

            return redirect()->route('sistema.escolas.index');
        }
    }

    public function edit($id)
    {
        try
        {
            $escola = $this->escolasRepository->getEscola($id);
        }
        catch(\Exception $e)
        {
            session()->flash('message', ['label' => 'danger', 'title' => 'Escolas - Alterar', 'description' => 'Algo de errado ocorreu, tente novamente.']);

            return redirect()->route('sistema.escolas.index');
        }

        return view('sistema::escolas.edit', compact('escola'));
    }

    public function update(EscolasAlterarRequest $request)
    {
        try
        {
            $this->escolasRepository->updateEscola($request->validated());

            session()->flash('message', ['label' => 'success', 'title' => 'Escolas - Alterar', 'description' => 'Operação realizada com sucesso!']);

            return redirect()->route('sistema.escolas.index');
        }
        catch(\Exception $e)
        {
            session()->flash('message', ['label' => 'danger', 'title' => 'Escolas - Alterar', 'description' => 'Algo de errado ocorreu, tente novamente.']);

            return redirect()->route('sistema.escolas.index');
        }
    }

    public function servicos($id)
    {
        try
        {
            $id_escola       = $id;
            $servicos        = $this->escolasRepositoryQueryBuilder->getAllServicosFuncionalidades();
            $servicos_escola = $this->escolasRepositoryQueryBuilder->getAllServicosEscola($id_escola);
        }
        catch(\Exception $e)
        {
            session()->flash('message', ['label' => 'danger', 'title' => 'Escolas - Serviços', 'description' => 'Algo de errado ocorreu, tente novamente.']);

            return redirect()->route('sistema.escolas.index');
        }

        return view('sistema::escolas.servicos', compact('servicos', 'servicos_escola', 'id_escola'));
    }   

    public function habilitar(Request $request)
    {
        try
        {
            $this->escolasRepositoryQueryBuilder->addServicos($request->all());

            session()->flash('message', ['label' => 'success', 'title' => 'Escolas - Serviços', 'description' => 'Operação realizada com sucesso!']);

            return redirect()->route('sistema.escolas.index');
        }
        catch(\Exception $e)
        {
            session()->flash('message', ['label' => 'danger', 'title' => 'Escolas - Serviços', 'description' => 'Algo de errado ocorreu, tente novamente.']);

            return redirect()->route('sistema.escolas.index');
        }
    } 
}