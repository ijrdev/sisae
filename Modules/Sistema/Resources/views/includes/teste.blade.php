@empty($data)

@else
    <div class="row">
        <div class="col-sm-6 col-lg-3">
            <a href="javascript:void(0)" class="widget widget-hover-effect1">
                <div class="widget-simple themed-background">
                    <img src="img/placeholders/avatars/avatar12.jpg" alt="avatar" class="widget-image img-circle pull-left">
                    <h4 class="widget-content widget-content-light">
                        <strong>{{ $nome ?? '' }}</strong>
                        <small>{{ $profissao ?? '' }}</small>
                    </h4>
                </div>
                <div class="widget-extra">
                    <div class="row text-center">
                        <div class="col-xs-4">
                            <h3>
                                <strong>10</strong><br>
                                <small>Articles</small>
                            </h3>
                        </div>
                        <div class="col-xs-4">
                            <h3>
                                <strong>9</strong><br>
                                <small>Clients</small>
                            </h3>
                        </div>
                        <div class="col-xs-4">
                            <h3>
                                <strong>15</strong><br>
                                <small>Projects</small>
                            </h3>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
@endempty