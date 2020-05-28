@extends('sistema::layouts.main')

@section('title', 'Serviços - Alterar')

@section('header')
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="fa fa-cog" style="color: #55538B;"></i>Serviços - Alterar<br><small>Realize a alteração do serviço.</small>
            </h1>
        </div>
    </div>

    <ul class="breadcrumb breadcrumb-top">
        <li><a href="{{ route('sistema.servicos.index') }}">Serviços</a></li>
        <li>Alterar</li>
    </ul>
@endsection

@section('content')
    <div class="block">
        <div class="row">
            <div class="col-sm-12">
                <form action="{{ route('sistema.servicos.update') }}" method="post" class="form-horizontal form-bordered">
                    @method('PUT')
                    @csrf

                    <input type="hidden" name="id_servico" class="form-control" value="{{ $servico->id_servico ?? old('id_servico') }}" required>
                    
                    <div class="form-group">
                        <div class="col-lg-offset-3 col-md-offset-3 col-lg-6 col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-cog"></i></span>
                                <input type="text" name="nome_servico" class="form-control" placeholder="Nome do serviço" value="{{ $servico->nome_servico ?? old('nome_servico') }}" required>
                            </div>
                            @error('nome_servico')
                                <div class="help-block"><span class="text-danger">{{ $message }}</span></div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-offset-3 col-md-offset-3 col-lg-6 col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-bookmark-o"></i></span>
                                <input type="text" name="label_servico" class="form-control" placeholder="Label do serviço" value="{{ $servico->label_servico ?? old('label_servico') }}" required>
                            </div>
                            @error('label_servico')
                                <div class="help-block"><span class="text-danger">{{ $message }}</span></div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group form-actions">
                        <div class="col-lg-12 text-center">
                            <a class="btn btn-sm btn-default" href="{{ route('sistema.servicos.index') }}"><i class="fa fa-reply"></i> Voltar</a>
                            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-check"></i> Alterar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection