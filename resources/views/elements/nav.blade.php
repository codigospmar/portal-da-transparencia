<section class="topo">
    <div class="container-xxl">
        <div class="row">
            <div class="topo-logo-transparencia d-flex">
                <a href=" {{ route("index") }}">
                    <img src="{{ asset("/images/logo-transparencia.svg") }}" class="topo-logo-img" alt="Prefeitura de Angra, Construindo oportunidades"></a>
                <div>
                    <img src="{{ asset("/images/transparencia/seloouro.png") }}" class="mx-2">
                    <img src="{{ asset("/images/transparencia/seloprata.png") }}" class="mx-2">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="topo-nav-transparencia">
    <div class="container ">
        <!-- Itens Principais Mobile -->
        <div class="row navMobile p-2">

            <div class="col text-start m-auto fs-4">
                <a data-bs-toggle="modal" data-bs-target="#gscModal" class="nav-link" href="#">
                    <i class="fa-solid text-white fa-magnifying-glass"></i>
                </a>
            </div>
            <div class="col text-end">
                <i style="cursor: pointer;" data-bs-toggle="offcanvas"
                data-bs-target="#offCanvasPrincipal" aria-controls="offCanvasPrincipal" class="text-white fs-1 fw-bold fa-solid fa-bars"></i>
            </div>
        </div>

        <!-- Itens Principais Desktop -->
        <ul class="nav navDesktop">
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="offcanvas" data-bs-target="#offCanvasPrefeitura" aria-controls="offCanvasPrefeitura" aria-current="page" href="#">
                    <i class="fa-solid fa-chevron-right px-2"></i> {{ __("A Prefeitura") }}
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="offcanvas" data-bs-target="#offCanvasServicos" aria-controls="offCanvasServicos" href="#">
                    <i class="fa-solid fa-chevron-right px-2"></i> {{ __("Serviços") }}
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="https://angra.rj.gov.br/noticias">{{ __("Notícias") }}</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="https://angra.rj.gov.br/boletim-oficial">{{ __("Boletim Oficial") }}</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="https://portal.angra.rj.gov.br/ouvidoria.asp?IndexSigla=sgri">{{ __("Ouvidoria - Fala.BR") }}</a>
            </li>

            <li class="nav-item">
                <a data-bs-toggle="modal" data-bs-target="#gscModal" class="nav-link" href="#">
                    <i class="fa-solid text-white fa-magnifying-glass"></i>
                </a>
            </li>

        </ul>
    </div>


    <div class="offcanvas m-0 offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offCanvasPrincipal" aria-labelledby="offCanvasPrincipalLabel">

        <div class="offcanvas-body">
            <!-- Lista Principal Mobile -->
            <div class="offcanvas-cabecalho">
                <div class="offcanvas-cabecalho-back">
                    &nbsp;
                </div>
                <div class="offcanvas-cabecalho-home">
                    <img src="{{ asset("/images/brasao-angra-dos-reis.svg") }}" alt="Angra dos Reis">
                </div>
                <div class="offcanvas-cabecalho-close voltaMenuMobile">
                    <a class="btn" data-bs-dismiss="offcanvas" aria-label="Close">
                        <i class="fa-solid fa-x"></i>
                    </a>
                </div>
            </div>

            <nav class="navLateral flex-column">
                <h4 class="offcanvas-body-titulos">{{ __("Menu") }}</h4>
                <ul>
                    <li class="nav-item">
                        <a class="nav-link-lateral" data-bs-toggle="offcanvas" data-bs-target="#offCanvasPrefeitura" aria-controls="offCanvasPrefeitura" aria-current="page" href="#">
                            <span>{{ __("A Prefeitura") }}</span>
                            <i class="fa-solid text-secondary fa-chevron-right"></i>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link-lateral" data-bs-toggle="offcanvas" data-bs-target="#offCanvasServicos" aria-controls="offCanvasServicos" href="#">
                            <span>{{ __("Serviços") }}</span>
                            <i class="fa-solid text-secondary fa-chevron-right"></i>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link-lateral" href="https://angra.rj.gov.br/noticias">{{ __("Notícias") }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link-lateral" href="https://angra.rj.gov.br/boletim-oficial">{{ __("Boletim Oficial") }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link-lateral" href="https://portal.angra.rj.gov.br/ouvidoria.asp?IndexSigla=sgri">{{ __("Ouvidoria - Fala.BR") }}</a>
                    </li>


                </ul>
            </nav>

        </div>
    </div>

    <div class="offcanvas m-0 offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offCanvasPrefeitura"
         aria-labelledby="offCanvasPrefeituraLabel">
        <div class="offcanvas-body">
            <!-- Lista A Prefeitura -->
            <nav class="navLateral flex-column" id="menu">

                <div class="offcanvas-cabecalho">
                    <div class="offcanvas-cabecalho-back">
                        <a data-bs-toggle="offcanvas" data-bs-target="#offCanvasPrincipal" aria-controls="offCanvasPrincipal" class="btn">
                            <i class="fa-solid fa-chevron-left"></i>
                        </a>
                    </div>
                    <div class="offcanvas-cabecalho-home">
                        <img src="{{ asset("/images/brasao-angra-dos-reis.svg") }}" alt="Angra dos Reis">
                    </div>
                    <div class="offcanvas-cabecalho-close voltaMenuMobile">
                        <a class="btn" data-bs-dismiss="offcanvas" aria-label="Close">
                            <i class="fa-solid fa-x"></i>
                        </a>
                    </div>
                </div>

                <h4 class="offcanvas-body-titulos">{{ __("A Prefeitura") }}</h4>
                <ul>
                    <li class="nav-item">
                        <a class="nav-link-lateral" href="https://angra.rj.gov.br/prefeito">{{ __("O Prefeito") }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link-lateral" tabindex="-1" aria-disabled="true" href="https://angra.rj.gov.br/vice-prefeito">{{ __("Vice-Prefeito") }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link-lateral" href="#" id="secretarias">
                            <span>{{ __("Secretarias") }}</span>
                            <i class="fa-solid text-secondary fa-chevron-right"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link-lateral" href="#" id="autarquias">
                            <span>{{ __("Fundações e Autarquias") }}</span>
                            <i class="fa-solid text-secondary fa-chevron-right"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link-lateral" href="https://portal.angra.rj.gov.br/licitacoes-procedimentos.asp?indexsigla=transp&instituicao=0&status=0&modalidade=0&ano=2025">{{ __("Licitações e procedimentos") }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link-lateral" href="https://angra.rj.gov.br/legislacao">{{ __("Legislação") }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link-lateral" href="https://portal.angra.rj.gov.br/sad-calendario.asp?indexsigla=SAD">{{ __("Calendário Municipal") }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link-lateral" href="https://angra.rj.gov.br/calendariodeeventos">{{ __("Calendário de Eventos") }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link-lateral" href="https://angra.prodataweb.inf.br/sig/app.html#/transparencia/transparencia-folha-pagamento" target="_blank">{{ __("Concursos e Processos seletivos") }}</a>
                    </li>
                </ul>
            </nav>

            <!-- Subitens de Secretarias -->
            <div data-aos="fade-right" id="subSecretarias" style="display: none;">

                <div class="offcanvas-cabecalho">
                    <div class="offcanvas-cabecalho-back">
                        <a id="voltarSecretarias" class="btn">
                            <i class="fa-solid fa-chevron-left"></i>
                        </a>
                    </div>
                    <div class="offcanvas-cabecalho-home voltaMenuMobile">
                        <img src="{{ asset("/images/brasao-angra-dos-reis.svg") }}" alt="Angra dos Reis">
                    </div>
                    <div class="offcanvas-cabecalho-close">
                        <a class="btn" data-bs-dismiss="offcanvas" aria-label="Close">
                            <i class="fa-solid fa-x"></i>
                        </a>
                    </div>
                </div>

                <h4 class="offcanvas-body-titulos">{{ __("Secretarias") }}</h4>
                <ul id="menuSecretarias">

                </div>

            <!-- Subitens de Fundações e Autarquias -->
                <div id="subAutarquias" style="display: none;">

                    <div class="offcanvas-cabecalho">
                        <div class="offcanvas-cabecalho-back">
                            <a id="voltarAutarquias" class="btn">
                                <i class="fa-solid fa-chevron-left"></i>
                            </a>
                        </div>
                        <div class="offcanvas-cabecalho-home voltaMenuMobile">
                            <img src="{{ asset("/images/brasao-angra-dos-reis.svg") }}" alt="Angra dos Reis">
                        </div>
                        <div class="offcanvas-cabecalho-close">
                            <a class="btn" data-bs-dismiss="offcanvas" aria-label="Close">
                                <i class="fa-solid fa-x"></i>
                            </a>
                        </div>
                    </div>

                    <h4 class="offcanvas-body-titulos">{{ __("Fundações e Autarquias") }}</h4>
                    <ul id="menuFundacoesAutarquias">

                    </div>
                </div>
            </div>

            <div class="offcanvas m-0 offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offCanvasServicos" aria-labelledby="offCanvasServicosLabel">
                <div class="offcanvas-body">
            <!-- Lista de Serviços -->
                    <nav class="navLateral flex-column" id="menu">

                        <div class="offcanvas-cabecalho">
                            <div class="offcanvas-cabecalho-back voltaMenuMobile">
                                <a data-bs-toggle="offcanvas" data-bs-target="#offCanvasPrincipal" aria-controls="offCanvasPrincipal" class="btn">
                                    <i class="fa-solid fa-chevron-left"></i>
                                </a>
                            </div>
                            <div class="offcanvas-cabecalho-home">
                                <img src="{{ asset("/images/brasao-angra-dos-reis.svg") }}" alt="Angra dos Reis">
                            </div>
                            <div class="offcanvas-cabecalho-close">
                                <a class="btn" data-bs-dismiss="offcanvas" aria-label="Close">
                                    <i class="fa-solid fa-x"></i>
                                </a>
                            </div>
                        </div>

                        <h4 class="offcanvas-body-titulos">{{ __("Serviços") }}</h4>
                        <ul>


                            <li class="nav-item">
                                <a class="nav-link-lateral" href="https://cartadeservicos.angra.rj.gov.br" target="_blank">{{ __("Carta de Serviços") }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link-lateral" href="https://portal.angra.rj.gov.br/ouvidoria.asp?indexsigla=transp">{{ __("Ouvidoria - Fala.BR") }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link-lateral" href="https://portal.angra.rj.gov.br/sad-consulta-processo.asp?IndexSigla=SAD">{{ __("Consulta de Processos") }}</a>
                            </li>
                            <li class="nav-item">
                        <a class="nav-link-lateral" href="https://angra.rj.gov.br/sei"">{{ __("Portal SEI Angra") }}</a>
                    </li>
                    <li class=" nav-item">
                        <a class="nav-link-lateral" href="https://www.spe.angra.rj.gov.br/senhaweb/login.aspx" target="_blank">{{ __("Nota Fiscal Eletrônica") }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link-lateral" href="https://siarm.angra.rj.gov.br/" target="_blank">{{ __("Portal do Contribuinte") }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link-lateral" href="https://siarm.angra.rj.gov.br/arrecadacao/cobranca/iptu" target="_blank">{{ __("IPTU 2025") }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link-lateral" href="https://siarm.angra.rj.gov.br/itbi/declaracao" target="_blank">{{ __("ITBI") }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link-lateral" href="https://siarm.angra.rj.gov.br">{{ __("Parcelamento de Débitos Tributários e não Tributários") }}</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link-lateral" href="https://www.spe.angra.rj.gov.br/Ajuda/legislacao.aspx" target="_blank">{{ __("Legislação Tributária") }}</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link-lateral" href="https://angra.licenciamento.net.br/">{{ __("Portal de Licenciamento") }}</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link-lateral" href="https://portal.angra.rj.gov.br/sma-leis-urbanisticas.asp?IndexSigla=IMAAR">{{ __("Legislação Territorial - Licenciamento") }}</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link-lateral" href="https://portal.angra.rj.gov.br/lgpd.asp?IndexSigla=transp">{{ __("Proteção de Dados - LGPD") }}</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade @if(Route::currentRouteName() == " paginas.noticias") show active @endif">
                        <div class="my-3">
                            <form>
                                <div class="input-group mb-3">
                                <input type="search" class="form-control form-control-lg" name="search" placeholder="{{ __("Buscar Notícia") }}">
                                    <button class="btn btn-outline-secondary" type="button" id="button-addon2">{{ __("Pesquisar") }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="tab-pane fade @if(Route::currentRouteName() == " paginas.boletim-oficial") show active @endif">
                        <div class="my-3">
                            <form>
                                <div class="input-group mb-3">
                                <input type="search" class="form-control form-control-lg" name="search" placeholder="{{ __("Buscar Boletim") }}">
                                    <button class="btn btn-outline-secondary" type="button" id="button-addon2">{{ __("Pesquisar") }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="tab-pane fade @if(Route::currentRouteName() == " paginas.licitacoes-e-procedimentos") show active @endif">
                        <div class="my-3">
                            <form>
                                <div class="input-group mb-3">
                                <input type="search" class="form-control form-control-lg" name="search" placeholder="{{ __("O que procura?") }}">
                                    <button class="btn btn-outline-secondary" type="button" id="button-addon2">{{ __("Pesquisar") }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Modal -->
    <div class="modal modal-lg fade" id="gscModal" tabindex="-1" aria-labelledby="gscModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="gscModalLabel">O que procura?</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ">
                            <div class="gcse-search"></div>
                        </div>
                    </div>
                </div>
            </div>



        </section>