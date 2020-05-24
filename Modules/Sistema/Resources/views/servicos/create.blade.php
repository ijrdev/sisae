@extends('sistema::layouts.main')

@section('title', 'Serviços - Cadastro')

@section('header')
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="fa fa-cog"></i>Serviços - Cadastro<br><small>Realize o cadastro de algum serviço no sistema.</small>
            </h1>
        </div>
    </div>
@endsection

{{--@section('breadcumbs')--}}
{{--    <ul class="breadcrumb breadcrumb-top">--}}
{{--        <li><a href="{{ route('sistema.servicos.index') }}">Serviços</a></li>--}}
{{--        <li>Cadastrar</li>--}}
{{--    </ul>--}}
{{--@endsection--}}

@section('content')
    <div class="block">
        <div class="row">
            <div class="col-sm-12">
                <form action="" method="post" class="form-horizontal form-bordered" onsubmit="return false;">
                    @csrf
                    <div class="form-group">
                        <div class="col-lg-offset-3 col-md-offset-3 col-lg-6 col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-university"></i></span>
                                <input type="text" name="nome" class="form-control" placeholder="Nome">
                            </div>
                            <span class="help-block">Please enter your email</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-offset-3 col-md-offset-3 col-lg-6 col-md-6">
                            <div class="input-group">
                                <input type="email" id="example-input2-group1" name="example-input2-group1" class="form-control" placeholder="Email">
                                <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                            </div>
                            <span class="help-block">Please enter your email</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-offset-3 col-md-offset-3 col-lg-6 col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-euro"></i></span>
                                <input type="text" id="example-input3-group1" name="example-input3-group1" class="form-control" placeholder="..">
                                <span class="input-group-addon">.00</span>
                            </div>
                            <span class="help-block">Please enter your email</span>
                        </div>
                    </div>
                    <div class="form-group form-actions">
                        <div class="col-md-9 col-md-offset-3">
                            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-user"></i> Login</button>
                            <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
