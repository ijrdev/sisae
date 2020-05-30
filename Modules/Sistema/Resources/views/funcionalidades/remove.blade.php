@extends('sistema::layouts.main')

@section('title', 'Funcionalidades - Excluir')

@section('header')
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="fa fa-cogs" style="color: #55538B;"></i>Funcionalidades - Excluir<br><small>Excluir a funcionalidade.</small>
            </h1>
        </div>
    </div>

    <ul class="breadcrumb breadcrumb-top">
        <li><a href="{{ route('sistema.funcionalidades.index') }}">Funcionalidades</a></li>
        <li>Excluir</li>
    </ul>
@endsection

@section('content')
    <div class="block">
        <h4><i class="fa fa-times" style="color: #ef8a80;"></i> Você irá realizar a exclusão da funcionalidade:</h4>
        <p>
            <strong>Código: </strong>{{ $funcionalidade->id_funcionalidade }} <br> 
            <strong>Nome: </strong>{{ $funcionalidade->nome_func }} <br>
            <strong>Label: </strong>{{ $funcionalidade->label_func }} <br>
            <strong>Servico: </strong>{{ $servico->label_servico }} 
        </p>

        <div class="row">
            <div class="col-sm-12">
                <form action="{{ route('sistema.funcionalidades.delete') }}" id="sistema-funcionalidades-remove" method="post" class="form-horizontal form-bordered">
                    @method("DELETE")
                    @csrf

                    <input type="hidden" name="id_funcionalidade" class="form-control" value="{{ $funcionalidade->id_funcionalidade ?? old('id_funcionalidade') }}" required>
                    
                    <div class="form-group form-actions" id="form-buttons">
                        <div class="col-lg-12 text-center">
                            <a class="btn btn-sm btn-default" href="{{ route('sistema.funcionalidades.index') }}"><i class="fa fa-reply"></i> Voltar</a>
                            <button type="button" class="btn btn-sm btn-danger" onclick="formSubmitLoading('sistema-funcionalidades-remove')"><i class="fa fa-times"></i> Excluir</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection