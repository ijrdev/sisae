@extends('sistema::layouts.main')

@section('title', 'Serviços - Cadastrar')

@section('header')
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="fa fa-cog"></i>Serviços - Cadastrar<br><small>Realize o cadastro de algum serviço no sistema.</small>
            </h1>
        </div>
    </div>
@endsection

@section('content')
    <div class="block">
        <div class="row">
            <div class="col-sm-12">
                <form action="{{ route('sistema.servicos.store') }}" method="post" class="form-horizontal form-bordered">
                    @csrf

                    <div class="form-group">
                        <div class="col-lg-offset-3 col-md-offset-3 col-lg-6 col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-cog"></i></span>
                                <input type="text" name="nome_servico" class="form-control" placeholder="Nome do serviço" value="{{ old('nome_servico') ?? '' }}" required>
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
                                <input type="text" name="label_servico" class="form-control" placeholder="Label do serviço" value="{{ old('label_servico') ?? '' }}" required>
                            </div>
                            @error('label_servico')
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