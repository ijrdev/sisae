@extends('sistema::layouts.main')

@section('title', 'Serviços')

@section('header')
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="fa fa-cog" style="color: #55538B;"></i>Serviços<br><small>Todos os serviços disponíveis.</small>
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
                        <th class="text-center">Serviço</th>
                        <th class="text-center">Label</th>
                        <th class="text-center">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @empty($servicos)
                        <tr>
                            <td colspan="12" class="text-center">
                                Nenhum registro encontrado.
                            </td>
                        </tr>
                    @else
                        @foreach($servicos as $servico)
                            <tr>
                                <td class="text-center">{{ $servico->id_servico }}</td>    
                                <td class="text-center">{{ $servico->nome_servico }}</td>    
                                <td class="text-center">{{ $servico->label_servico }}</td>  
                                <td class="text-center">
                                    <div class="btn-group-xs">
                                        <a href="{{ route('sistema.servicos.edit', ['id' => $servico->id_servico]) }}" data-toggle="tooltip" title="" class="btn btn-default" data-original-title="Alterar"><i class="fa fa-pencil"></i></a>
                                        <a href="{{ route('sistema.servicos.remove', ['id' => $servico->id_servico]) }}" data-toggle="tooltip" title="" class="btn btn-danger" data-original-title="Excluir"><i class="fa fa-times"></i></a>
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
