@extends('sistema::layouts.main')

@section('title', 'Escolas')

@section('header')
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="fa fa-university" style="color: #55538B;"></i>Escolas<br><small>Todas as escolas registradas no sistema.</small>
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
                        <th class="text-center">Data Cadastro</th>
                        <th class="text-center">Nome</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @empty($escolas)
                        <tr>
                            <td colspan="12" class="text-center">
                                Nenhum registro encontrado.
                            </td>
                        </tr>
                    @else
                        @foreach($escolas as $escola)
                            <tr>
                                <td class="text-center">{{ $escola->id_escola }}</td>    
                                <td class="text-center">{{ date('d-m-Y', strtotime($escola->dt_cadastro)) }}</td>
                                <td class="text-center">{{ $escola->nome_escola }}</td>
                                <td class="text-center">{{ $escola->email_escola }}</td>

                                @switch($escola->status_escola)
                                    @case('A')
                                        <td class="text-center"><span class="label label-success"><strong>Ativo</strong></span></td>
                                        @break

                                    @case('I')
                                        <td class="text-center"><span class="label label-danger"><strong>Inativo</strong></span></td>
                                        @break
                                @endswitch

                                <td class="text-center">
                                    <div class="btn-group-xs">
                                        <a href="{{ route('sistema.escolas.edit', ['id' => $escola->id_escola]) }}" data-toggle="tooltip" title="" class="btn btn-default" data-original-title="Alterar"><i class="fa fa-pencil"></i></a>
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
