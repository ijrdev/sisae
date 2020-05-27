<!DOCTYPE html>

<html class="js" lang="pt-BR">
    <head>
        <title>SISAE - @yield('title', 'Sistema Administrativo Educacional')</title>

        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <meta name="descriptison" content="Sistema administrativo para o ambiente escolar.">
        <meta name="author" content="Ivanildo Junior">
        <meta name="keywords" content="Programação, PHP, Laravel, JS, jQuery, SQL, Sistema, Administrativo, Escolar">
        <meta name="robots" content="index, nofollow">

        <link href="{{ asset("img/sistema/icon-1x.png") }}" rel="icon">

        <link rel="apple-touch-icon" href="{{ asset("img/sistema/apple-touch-icon-iphone-60x60.png") }}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{ asset("img/sistema/apple-touch-icon-ipad-76x76.png") }}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset("img/sistema/apple-touch-icon-iphone-retina-120x120.png") }}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{ asset("img/sistema/apple-touch-icon-ipad-retina-152x152.png") }}">

        <link href="{{ asset('ProUi/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('ProUi/css/plugins.css') }}" rel="stylesheet">
        <link href="{{ url(mix('css/sistema/main.css')) }}" rel="stylesheet">
        <link href="{{ asset('ProUi/css/themes.css') }}" rel="stylesheet">

        @yield('links')
    </head>

    <body>
        <div id="page-wrapper">
            <!-- Preloader -->
            <!-- Preloader functionality (initialized in js/app.js) - pageLoading() -->
            <!-- Used only if page preloader is enabled from inc/config (PHP version) or the class 'page-loading' is added in #page-wrapper element (HTML version) -->
            <div class="preloader themed-background">
                <h1 class="push-top-bottom text-light text-center"><strong>Pro</strong>UI</h1>
                <div class="inner">
                    <h3 class="text-light visible-lt-ie10"><strong>Loading..</strong></h3>
                    <div class="preloader-spinner hidden-lt-ie10"></div>
                </div>
            </div>
            <!-- END Preloader -->

            <div id="page-container" class="sidebar-visible-lg sidebar-no-animations">
                <div id="sidebar">
                    <div id="sidebar-scroll">
                        <div class="sidebar-content">
                            <a href="index.html" class="sidebar-brand">
                                <i class="gi gi-flash"></i><span class="sidebar-nav-mini-hide"><strong>Pro</strong>UI</span>
                            </a>

                            <div class="sidebar-section sidebar-user clearfix sidebar-nav-mini-hide">
                                <div class="sidebar-user-avatar">
                                    <a href="page_ready_user_profile.html">
                                        <img src="img/placeholders/avatars/avatar2.jpg" alt="avatar">
                                    </a>
                                </div>
                                <div class="sidebar-user-name">John Doe</div>
                                <div class="sidebar-user-links">
                                    <a href="page_ready_user_profile.html" data-toggle="tooltip" data-placement="bottom" title="Profile"><i class="gi gi-user"></i></a>
                                    <a href="page_ready_inbox.html" data-toggle="tooltip" data-placement="bottom" title="Messages"><i class="gi gi-envelope"></i></a>
                                    <!-- Opens the user settings modal that can be found at the bottom of each page (page_footer.html in PHP version) -->
                                    <a href="javascript:void(0)" class="enable-tooltip" data-placement="bottom" title="Settings" onclick="$('#modal-user-settings').modal('show');"><i class="gi gi-cogwheel"></i></a>
                                    <a href="login.html" data-toggle="tooltip" data-placement="bottom" title="Logout"><i class="gi gi-exit"></i></a>
                                </div>
                            </div>

                            <ul class="sidebar-nav">
                                <li class="sidebar-header">
                                    <span class="sidebar-header-options clearfix"><a href="javascript:void(0)" data-toggle="tooltip" title="Página inicial do sistema."><i class="gi gi-settings"></i></a></span>
                                    <span class="sidebar-header-title">SISAE</span>
                                </li>

                                <li>
                                    <a href="{{ route('sistema.index.index') }}" {{ Route::current()->getName() == 'sistema.index.index' ? "class=active" : '' }}><i class="gi gi-home sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Início</span></a>
                                </li>

                                <li class="sidebar-header">
                                    <span class="sidebar-header-options clearfix"><a href="javascript:void(0)" data-toggle="tooltip" title="Área administrativa do sistema."><i class="gi gi-settings"></i></a></span>
                                    <span class="sidebar-header-title">Área Administrativa</span>
                                </li>

                                <li {{ explode('.', Route::current()->getName())[1]  == 'servicos' ? "class=active" : '' }}>
                                    <a href="javascript:void(0)" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="fa fa-cog sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Serviços</span></a>
                                    <ul>
                                        <li>
                                            <a href="{{ route('sistema.servicos.index') }}" {{ Route::current()->getName() == 'sistema.servicos.index' ? "class=active" : '' }}>Todos os serviços</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('sistema.servicos.create') }}" {{ Route::current()->getName() == 'sistema.servicos.create' ? "class=active" : '' }}>Cadastrar</a>
                                        </li>
                                    </ul>
                                </li>

                                <li {{ explode('.', Route::current()->getName())[1]  == 'funcionalidades' ? "class=active" : '' }}>
                                    <a href="javascript:void(0)" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="fa fa-cogs sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Funcionalidades</span></a>
                                    <ul>
                                        <li>
                                            <a href="{{ route('sistema.funcionalidades.index') }}" {{ Route::current()->getName() == 'sistema.funcionalidades.index' ? "class=active" : '' }}>Todas as funcionalidades</a>
                                        </li>
                                    </ul>
                                </li>

                                <li {{ explode('.', Route::current()->getName())[1]  == 'escolas' ? "class=active" : '' }}>
                                    <a href="javascript:void(0)" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="fa fa-university sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Escolas</span></a>
                                    <ul>
                                        <li>
                                            <a href="{{ route('sistema.escolas.index') }}" {{ Route::current()->getName() == 'sistema.escolas.index' ? "class=active" : '' }}>Todas as escolas</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('sistema.escolas.create') }}" {{ Route::current()->getName() == 'sistema.escolas.create' ? "class=active" : '' }}>Cadastrar</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div id="main-container">
                    <header class="navbar navbar-default">
                        <ul class="nav navbar-nav-custom">
                            <li>
                                <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar');this.blur();">
                                    <i class="fa fa-bars fa-fw"></i>
                                </a>
                            </li>
                        </ul>

                        <ul class="nav navbar-nav-custom pull-right">
                            <li class="dropdown">
                                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="img/placeholders/avatars/avatar2.jpg" alt="avatar"> <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-custom dropdown-menu-right">
                                    <li class="dropdown-header text-center">Account</li>
                                    <li>
                                        <a href="page_ready_timeline.html">
                                            <i class="fa fa-clock-o fa-fw pull-right"></i>
                                            <span class="badge pull-right">10</span>
                                            Updates
                                        </a>
                                        <a href="page_ready_inbox.html">
                                            <i class="fa fa-envelope-o fa-fw pull-right"></i>
                                            <span class="badge pull-right">5</span>
                                            Messages
                                        </a>
                                        <a href="page_ready_pricing_tables.html"><i class="fa fa-magnet fa-fw pull-right"></i>
                                            <span class="badge pull-right">3</span>
                                            Subscriptions
                                        </a>
                                        <a href="page_ready_faq.html"><i class="fa fa-question fa-fw pull-right"></i>
                                            <span class="badge pull-right">11</span>
                                            FAQ
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </header>

                    <div id="page-content">
                        @yield('header')
                        @yield('breadcumbs')
                        @includeWhen(session('message'), 'sistema::includes.message', session('message'))
                        @yield('content')
                    </div>

                    <footer class="clearfix">
                        <div class="text-center">
                            &copy; Copyright <strong><span>SISAE</span></strong>. All Rights Reserved
                        </div>
                    </footer>
                </div>
            </div>
        </div>

        <a href="#" id="to-top"><i class="fa fa-angle-double-up"></i></a>

        <script type="text/javascript" src="{{ asset('ProUi/js/vendor/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('ProUi/js/vendor/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('ProUi/js/plugins.js') }}"></script>
        <script type="text/javascript" src="{{ url(mix('js/sistema/app.js')) }}"></script>
        <script type="text/javascript" src="{{ url(mix('js/jquery.bootstrap-growl.min.js')) }}"></script>
        <script type="text/javascript" src="{{ url(mix('js/all.js')) }}"></script>

        @yield('scripts')
    </body>
</html>
