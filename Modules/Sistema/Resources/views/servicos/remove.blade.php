@extends('sistema::layouts.main')

@section('title', 'Serviços - Excluir')

@section('header')
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="fa fa-cog" style="color: #55538B;"></i>Serviços - Excluir<br><small>Excluir o serviço.</small>
            </h1>
        </div>
    </div>

    <ul class="breadcrumb breadcrumb-top">
        <li><a href="{{ route('sistema.servicos.index') }}">Serviços</a></li>
        <li>Excluir</li>
    </ul>
@endsection

@section('content')
    <div class="block">
        @if($funcionalidades->isEmpty())
            <div class="row">
                <div class="col-sm-12">
                    <h4><i class="fa fa-times" style="color: #ef8a80;"></i> Você está prestes a realizar a exclusão do serviço:</h4>
                    <p>
                        <strong>Código: </strong>{{ $servico->id_servico }} <br> 
                        <strong>Nome: </strong>{{ $servico->nome_servico }} <br>
                        <strong>Label: </strong>{{ $servico->label_servico }}
                    </p>

                    <form action="{{ route('sistema.servicos.delete') }}" id="sistema-servicos-remove" method="post" class="form-horizontal form-bordered">
                        @method("DELETE")
                        @csrf

                        <input type="hidden" name="id_servico" class="form-control" value="{{ $servico->id_servico ?? old('id_servico') }}" required>
                        
                        <div class="form-group form-actions" id="form-buttons">
                            <div class="col-lg-12 text-center">
                                <a class="btn btn-sm btn-default" href="{{ route('sistema.servicos.index') }}"><i class="fa fa-reply"></i> Voltar</a>
                                <button type="button" class="btn btn-sm btn-danger" onclick="formSubmitLoading('sistema-servicos-remove')"><i class="fa fa-times"></i> Excluir</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        @else
            <h4><i class="fa fa-exclamation-triangle" style="color: orange;"></i> Não é possível excluir o serviço:</h4>
            <p>
                <strong>Código: </strong>{{ $servico->id_servico }} <br> 
                <strong>Nome: </strong>{{ $servico->nome_servico }} <br>
                <strong>Label: </strong>{{ $servico->label_servico }}
            </p>

            <p>Este serviço contém funcionalidades.</p>
        @endif
    </div>
@endsection