<!DOCTYPE html>

<html lang="pt-BR">
    <head>
        <title>SISAE - Sistema Administrativo Educacional</title>

        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <meta name="descriptison" content="Sistema administrativo para o ambiente escolar.">
        <meta name="author" content="Ivanildo Junior">
        <meta name="keywords" content="Programação, PHP, Laravel, JS, jQuery, SQL, Sistema, Administrativo, Escolar">
        <meta name="robots" content="index, nofollow">

        <link href="{{ asset("img/site/icon-1x.png") }}" rel="icon">

        <link rel="apple-touch-icon" href="{{ asset("img/site/apple-touch-icon-iphone-60x60.png") }}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{ asset("img/site/apple-touch-icon-ipad-76x76.png") }}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset("img/site/apple-touch-icon-iphone-retina-120x120.png") }}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{ asset("img/site/apple-touch-icon-ipad-retina-152x152.png") }}">

        <link href="{{ asset('Butterfly/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('Butterfly/assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
        <link href="{{ asset('Butterfly/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
        <link href="{{ asset('Butterfly/assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
        <link href="{{ asset('Butterfly/assets/vendor/line-awesome/css/line-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset("css/site/font.css") }}" rel="stylesheet">
        <link href="{{ url(mix('css/site/style.css')) }}" rel="stylesheet">
    </head>

    <body>
        <header id="header" class="fixed-top">
            <div class="container d-flex align-items-center">
                <a href="{{ route('site.index.index') }}" class="logo mr-auto"><img src="{{ asset("img/site/logo-2x.png") }}" alt="SISAE" title="SISAE" class="img-fluid"></a>
                <!-- <h1 class="logo mr-auto"><a href="index.html">Butterfly</a></h1> -->

                <nav class="nav-menu d-none d-lg-block">
                    <ul>
                        <li class="active"><a href="#header">Início</a></li>
                        <li><a href="#about">Sobre</a></li>
                        <li><a href="#services">Serviços</a></li>
                        <li><a href="#garantias">Garantias</a></li>
                        <li><a href="#contact">Contato</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <section id="hero" class="d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                        <h1>Escola, professores, alunos e responsáveis, todos interligados.</h1>
                        <h2>Sistema administrativo online. Garanta mais agilidade na rotina do dia a dia e tenha tudo que precisa em um só lugar.</h2>
                    </div>

                    <div class="col-lg-6 order-1 order-lg-2 hero-img">
                        <img src="{{ asset("img/site/pessoas-lendo.jpg") }}" class="img-fluid" alt="Pessoas lendo" title="Pessoas lendo">
                    </div>
                </div>
            </div>
        </section>

        <main id="main">
            <section id="about" class="about">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 icon-boxes py-5">
                            <h2>Nossos princípios</h2>
                            <p>Mostramos total transparência de como agimos, assim dando maior confiabilidade.
                                O objetivo é fornecer nossos serviços com qualidade e sempre buscarando a satisfação dos nossos clientes.
                            </p>

                            <div class="icon-box">
                                <div class="icon"><i class="bx bxs-school"></i></div>
                                <h4 class="title">Missão</h4>
                                <p class="description">Levar uma forma administrativa inteligente usando a tecnologia para o ambiente escolar.</p>
                            </div>

                            <div class="icon-box">
                                <div class="icon"><i class="bx bx-right-arrow-alt"></i></div>
                                <h4 class="title">Visão</h4>
                                <p class="description">Se tornar referência em tecnologia na administração escolar.</p>
                            </div>

                            <div class="icon-box">
                                <div class="icon"><i class="bx bx-message-alt-detail"></i></div>
                                <h4 class="title">Valores</h4>
                                <p class="description">Promover o desenvolvimento social, conduta ética e qualidade nos nossos serviços.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="counts" class="counts">
                <div class="container">
                    <div class="text-center title">
                        <h3>Como estamos avançando</h3>
                        <p>A cada dia que passa estamos sempre inovando, buscando novos clientes e realizando parcerias.</p>
                    </div>

                    <div class="row counters">
                        <div class="col-lg-3 col-6 text-center">
                            <span data-toggle="counter-up">14</span>
                            <p>Serviços</p>
                        </div>

                        <div class="col-lg-3 col-6 text-center">
                            <span data-toggle="counter-up">36</span>
                            <p>Funcionalidades</p>
                        </div>

                        <div class="col-lg-3 col-6 text-center">
                            <span data-toggle="counter-up">21</span>
                            <p>Escolas</p>
                        </div>

                        <div class="col-lg-3 col-6 text-center">
                            <span data-toggle="counter-up">6</span>
                            <p>Parceiros</p>
                        </div>
                    </div>
                </div>
            </section>

            <section id="clients" class="clients">
                <div class="container">
                    <div class="row no-gutters clients-wrap clearfix wow fadeInUp">
                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="client-logo">
                                <img src="{{ asset("img/site/tilibra.png") }}" class="img-fluid" alt="Tilibra" title="Tilibra">
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="client-logo">
                                <img src="{{ asset("img/site/kalunga.png") }}" class="img-fluid" alt="Kalunga" title="Kalunga">
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="client-logo">
                                <img src="{{ asset("img/site/palimontes.png") }}" class="img-fluid" alt="Palimontes" title="Palimontes">
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="client-logo">
                                <img src="{{ asset("img/site/educazz.png") }}" class="img-fluid" alt="Educazz" title="Educazz">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="services" class="services section-bg">
                <div class="container">
                    <div class="section-title">
                        <h2>Serviços</h2>
                        <p>Alguns dos recursos que nosso sistema oferece.</p>
                    </div>

                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="icon-box">
                                <div class="icon"><i class="las la-star" style="color: goldenrod;"></i></div>
                                <h4 class="title">Serviços e funcionalidades</h4>
                                <p class="description">Trabalhamos com serviços que associados a realidade seria as funções e com funcionalidades que seriam as atividades.
                                    Desse modo, a escola só terá os serviços e funcionalidades do que realmente necessitar.
                                    Assim, trazendo um baixo custo na aquisição do sistema.</p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="icon-box">
                                <div class="icon"><i class="las la-phone" style="color: lightskyblue;"></i></div>
                                <h4 class="title">Área de cobrança</h4>
                                <p class="description">Tenha um controle maior sobre como gerenciar as mensalidades.
                                    Um ambiente com várias funcionalidades, tais como: dashboards, emissão de boletos, controle de pagamentos, cobrança, notificações via SMS, e-mails e pelo aplicativo, entre outras.
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="icon-box">
                                <div class="icon"><i class="las la-file-alt" style="color: forestgreen;"></i></div>
                                <h4 class="title">Gerenciador de documentos</h4>
                                <p class="description">O sistema possui um gerenciador de documentos, onde é possível preencher-los apenas informando os dados necessários de acordo com seu tipo.</p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6" data-wow-delay="0.1s">
                            <div class="icon-box">
                                <div class="icon"><i class="las la-book-open" style="color: #3fcdc7;"></i></div>
                                <h4 class="title">Biblioteca</h4>
                                <p class="description">Administre o acervo da biblioteca pelo sistema.
                                    A escola terá uma área para disponibilizar livros em PDF.
                                    O aluno terá opção de reservar ou renovar livros direto no sistema.
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6" data-wow-delay="0.2s">
                            <div class="icon-box">
                                <div class="icon"><i class="las la-chalkboard-teacher" style="color: dimgrey;"></i></div>
                                <h4 class="title">Área do professor</h4>
                                <p class="description">Um ambiente exclusivo para o professor administrar a frequencia de suas turmas, lançar notas, liberar atividades, entre outras funcionalidades.</p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6" data-wow-delay="0.2s">
                            <div class="icon-box">
                                <div class="icon"><i class="las la-mobile" style="color: darkblue;"></i></div>
                                <h4 class="title">Aplicativo para alunos e responsáveis</h4>
                                <p class="description">Dispomos de um aplicativo cheio de funcionalidades para alunos e responsáveis.
                                    Onde alunos possam baixar conteúdo das aulas, verificar notas, entre outras coisas, e os pais verificar frequência e notas dos filhos, solicitar algum documento, etc.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="garantias" class="garantias">
                <div class="container">
                    <div class="section-title">
                        <h2>Garantias</h2>
                        <p>Prezamos pelas nossas garantias fornecidas aos nossos clientes, pois se elas estiverem funcionando corretamente, é sinal da qualidade dos nossos serviços.</p>
                    </div>

                    <div class="row back">
                        <div class="col-lg-6 col-sm-12">
                            <div class="box">
                                <div class="icon"><i class="las la-database" style="color: steelblue;"></i></div>
                                <div class="title-info">
                                    <h4 class="title">Backup dos dados</h4>
                                    <p class="description">Cada informação é muito importante dentro do sistema. Estamos sempre realizando backups para evitar a perca dessas informações.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-12">
                            <div class="box">
                                <div class="icon"><i class="las la-user-shield" style="color: goldenrod;"></i></div>
                                <div class="">
                                    <h4 class="title">Segurança da informação</h4>
                                    <p class="description">Sempre tomamos cuidado e adotamos as melhores técnicas possíveis a respeito da segurança da informação em nosso sistema.
                                        Trabalhamos com servidores e ambientes altamente controlados.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-12">
                            <div class="box">
                                <div class="icon"><i class="las la-headphones" style="color: black;"></i></div>
                                <div class="">
                                    <h4 class="title">Suporte</h4>
                                    <p class="description">Estamos sempre disponíveis para ajudar da melhor forma possível, sendo via chat, e-mails ou por ligação.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-12">
                            <div class="box">
                                <div class="icon"><i class="las la-check-square" style="color: green;"></i></div>
                                <div class="">
                                    <h4 class="title">Disponibilidade</h4>
                                    <p class="description">Trabalhamos para evitar falhas e problemas, visando sempre dá total disponibilidade do sistema aos nossos clientes.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="contact" class="contact">
                <div class="container">
                    <div class="section-title">
                        <h2>Contact</h2>
                        <p>Deseja obter mais informações, alguma proposta ou conhecer mais dos nossos serviços? Entre em contato com a gente!</p>
                    </div>

                    <div class="row mt-5">
                        <div class="col-lg-4">
                            <div class="info">
                                <div class="email">
                                    <i class="icofont-envelope"></i>
                                    <h4>Email:</h4>
                                    <p>nosso.contato@sisae.com.br</p>
                                </div>

                                <div class="phone">
                                    <i class="icofont-phone"></i>
                                    <h4>Telefone:</h4>
                                    <p>+55 81 3265-9814</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-8 mt-5 mt-lg-0">
                            <form action="{{ route('site.index.enviar') }}" method="post" class="php-email-form">
                                @csrf
                                <div class="form-row">
                                    <div class="col-md-3 form-group">
                                        <input type="text" name="nome" class="form-control" placeholder="Nome" value="{{ old('nome') }}" required>
                                        <div class="validate"></div>
                                    </div>
                                    <div class="col-md-3 form-group">
                                        <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Telefone" value="{{ old('telefone') }}" required>
                                        <div class="validate"></div>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}" required>
                                        <div class="validate"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="assunto" id="assunto" placeholder="Assunto" value="{{ old('assunto') }}" required>
                                    <div class="validate"></div>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="mensagem" rows="5" placeholder="Mensagem" value="{{ old('mensagem') }}" required></textarea>
                                    <div class="validate"></div>
                                </div>
                                <div class="mb-3">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>
                                </div>
                                <div class="text-center"><button type="submit">Enviar</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer id="footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 footer-links">
                            <h4>Nossos canais</h4>
                            <p>Siga-nos em nossas redes sociais.</p>
                            <div class="social-links mt-3">
                                <a href="https://www.instagram.com" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
                                <a href="https://www.linkedin.com" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container py-4">
                <div class="copyright">
                    &copy; Copyright <strong><span>SISAE</span></strong>. All Rights Reserved
                </div>
            </div>
        </footer>

        <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

        <script type="text/javascript" src="{{ asset('Butterfly/assets/vendor/jquery/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('Butterfly/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('Butterfly/assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('Butterfly/assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('Butterfly/assets/vendor/counterup/counterup.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('Butterfly/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
        <script type="text/javascript" src="{{ url(mix('js/jquery.mask.min.js')) }}"></script>
        <script type="text/javascript" src="{{ url(mix('js/site/main.js')) }}"></script>
    </body>
</html>
