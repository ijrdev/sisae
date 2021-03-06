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
                <form action="{{ route('sistema.servicos.update') }}" id="sistema-servicos-edit" method="post" class="form-horizontal form-bordered">
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
                                <input type="text" name="label_servico" class="form-control" placeholder="Label do serviço" value="{{  $servico->label_servico ?? old('label_servico') }}" required>
                            </div>
                            @error('label_servico')
                                <div class="help-block"><span class="text-danger">{{ $message }}</span></div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-offset-3 col-md-offset-3 col-lg-6 col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-square"></i></span>
                                <input type="text" name="icon" class="form-control" placeholder="Ícone do serviço" value="{{ $servico->icon ?? old('icon') }}" required>
                            </div>
                            @error('icon')
                                <div class="help-block"><span class="text-danger">{{ $message }}</span></div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-offset-3 col-md-offset-3 col-lg-6 col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-asterisk"></i></span>
                                <select name="tipo_servico" class="select-chosen" data-placeholder="Tipo do serviço">
                                    @switch($servico->tipo_servico)
                                        @case('L')
                                            <option value="L">Local</option>
                                            <option value="A">Ambiente</option>
                                            @break
                                        @case('A')
                                            <option value="A">Ambiente</option>
                                            <option value="L">Local</option>
                                            @break
                                    @endswitch
                                </select>
                            </div>
                            @error('tipo_servico')
                                <div class="help-block"><span class="text-danger">{{ $message }}</span></div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group form-actions" id="form-buttons">
                        <div class="col-lg-12 text-center">
                            <a class="btn btn-sm btn-default" href="{{ route('sistema.servicos.index') }}"><i class="fa fa-reply"></i> Voltar</a>
                            <button type="button" class="btn btn-sm btn-primary" onclick="formSubmitLoading('sistema-servicos-edit')"><i class="fa fa-check"></i> Alterar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection