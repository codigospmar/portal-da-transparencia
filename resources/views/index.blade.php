@extends('theme')
@section("title", "Portal da Transparência - Angra dos Reis :: Página inicial")
@section('content')

<body class="bg-light">

    <div class="bg-light text-white pb-5 mb-5 rounded-bottom-3 shadow-sm">
        <div class="container pt-5">
            <div class="row justify-content-center text-center mb-4">
                <div class="col-lg-8">
                    <h1 class="display-7 fw-bold mb-3 text-green">Acesso aberto às informações públicas</h1>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="input-group rounded-5 input-group-lg shadow d-flex align-items-center">
                        <input type="text" class="form-control rounded-5 py-3 border-0 text-center text-soft" id="pesquisaInput" placeholder="O que você está procurando?">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-2" id="mainInfo">
        <div class="row justify-content-center">
            <div class="col-12 sectionTitle">
                <div class=" border-0 rounded-3 mb-4">
                    <div class="card-body p-3">
                        <p class="fs-5 mb-4">
                            <i class="fas fa-eye text-success me-2"></i>
                            O <strong class="text-tertiary">Portal da Transparência</strong> é uma ferramenta desenvolvida para permitir que a sociedade acompanhe o uso dos recursos públicos e tenha uma participação ativa na discussão das políticas públicas e no uso do dinheiro público.
                        </p>

                        <p class="fs-5 mb-4">
                            <i class="fas fa-chart-line text-success me-2"></i>
                            Com o objetivo de dar plena transparência aos dados do <strong class="text-tertiary">Poder Executivo</strong>, disponibilizamos à sociedade uma ferramenta prática e intuitiva, atendendo as recomendações dos órgãos de controle.
                        </p>

                        <p class="fs-5 mb-0">
                            <i class="fas fa-info-circle text-success me-2"></i>
                            Caso não encontre a informação que está buscando, entre em contato conosco através de nossos canais de <a href="{{ route('pages.ouvidoria') }}" class="text-secondary text-decoration-none fw-bold">Ouvidoria</a> e do <a href="https://falabr.cgu.gov.br/web/home?modoOuvidoria=1&ouvidoriaInterna=false" target="_blank" class="text-secondary text-decoration-none fw-bold">Serviço de Informação ao Cidadão</a>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row g-4">

            <div class="col-12 sectionTitle">
                <h1 class="text-soft">Informações Orçamentárias e Financeiras</h1>
            </div>

            <!-- Receitas -->
            <div class="col-xl-3 col-lg-4 col-md-6 card-item">
                <div class="dropdown">
                    <button class="btn btn-outline-success border-0 shadow rounded-4 w-100 text-wrap d-flex align-items-center justify-content-start p-3 dropdown-toggle" type="button" data-bs-toggle="dropdown">
                        <div class="bg-success bg-opacity-10 p-3 rounded-3 me-3">
                            <i class="fs-1 fas fa-money-bill-wave text-white fa-lg"></i>
                        </div>
                        <span class="text-start">
                            <strong>Receitas</strong>
                        </span>
                    </button>
                    <ul class="dropdown-menu text-wrap shadow-sm">
                        <li><a class="dropdown-item" href="https://angra.prodataweb.inf.br/sig/app.html#/transparencia/comparativo-receita-prevista-com-arrecadada/" target="_blank">Receita Prevista e Arrecadada</a></li>
                        <li><a class="dropdown-item" href="{{ route('pages.renuncias-de-receitas') }}">Renúncias de Receitas</a></li>
                        <li><a class="dropdown-item" href="{{ route('pages.beneficiarios-desoneracoes-tributarias') }}">Beneficiários das Desonerações Tributárias</a></li>
                        <li><a class="dropdown-item" href="{{ route('pages.incentivos-culturais') }}">Incentivos Culturais</a></li>
                    </ul>
                </div>
            </div>

            <!-- Despesas -->
            <div class="col-xl-3 col-lg-4 col-md-6 card-item">
                <div class="dropdown">
                    <button class="btn btn-outline-success border-0 shadow rounded-4 w-100 text-wrap d-flex align-items-center justify-content-start p-3 dropdown-toggle" type="button" data-bs-toggle="dropdown">
                        <div class="bg-success bg-opacity-10 p-3 rounded-3 me-3">
                            <i class="fs-1 fas fa-file-invoice-dollar text-white fa-lg"></i>
                        </div>
                        <span class="text-start">
                            <strong>Despesas</strong>
                        </span>
                    </button>
                    <ul class="dropdown-menu text-wrap shadow-sm">
                        <li><a class="dropdown-item" href="{{ route('pages.qdd') }}">QDD - Quadro de Detalhamento das Despesas</a></li>
                        <li><a class="dropdown-item" href="https://angra.prodataweb.inf.br/sig/app.html#/transparencia/transparencia-despesa-simplificado/" target="_blank">Despesa Empenhada, Liquidada e Paga</a></li>
                        <li><a class="dropdown-item" href="https://angra.prodataweb.inf.br/sig/app.html#/transparencia/transparencia-liquidacoes-a-pagar/" target="_blank">Ordem Cronológica de Pagamento</a></li>
                    </ul>
                </div>
            </div>

            <!-- Convênios -->
            <div class="col-xl-3 col-lg-4 col-md-6 card-item">
                <div class="dropdown">
                    <button class="btn btn-outline-success border-0 shadow rounded-4 w-100 text-wrap d-flex align-items-center justify-content-start p-3 dropdown-toggle" type="button" data-bs-toggle="dropdown">
                        <div class="bg-success bg-opacity-10 p-3 rounded-3 me-3">
                            <i class="fs-1 fas fa-handshake text-white fa-lg"></i>
                        </div>
                        <span class="text-start">
                            <strong>Convênios</strong>
                        </span>
                    </button>
                    <ul class="dropdown-menu text-wrap shadow-sm">
                        <li><a class="dropdown-item" href="https://angra.prodataweb.inf.br/sig/app.html#/transparencia/transparencia-convenio-concedido-recebido/" target="_blank">Convênios</a></li>
                        <li><a class="dropdown-item" href="https://portaldatransparencia.gov.br/convenios/consulta?paginacaoSimples=true&tamanhoPagina=&offset=&direcaoOrdenacao=asc&nomeMunicipio=ANGRA+DOS+REIS&colunasSelecionadas=linkDetalhamento%2CnumeroConvenio%2Cuf%2CmunicipioConvenente%2Csituacao%2CtipoTransferencia%2Cobjetivo%2CorgaoSuperior%2Corgao%2Cconcedente%2Cconvenente%2CdataInicioVigencia%2CdataFimVigencia%2CdataPublicacao%2CvalorLiberado%2CvalorCelebrado" target="_blank">Convênios da União</a></li>
                    </ul>
                </div>
            </div>

            <!-- Emendas -->
            <div class="col-xl-3 col-lg-4 col-md-6 card-item">
                <div class="dropdown">
                    <button class="btn btn-outline-success border-0 shadow rounded-4 w-100 text-wrap d-flex align-items-center justify-content-start p-3 dropdown-toggle" type="button" data-bs-toggle="dropdown">
                        <div class="bg-success bg-opacity-10 p-3 rounded-3 me-3">
                            <i class="fs-1 fas fa-file-contract text-white fa-lg"></i>
                        </div>
                        <span class="text-start">
                            <strong>Emendas</strong>
                        </span>
                    </button>
                    <ul class="dropdown-menu text-wrap shadow-sm">
                        <li><a class="dropdown-item" href="{{ route('pages.emendas-impositivas') }}">Emendas Impositivas</a></li>
                        <li><a class="dropdown-item" href="{{ route('pages.emendas-parlamentares') }}">Emendas Parlamentares</a></li>
                    </ul>
                </div>
            </div>

            <!-- Balanços Contábeis -->
            <div class="col-xl-3 col-lg-4 col-md-6 card-item">
                <a class="btn btn-outline-success border-0 shadow rounded-4 w-100 text-wrap d-flex align-items-center justify-content-start p-3" href="{{ route('pages.balancos-contabeis')}}" target="_blank">
                    <div class="bg-success bg-opacity-10 p-3 rounded-3 me-3">
                        <i class="fs-1 fas fa-balance-scale text-white fa-lg"></i>
                    </div>
                    <span class="text-start">
                        <strong>Balanços Contábeis</strong>
                    </span>
                </a>
            </div>

            <!-- Leis Orçamentárias -->
            <div class="col-xl-3 col-lg-4 col-md-6 card-item">
                <div class="dropdown">
                    <button class="btn btn-outline-success border-0 shadow rounded-4 w-100 text-wrap d-flex align-items-center justify-content-start p-3 dropdown-toggle" type="button" data-bs-toggle="dropdown">
                        <div class="bg-success bg-opacity-10 p-3 rounded-3 me-3">
                            <i class="fs-1 fas fa-gavel text-white fa-lg"></i>
                        </div>
                        <span class="text-start">
                            <strong>Leis Orçamentárias</strong>
                        </span>
                    </button>
                    <ul class="dropdown-menu text-wrap shadow-sm">
                        <li><a class="dropdown-item" href="{{ route('pages.ppa') }}">PPA - Plano Plurianual</a></li>
                        <li><a class="dropdown-item" href="{{ route('pages.ldo') }}">LDO - Lei de Diretrizes Orçamentárias</a></li>
                        <li><a class="dropdown-item" href="{{route ('pages.loa')}}">LOA - Lei Orçamentária Anual</a></li>
                    </ul>
                </div>
            </div>

            <!-- RREO e RGF -->
            <div class="col-xl-3 col-lg-4 col-md-6 card-item">
                <a class="btn btn-outline-success border-0 shadow rounded-4 w-100 text-wrap d-flex align-items-center justify-content-start p-3" href="{{route ('pages.responsabilidade-fiscal') }}">
                    <div class="bg-success bg-opacity-10 p-3 rounded-3 me-3">
                        <i class="fs-1 fas fa-file-alt text-white fa-lg"></i>
                    </div>
                    <span class="text-start">
                        <strong>RREO e RGF</strong>
                        <small class="d-block text-muted">Lei de Responsabilidade Fiscal</small>
                    </span>
                </a>
            </div>

            <!-- Prestação de Contas -->
            <div class="col-xl-3 col-lg-4 col-md-6 card-item">
                <div class="dropdown">
                    <button class="btn btn-outline-success border-0 shadow rounded-4 w-100 text-wrap d-flex align-items-center justify-content-start p-3 dropdown-toggle" type="button" data-bs-toggle="dropdown">
                        <div class="bg-success bg-opacity-10 p-3 rounded-3 me-3">
                            <i class="fs-1 fas fa-clipboard-check text-white fa-lg"></i>
                        </div>
                        <span class="text-start">
                            <strong>Prestação de Contas</strong>
                        </span>
                    </button>
                    <ul class="dropdown-menu text-wrap shadow-sm">
                        <li><a class="dropdown-item" href="{{ route('pages.parecer-previo-tcerj') }}">Parecer Prévio TCE-RJ</a></li>
                        <li><a class="dropdown-item" href="{{ route('pages.julgamento-contas') }}">Julgamento das contas do Executivo pelo Legislativo</a></li>
                    </ul>
                </div>
            </div>

            <!-- Audiências Públicas -->
            <div class="col-xl-3 col-lg-4 col-md-6 card-item">
                <div class="dropdown">
                    <button class="btn btn-outline-success border-0 shadow rounded-4 w-100 text-wrap d-flex align-items-center justify-content-start p-3 dropdown-toggle" type="button" data-bs-toggle="dropdown">
                        <div class="bg-success bg-opacity-10 p-3 rounded-3 me-3">
                            <i class="fs-1 fas fa-users text-white fa-lg"></i>
                        </div>
                        <span class="text-start">
                            <strong>Audiências Públicas</strong>
                        </span>
                    </button>
                    <ul class="dropdown-menu text-wrap shadow-sm">
                        <li><a class="dropdown-item" href="{{ route('pages.atas') }}">Atas</a></li>
                        <li><a class="dropdown-item" href="{{ route('pages.metas-fiscais') }}">Metas Fiscals</a></li>
                        <li><a class="dropdown-item" href="{{ route('pages.leis-orcamentarias') }}">Leis orçamentárias</a></li>
                    </ul>
                </div>
            </div>

            <!-- Prefeitura Eletrônica -->
            <div class="col-xl-3 col-lg-4 col-md-6 card-item">
                <a class="btn btn-outline-success border-0 shadow rounded-4 w-100 text-wrap d-flex align-items-center justify-content-start p-3" href="https://www.spe.angra.rj.gov.br/Capa.aspx" target="_blank">
                    <div class="bg-success bg-opacity-10 p-3 rounded-3 me-3">
                        <i class="fs-1 fas fa-laptop-house text-white fa-lg"></i>
                    </div>
                    <span class="text-start">
                        <strong>Prefeitura Eletrônica</strong>
                        <small class="d-block text-muted">Iptu, NFS-e, Iss e outros</small>
                    </span>
                </a>
            </div>

            <!-- Dívida Ativa -->
            <div class="col-xl-3 col-lg-4 col-md-6 card-item">
                <a class="btn btn-outline-success border-0 shadow rounded-4 w-100 text-wrap d-flex align-items-center justify-content-start p-3" href="https://portal.angra.rj.gov.br/transp-divida-ativa.asp?IndexSigla=transp">
                    <div class="bg-success bg-opacity-10 p-3 rounded-3 me-3">
                        <i class="fs-1 fas fa-file-invoice text-white fa-lg"></i>
                    </div>
                    <span class="text-start">
                        <strong>Dívida Ativa</strong>
                    </span>
                </a>
            </div>

            <!-- Andamento de Obras -->
            <div class="col-xl-3 col-lg-4 col-md-6 card-item">
                <a class="btn btn-outline-success border-0 shadow rounded-4 w-100 text-wrap d-flex align-items-center justify-content-start p-3" href="https://obras.angra.rj.gov.br/">
                    <div class="bg-success bg-opacity-10 p-3 rounded-3 me-3">
                        <i class="fs-1 fas fa-hard-hat text-white fa-lg"></i>
                    </div>
                    <span class="text-start">
                        <strong>Andamento de Obras</strong>
                    </span>
                </a>
            </div>

            <div class="col-12 sectionTitle pt-5">
                <h1 class="text-soft">Informações Institucionais</h1>
            </div>

            <!-- Estrutura Organizacional -->
            <div class="col-xl-3 col-lg-4 col-md-6 card-item">
                <div class="dropdown">
                    <button class="btn btn-outline-success border-0 shadow rounded-4 w-100 text-wrap d-flex align-items-center justify-content-start p-3 dropdown-toggle btn-hover-item" type="button" data-bs-toggle="dropdown">
                        <div class="bg-success bg-opacity-10 p-3 rounded-3 me-3">
                            <i class="fas fs-1 fa-sitemap text-white fa-lg icon-hover"></i>
                        </div>
                        <span class="text-start">
                            <strong>Estrutura Organizacional</strong>
                        </span>
                    </button>
                    <ul class="dropdown-menu text-wrap shadow-sm">
                        <li><a class="dropdown-item" href="{{ route('pages.estrutura-organizacional') }}">Informações das Secretarias</a></li>
                        <li><a class="dropdown-item" href="https://www.canva.com/design/DAFnNE4WjuY/tCXJal3yhq8ZwVj-qggO6w/view?website#2:prefeito" target="_blank">Organograma</a></li>
                        <li><a class="dropdown-item" href="https://portal.angra.rj.gov.br/downloads/Nova_Lista_Telefonica.pdf" target="_blank">Lista Telefônica</a></li>
                    </ul>
                </div>
            </div>

            <!-- Ouvidoria -->
            <div class="col-xl-3 col-lg-4 col-md-6 card-item">
                <a class="btn btn-outline-success border-0 shadow rounded-4 w-100 text-wrap d-flex align-items-center justify-content-start p-3 btn-hover-item" href="{{ route('pages.ouvidoria') }}">
                    <div class="bg-success bg-opacity-10 p-3 rounded-3 me-3">
                        <i class="fas fs-1 fa-headset text-white fa-lg icon-hover"></i>
                    </div>
                    <span class="text-start">
                        <strong>Ouvidoria</strong>
                    </span>
                </a>
            </div>

            <!-- e-SIC -->
            <div class="col-xl-3 col-lg-4 col-md-6 card-item">
                <a class="btn btn-outline-success border-0 shadow rounded-4 w-100 text-wrap d-flex align-items-center justify-content-start p-3 btn-hover-item" href="{{ route('pages.ouvidoria') }}">
                    <div class="bg-success bg-opacity-10 p-3 rounded-3 me-3">
                        <i class="fas fs-1 fa-envelope-open-text text-white fa-lg icon-hover"></i>
                    </div>
                    <span class="text-start">
                        <strong>e-SIC</strong>
                    </span>
                </a>
            </div>

            <!-- Saúde -->
            <div class="col-xl-3 col-lg-4 col-md-6 card-item">
                <div class="dropdown">
                    <button class="btn btn-outline-success border-0 shadow rounded-4 w-100 text-wrap d-flex align-items-center justify-content-start p-3 dropdown-toggle btn-hover-item" type="button" data-bs-toggle="dropdown">
                        <div class="bg-success bg-opacity-10 p-3 rounded-3 me-3">
                            <i class="fas fs-1 fa-heartbeat text-white fa-lg icon-hover"></i>
                        </div>
                        <span class="text-start">
                            <strong>Saúde</strong>
                        </span>
                    </button>
                    <ul class="dropdown-menu text-wrap shadow-sm">
                        <li><a class="dropdown-item" href="https://angra.rj.gov.br/servicos/plano-municipal-de-saude-2022-2025" target="_blank">Plano Municipal de Saúde 2022 - 2025</a></li>
                        <li><a class="dropdown-item" href="{{ route('pages.estoques-de-medicamentos') }}">Relatórios de Estoque de Medicamentos</a></li>
                        <li><a class="dropdown-item" href="https://angra.rj.gov.br/servicos/instrumentos-de-planejamento-rag-pas-e-rdqa" target="_blank">Relatórios de Gestão</a></li>
                        <li><a class="dropdown-item" href="https://portal.angra.rj.gov.br/downloads/SSA/REMUME-ATUALIZADA-2025.pdf" target="_blank">Relação de Medicamentos Essenciais</a></li>
                        <li><a class="dropdown-item" href="{{ route('pages.unidades-de-saude') }}" target="_blank">Unidades de Saúde</a></li>
                    </ul>
                </div>
            </div>

            <!-- Educação -->
            <div class="col-xl-3 col-lg-4 col-md-6 card-item">
                <div class="dropdown">
                    <button class="btn btn-outline-success border-0 shadow rounded-4 w-100 text-wrap d-flex align-items-center justify-content-start p-3 dropdown-toggle btn-hover-item" type="button" data-bs-toggle="dropdown">
                        <div class="bg-success bg-opacity-10 p-3 rounded-3 me-3">
                            <i class="fas fs-1 fa-graduation-cap text-white fa-lg icon-hover"></i>
                        </div>
                        <span class="text-start">
                            <strong>Educação</strong>
                        </span>
                    </button>
                    <ul class="dropdown-menu text-wrap shadow-sm">
                        <li><a class="dropdown-item" href="https://angra.rj.gov.br/servicos/plano-municipal-de-educacao-pme-consulta-publica">Plano Municipal de Educação 2015 - 2025</a></li>
                        <li><a class="dropdown-item" href="https://matriculadigital.angra.rj.gov.br/#/" target="_blank">Matrícula Digital</a></li>
                    </ul>
                </div>
            </div>

            <!-- Esporte -->
            <div class="col-xl-3 col-lg-4 col-md-6 card-item">
                <div class="dropdown">
                    <button class="btn btn-outline-success border-0 shadow rounded-4 w-100 text-wrap d-flex align-items-center justify-content-start p-3 dropdown-toggle btn-hover-item" type="button" data-bs-toggle="dropdown">
                        <div class="bg-success bg-opacity-10 p-3 rounded-3 me-3">
                            <i class="fas fs-1 fa-running text-white fa-lg icon-hover"></i>
                        </div>
                        <span class="text-start">
                            <strong>Esporte</strong>
                        </span>
                    </button>
                    <ul class="dropdown-menu text-wrap shadow-sm">
                        <li><a class="dropdown-item" href="https://angra.rj.gov.br/servicos/projetos-aprovados-pela-comissao-de-incentivo-ao-esporte">Projetos aprovados</a></li>
                    </ul>
                </div>
            </div>

            <!-- Cultura -->
            <div class="col-xl-3 col-lg-4 col-md-6 card-item">
                <div class="dropdown">
                    <button class="btn btn-outline-success border-0 shadow rounded-4 w-100 text-wrap d-flex align-items-center justify-content-start p-3 dropdown-toggle btn-hover-item" type="button" data-bs-toggle="dropdown">
                        <div class="bg-success bg-opacity-10 p-3 rounded-3 me-3">
                            <i class="fas fs-1 fa-paint-brush text-white fa-lg icon-hover"></i>
                        </div>
                        <span class="text-start">
                            <strong>Cultura</strong>
                        </span>
                    </button>
                    <ul class="dropdown-menu text-wrap shadow-sm">
                        <li><a class="dropdown-item" href="{{ route('pages.oficinas-e-exposicoes-culturais') }}">Oficinas e exposições</a></li>
                        <li><a class="dropdown-item" href="https://portal.angra.rj.gov.br/noticia.asp?IndexSigla=SCP&vid_noticia=54876" target="_blank">Lei de Incentivo à Cultura</a></li>
                        <li><a class="dropdown-item" href="https://angra.rj.gov.br/servicos/fundo-municipal-de-cultura-2023" target="_blank">Fundo Municipal de Cultura</a></li>
                    </ul>
                </div>
            </div>

            <!-- Conselhos Municipais -->
            <div class="col-xl-3 col-lg-4 col-md-6 card-item">
                <div class="dropdown">
                    <button class="btn btn-outline-success border-0 shadow rounded-4 w-100 text-wrap d-flex align-items-center justify-content-start p-3 dropdown-toggle btn-hover-item" type="button" data-bs-toggle="dropdown">
                        <div class="bg-success bg-opacity-10 p-3 rounded-3 me-3">
                            <i class="fas fs-1 fa-users-cog text-white fa-lg icon-hover"></i>
                        </div>
                        <span class="text-start">
                            <strong>Conselhos Municipais</strong>
                        </span>
                    </button>
                    <ul class="dropdown-menu text-wrap shadow-sm">
                        <li><a class="dropdown-item" href="https://portal.angra.rj.gov.br/transp-conselhos.asp?IndexSigla=transp">Conselhos</a></li>
                        <li><a class="dropdown-item" href="{{ route('pages.pareceres-fundeb') }}">Parecer FUNDEB</a></li>
                        <li><a class="dropdown-item" href="{{ route('pages.parecer-rag-saude') }}">Parecer RAG Saúde</a></li>
                    </ul>
                </div>
            </div>

            <!-- Metas e Projetos -->
            <div class="col-xl-3 col-lg-4 col-md-6 card-item">
                <a class="btn btn-outline-success border-0 shadow rounded-4 w-100 text-wrap d-flex align-items-center justify-content-start p-3 btn-hover-item" href="https://angra.prodataweb.inf.br/sig/app.html#/transparencia/transparencia-acompanhamento-ppa" target="_blank">
                    <div class="bg-success bg-opacity-10 p-3 rounded-3 me-3">
                        <i class="fas fs-1 fa-chart-line text-white fa-lg icon-hover"></i>
                    </div>
                    <span class="text-start">
                        <strong>Metas e Projetos</strong>
                    </span>
                </a>
            </div>

            <!-- Perguntas Frequentes -->
            <div class="col-xl-3 col-lg-4 col-md-6 card-item">
                <a class="btn btn-outline-success border-0 shadow rounded-4 w-100 text-wrap d-flex align-items-center justify-content-start p-3 btn-hover-item" href="{{ route('ouvidoria.perguntas-frequentes') }}">
                    <div class="bg-success bg-opacity-10 p-3 rounded-3 me-3">
                        <i class="fas fs-1 fa-question-circle text-white fa-lg icon-hover"></i>
                    </div>
                    <span class="text-start">
                        <strong>Perguntas Frequentes</strong>
                    </span>
                </a>
            </div>

            <div class="col-12 sectionTitle pt-5">
                <h1 class="text-soft">Informações Administrativas</h1>
            </div>

            <!-- Licitações -->
            <div class="col-xl-3 col-lg-4 col-md-6 card-item">
                <div class="dropdown">
                    <button class="btn btn-outline-success border-0 shadow rounded-4 w-100 text-wrap d-flex align-items-center justify-content-start p-3 dropdown-toggle btn-hover-item" type="button" data-bs-toggle="dropdown">
                        <div class="bg-success bg-opacity-10 p-3 rounded-3 me-3">
                            <i class="fas fs-1 fa-gavel text-white fa-lg icon-hover"></i>
                        </div>
                        <span class="text-start">
                            <strong>Licitações</strong>
                        </span>
                    </button>
                    <ul class="dropdown-menu text-wrap shadow-sm">
                        <li><a class="dropdown-item" href="https://portal.angra.rj.gov.br/licitacoes-procedimentos.asp?indexsigla=transp&instituicao=0&status=0&modalidade=0&ano=2025" target="_blank">Licitações e Procedimentos</a></li>
                        <li><a class="dropdown-item" href="https://portal.angra.rj.gov.br/licitacoes_atas.asp?IndexSigla=seges" target="_blank">Atas de Registro de Preço</a></li>
                        <li><a class="dropdown-item" href="{{ route('pages.plano-de-contratacao-anual') }}">Plano de Contratação Anual</a></li>
                    </ul>
                </div>
            </div>

            <!-- Contratos -->
            <div class="col-xl-3 col-lg-4 col-md-6 card-item">
                <a class="btn btn-outline-success border-0 shadow rounded-4 w-100 text-wrap d-flex align-items-center justify-content-start p-3 btn-hover-item" href="https://portal.angra.rj.gov.br/contratos.asp?indexsigla=seges&QN=&QS=0&QF=&QO=&QC=&QA=2023&QT=0&QV=" target="_blank">
                    <div class="bg-success bg-opacity-10 p-3 rounded-3 me-3">
                        <i class="fas fs-1 fa-file-contract text-white fa-lg icon-hover"></i>
                    </div>
                    <span class="text-start">
                        <strong>Contratos</strong>
                    </span>
                </a>
            </div>

            <!-- Legislação Municipal -->
            <div class="col-xl-3 col-lg-4 col-md-6 card-item">
                <a class="btn btn-outline-success border-0 shadow rounded-4 w-100 text-wrap d-flex align-items-center justify-content-start p-3 btn-hover-item" href="https://portal.angra.rj.gov.br/legislacao.asp?indexsigla=sgri" target="_blank">
                    <div class="bg-success bg-opacity-10 p-3 rounded-3 me-3">
                        <i class="fas fs-1 fa-balance-scale text-white fa-lg icon-hover"></i>
                    </div>
                    <span class="text-start">
                        <strong>Legislação Municipal</strong>
                    </span>
                </a>
            </div>

            <!-- LGPD -->
            <div class="col-xl-3 col-lg-4 col-md-6 card-item">
                <div class="dropdown">
                    <button class="btn btn-outline-success border-0 shadow rounded-4 w-100 text-wrap d-flex align-items-center justify-content-start p-3 dropdown-toggle btn-hover-item" type="button" data-bs-toggle="dropdown">
                        <div class="bg-success bg-opacity-10 p-3 rounded-3 me-3">
                            <i class="fas fs-1 fa-shield-alt text-white fa-lg icon-hover"></i>
                        </div>
                        <span class="text-start">
                            <strong>LGPD</strong><br>
                            <small>Lei Geral de Proteção de Dados</small>
                        </span>
                    </button>
                    <ul class="dropdown-menu text-wrap shadow-sm">
                        <li><a class="dropdown-item" href="{{ route('pages.lgpd') }}">LGPD - Lei Geral de Proteção de Dados</a></li>
                        <li><a class="dropdown-item" href="https://angra.rj.gov.br/servicos/dados-abertos">Dados abertos</a></li>
                    </ul>
                </div>
            </div>

            <!-- Governo Digital -->
            <div class="col-xl-3 col-lg-4 col-md-6 card-item">
                <a class="btn btn-outline-success border-0 shadow rounded-4 w-100 text-wrap d-flex align-items-center justify-content-start p-3 btn-hover-item" href="https://angra.rj.gov.br/servicos/governo-digital">
                    <div class="bg-success bg-opacity-10 p-3 rounded-3 me-3">
                        <i class="fas fs-1 fa-laptop text-white fa-lg icon-hover"></i>
                    </div>
                    <span class="text-start">
                        <strong>Governo Digital</strong>
                    </span>
                </a>
            </div>

            <!-- Radar da transparência -->
            <div class="col-xl-3 col-lg-4 col-md-6 card-item">
                <a class="btn btn-outline-success border-0 shadow rounded-4 w-100 text-wrap d-flex align-items-center justify-content-start p-3 btn-hover-item" href="https://radar.tce.mt.gov.br/extensions/radar-da-transparencia-publica/radar-da-transparencia-publica.html" target="_blank">
                    <div class="bg-success bg-opacity-10 p-3 rounded-3 me-3">
                        <i class="fa-solid fs-1 fa-magnifying-glass text-white fa-lg icon-hover"></i>
                    </div>
                    <span class="text-start">
                        <strong>Radar da transparência</strong>
                    </span>
                </a>
            </div>

            <div class="col-12 sectionTitle pt-5">
                <h1 class="text-soft">Informações de Recursos Humanos</h1>
            </div>

            <!-- Remuneração de Servidores -->
            <div class="col-xl-3 col-lg-4 col-md-6 card-item">
                <div class="dropdown">
                    <button class="btn btn-outline-success border-0 shadow rounded-4 w-100 text-wrap d-flex align-items-center justify-content-start p-3 dropdown-toggle btn-hover-item" type="button" data-bs-toggle="dropdown">
                        <div class="bg-success bg-opacity-10 p-3 rounded-3 me-3">
                            <i class="fas fs-1 fa-money-check-alt text-white fa-lg icon-hover"></i>
                        </div>
                        <span class="text-start">
                            <strong>Remuneração de Servidores</strong>
                        </span>
                    </button>
                    <ul class="dropdown-menu text-wrap shadow-sm">
                        <li><a class="dropdown-item" href="https://angra.prodataweb.inf.br/sig/app.html#/transparencia/transparencia-folha-pagamento/" target="_blank">Remunerações</a></li>
                        <li><a class="dropdown-item" href="https://portaldoservidor.angra.rj.gov.br/tabela-salarial.asp?indexsigla=transp" target="_blank">Tabela Salarial</a></li>
                        <li><a class="dropdown-item" href="https://portaldoservidor.angra.rj.gov.br/tabela-salarial.asp?indexsigla=transp" target="_blank">Teto Salarial</a></li>
                    </ul>
                </div>
            </div>

            <!-- Diárias e Passagens -->
            <div class="col-xl-3 col-lg-4 col-md-6 card-item">
                <div class="dropdown">
                    <button class="btn btn-outline-success border-0 shadow rounded-4 w-100 text-wrap d-flex align-items-center justify-content-start p-3 dropdown-toggle btn-hover-item" type="button" data-bs-toggle="dropdown">
                        <div class="bg-success bg-opacity-10 p-3 rounded-3 me-3">
                            <i class="fas fs-1 fa-plane text-white fa-lg icon-hover"></i>
                        </div>
                        <span class="text-start">
                            <strong>Diárias e Passagens</strong>
                        </span>
                    </button>
                    <ul class="dropdown-menu text-wrap shadow-sm">
                        <li><a class="dropdown-item" href="https://angra.prodataweb.inf.br/sig/app.html#/transparencia/transparencia-diaria-passagem/" target="_blank">Despesas com diárias e passagens</a></li>
                        <li><a class="dropdown-item" href="{{ route('pages.tabela-de-valores-de-diarias') }}" target="_blank">Tabela de valores das diárias</a></li>
                    </ul>
                </div>
            </div>

            <!-- Concursos Públicos -->
            <div class="col-xl-3 col-lg-4 col-md-6 card-item">
                <a class="btn btn-outline-success border-0 shadow rounded-4 w-100 text-wrap d-flex align-items-center justify-content-start p-3 btn-hover-item" href="{{ route('pages.concursos') }}">
                    <div class="bg-success bg-opacity-10 p-3 rounded-3 me-3">
                        <i class="fas fs-1 fa-graduation-cap text-white fa-lg icon-hover"></i>
                    </div>
                    <span class="text-start">
                        <strong>Concursos Públicos</strong>
                    </span>
                </a>
            </div>

            <div class="col-12 sectionTitle pt-5">
                <h1 class="text-soft">Portal de Dados Abertos</h1>
            </div>

            <!-- Dados Abertos -->
            <div class="col-xl-3 col-lg-4 col-md-6 card-item">
                <a class="btn btn-outline-success border-0 shadow rounded-4 w-100 text-wrap d-flex align-items-center justify-content-start p-3 btn-hover-item" href="https://angra.rj.gov.br/servicos/dados-abertos">
                    <div class="bg-success bg-opacity-10 p-3 rounded-3 me-3">
                        <i class="fas fs-1 fa-database text-white fa-lg icon-hover"></i>
                    </div>
                    <span class="text-start">
                        <strong>Dados Abertos</strong>
                    </span>
                </a>
            </div>

        </div>
    </div>

    @endsection