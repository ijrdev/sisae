@extends('sistema::layouts.main')

@section('title', 'Escolas - Servicos')

@section('header')
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="fa fa-cog" style="color: #55538B;"></i>Escolas - Servicos<br><small>Habilitar serviços para a escola.</small>
            </h1>
        </div>
    </div>

    <ul class="breadcrumb breadcrumb-top">
        <li><a href="{{ route('sistema.escolas.index') }}">Escolas</a></li>
        <li>Serviços</li>
    </ul>
@endsection

@section('content')
    <div class="block">
        <div class="row">
            <div class="col-sm-12">
                <form action="{{ route('sistema.escolas.habilitar') }}" method="post" id="sistema-escolas-habilitar" class="form-horizontal form-bordered">
                    @csrf

                    <input type="hidden" name="id_escola" class="form-control" value="{{ $id_escola ?? old('id_escola') }}" required>

                    @foreach($servicos as $servico)
                        <div class="form-group">
                            <label class="col-md-3 control-label"><i class="{{ $servico->icon }}"></i> {{ $servico->label_servico }}</label>
                            
                            @foreach($servico->funcionalidades as $funcionalidade)
                                <div class="col-md-9">
                                    <label class="checkbox-inline" for="{{ $funcionalidade->id_funcionalidade }}">
                                    <input type="checkbox" id="{{ $funcionalidade->id_funcionalidade }}" name="{{ $servico->id_servico }}[]" value="{{ $funcionalidade->id_funcionalidade }}" 
                                        @foreach($servicos_escola as $serv_esc)
                                            {{ $funcionalidade->id_funcionalidade == $serv_esc->funcionalidade ? "checked" : '' }}
                                        @endforeach
                                    > {{ $funcionalidade->label_func }}                                        
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    @endforeach

                    <div class="form-group form-actions" id="form-buttons">
                        <div class="col-lg-12 text-center">
                            <a class="btn btn-sm btn-default" href="{{ route('sistema.escolas.index') }}"><i class="fa fa-reply"></i> Voltar</a>
                            <button type="button" class="btn btn-sm btn-primary" onclick="formSubmitLoading('sistema-escolas-habilitar')"><i class="fa fa-check"></i> Habilitar</button>
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