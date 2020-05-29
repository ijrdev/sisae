@extends('sistema::layouts.main')

@section('title', 'Escolas - Cadastrar')

@section('header')
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="fa fa-university" style="color: #55538B;"></i>Escolas - Cadastrar<br><small>Cadastrar a escola.</small>
            </h1>
        </div>
    </div>
@endsection

@section('content')
    <div class="block">
        <div class="row">
            <div class="col-sm-12">
                <form action="{{ route('sistema.escolas.store') }}" method="post" id="sistema-escolas-store" class="form-horizontal form-bordered">
                    @csrf

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
                                <input type="text" id="telefone" name="telefone_escola" class="form-control" placeholder="Telefone" value="{{ $escola->telefone_escola ?? old('telefone_escola') }}" required>
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

                    <div class="form-group form-actions" id="form-buttons">
                        <div class="col-lg-12 text-center">
                            <button type="button" class="btn btn-sm btn-primary" onclick="formSubmitLoading('sistema-escolas-store')"><i class="fa fa-check"></i> Cadastrar</button>
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