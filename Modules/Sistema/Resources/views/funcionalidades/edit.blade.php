@extends('sistema::layouts.main')

@section('title', 'Funcionalidades - Alterar')

@section('header')
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="fa fa-cogs" style="color: #55538B;"></i>Funcionalidades - Alterar<br><small>Alteração da funcionalidade.</small>
            </h1>
        </div>
    </div>

    <ul class="breadcrumb breadcrumb-top">
        <li><a href="{{ route('sistema.funcionalidades.index') }}">Funcionalidades</a></li>
        <li>Alterar</li>
    </ul>
@endsection

@section('content')
    <div class="block">
        <div class="row">
            <div class="col-sm-12">
                <form action="{{ route('sistema.funcionalidades.update') }}" id="sistema-funcionalidades-edit" method="post" class="form-horizontal form-bordered">
                    @method('PUT')
                    @csrf

                    <input type="hidden" name="id_funcionalidade" class="form-control" value="{{ $funcionalidade->id_funcionalidade ?? old('id_funcionalidade') }}" required>

                    <div class="form-group">
                        <div class="col-lg-offset-3 col-md-offset-3 col-lg-6 col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-cog"></i></span>
                                <input type="text" name="servico" class="form-control" placeholder="Serviço" value="{{ $servico->label_servico ?? old('servico') }}" disabled>
                            </div>
                            @error('servico')
                                <div class="help-block"><span class="text-danger">{{ $message }}</span></div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-offset-3 col-md-offset-3 col-lg-6 col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-cogs"></i></span>
                                <input type="text" name="nome_func" class="form-control" placeholder="Nome da funcionalidade" value="{{ $funcionalidade->nome_func ?? old('nome_func') }}" required>
                            </div>
                            @error('nome_func')
                                <div class="help-block"><span class="text-danger">{{ $message }}</span></div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-offset-3 col-md-offset-3 col-lg-6 col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-bookmark-o"></i></span>
                                <input type="text" name="label_func" class="form-control" placeholder="Label da funcionalidade" value="{{ $funcionalidade->label_func ?? old('label_func') }}" required>
                            </div>
                            @error('label_func')
                                <div class="help-block"><span class="text-danger">{{ $message }}</span></div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group form-actions" id="form-buttons">
                        <div class="col-lg-12 text-center">
                            <a class="btn btn-sm btn-default" href="{{ route('sistema.funcionalidades.index') }}"><i class="fa fa-reply"></i> Voltar</a>
                            <button type="button" class="btn btn-sm btn-primary" onclick="formSubmitLoading('sistema-funcionalidades-edit')"><i class="fa fa-check"></i> Alterar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection