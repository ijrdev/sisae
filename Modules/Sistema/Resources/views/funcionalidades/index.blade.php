@extends('sistema::layouts.main')

@section('title', 'Funcionalidades')

@section('header')
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="fa fa-cogs" style="color: #55538B;"></i>Funcionalidades<br><small>Todos as funcionalidades criadas.</small>
            </h1>
        </div>
    </div>
@endsection

@section('content')
    <div class="block">
        <div class="table-responsive">
            <table class="table table-vcenter table-striped">
                <thead>
                    <tr>
                        <th class="text-center">Código</th>
                        <th class="text-center">Funcionalidade</th>
                        <th class="text-center">Label</th>
                        <th class="text-center">Serviço</th>
                        <th class="text-center">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @empty($funcionalidades)
                        <tr>
                            <td colspan="12" class="text-center">
                                Nenhum registro encontrado.
                            </td>
                        </tr>
                    @else
                        @foreach($funcionalidades as $funcionalidade)
                            <tr>
                                <td class="text-center">{{ $funcionalidade->id_funcionalidade }}</td>    
                                <td class="text-center">{{ $funcionalidade->nome_func }}</td>    
                                <td class="text-center">{{ $funcionalidade->label_func }}</td>  
                                <td class="text-center">{{ $funcionalidade->servico->label_servico }}</td>
                                <td class="text-center">
                                    <div class="btn-group-xs">
                                        <a href="{{ route('sistema.funcionalidades.edit', ['id' => $funcionalidade->id_funcionalidade]) }}" data-toggle="tooltip" title="" class="btn btn-default" data-original-title="Alterar"><i class="fa fa-pencil"></i></a>
                                        <a href="{{ route('sistema.funcionalidades.remove', ['id' => $funcionalidade->id_funcionalidade]) }}" data-toggle="tooltip" title="" class="btn btn-danger" data-original-title="Excluir"><i class="fa fa-times"></i></a>
                                    </div>  
                                </td>
                            </tr>
                        @endforeach
                    @endempty
                </tbody>
            </table>
        </div>
    </div>
@endsection