<?php

namespace Modules\Sistema\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Sistema\Entities\Models\Contracts\ServicosRepositoryContract;
use Modules\Sistema\Http\Requests\ServicoCadastroRequest;

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
            // session()->flash('message', ['label' => '', '']);

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
        dd($request->validated());
    }

    public function edit($id)
    {
        try
        {
            $servico = $this->servicosRepositoryContract->getServico($id);
            dd($servico);
        }
        catch(\Exception $e)
        {
            // session()->flash('message', ['label' => '', '']);

            return redirect()->route('sistema.servicos.index');
        }

        return view('sistema::servicos.edit', compact(('servico')));
    }

    public function update(Request $request)
    {
        dd($request->validated());
    }

    public function remove()
    {
        return view('sistema::servicos.remove');
    }

    public function delete(Request $request)
    {
        dd($request->validated());
    }
}
