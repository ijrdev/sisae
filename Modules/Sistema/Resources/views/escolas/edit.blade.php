@extends('sistema::layouts.main')

@section('title', 'Escolas - Alterar')

@section('header')
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="fa fa-university" style="color: #55538B;"></i>Escolas - Alterar<br><small>Altere alguma informação da escola.</small>
            </h1>
        </div>
    </div>

    <ul class="breadcrumb breadcrumb-top">
        <li><a href="{{ route('sistema.escolas.index') }}">Escolas</a></li>
        <li>Alterar</li>
    </ul>
@endsection

@section('content')
    <div class="block">
        <div class="row">
            <div class="col-sm-12">
                <form action="{{ route('sistema.escolas.update') }}" method="post" class="form-horizontal form-bordered">
                    @method('PUT')
                    @csrf

                    <input type="hidden" name="id_escola" class="form-control" value="{{ $escola->id_escola ?? old('id_escola') }}" required>
                    
                    <div class="form-group">
                        <div class="col-lg-offset-3 col-md-offset-3 col-lg-6 col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-university"></i></span>
                                <input type="text" name="nome_escola" class="form-control" placeholder="Nome da escola" value="{{ $escola->nome_escola ?? old('nome_escola') }}" required>
                            </div>
                            @error('nome_escola')
                                <div class="help-block"><span class="text-danger">{{ $message }}</span></div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-offset-3 col-md-offset-3 col-lg-6 col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-sort-amount-asc"></i></span>
                                <input type="text" id="cnpj" name="cnpj" class="form-control" placeholder="CNPJ" value="{{ $escola->cnpj ?? old('cnpj') }}" required>
                            </div>
                            @error('cnpj')
                                <div class="help-block"><span class="text-danger">{{ $message }}</span></div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-offset-3 col-md-offset-3 col-lg-6 col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="gi gi-address_book"></i></span>
                                <input type="text" name="endereco_escola" class="form-control" placeholder="Endereço" value="{{ $escola->endereco_escola ?? old('endereco_escola') }}" required>
                            </div>
                            @error('endereco_escola')
                                <div class="help-block"><span class="text-danger">{{ $message }}</span></div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-offset-3 col-md-offset-3 col-lg-6 col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="gi gi-earphone"></i></span>
                                <input type="text"  id="telefone"name="telefone_escola" class="form-control" placeholder="Telefone" value="{{ $escola->telefone_escola ?? old('telefone_escola') }}" required>
                            </div>
                            @error('telefone_escola')
                                <div class="help-block"><span class="text-danger">{{ $message }}</span></div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-offset-3 col-md-offset-3 col-lg-6 col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                                <input type="email" name="email_escola" class="form-control" placeholder="E-mail" value="{{ $escola->email_escola ?? old('email_escola') }}" required>
                            </div>
                            @error('email_escola')
                                <div class="help-block"><span class="text-danger">{{ $message }}</span></div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-offset-3 col-md-offset-3 col-lg-6 col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-adjust"></i></span>
                                <select name="status_escola" class="select-chosen" data-placeholder="Status">
                                    <option value="A">Ativo</option>
                                    <option value="I">Inativo</option>
                                </select>
                            </div>
                            @error('status_escola')
                                <div class="help-block"><span class="text-danger">{{ $message }}</span></div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group form-actions">
                        <div class="col-lg-12 text-center">
                            <a class="btn btn-sm btn-default" href="{{ route('sistema.escolas.index') }}"><i class="fa fa-reply"></i> Voltar</a>
                            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-check"></i> Alterar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript" src="{{ url(mix('js/jquery.mask.min.js')) }}"></script>
@endsection