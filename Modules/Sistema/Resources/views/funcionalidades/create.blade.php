@extends('sistema::layouts.main')

@section('title', 'Funcionalidades - Cadastrar')

@section('header')
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="fa fa-cogs"></i>Funcionalidades - Cadastrar<br><small>Cadastre uma funcionalidade de algum serviço.</small>
            </h1>
        </div>
    </div>
@endsection

@section('content')
    <div class="block">
        <div class="row">
            <div class="col-sm-12">
                <form action="{{ route('sistema.funcionalidades.store') }}" method="post" class="form-horizontal form-bordered">
                    @csrf

                    <div class="form-group">
                        <div class="col-lg-offset-3 col-md-offset-3 col-lg-6 col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-cog"></i></span>
                                <select name="servico" class="select-chosen" data-placeholder="Todos os serviços">
                                    <option value=""></option>

                                    @foreach ($servicos as $servico)
                                        <option value="{{ $servico->id_servico }}">{{ $servico->label_servico }}</option>
                                    @endforeach
                                </select>
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
                                <input type="text" name="nome_func" class="form-control" placeholder="Nome da funcionalidade" value="{{ old('nome_func') ?? '' }}" required>
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
                                <input type="text" name="label_func" class="form-control" placeholder="Label da funcionalidade" value="{{ old('label_func') ?? '' }}" required>
                            </div>
                            @error('label_func')
                                <div class="help-block"><span class="text-danger">{{ $message }}</span></div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group form-actions">
                        <div class="col-lg-12 text-center">
                            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-check"></i> Cadastrar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection