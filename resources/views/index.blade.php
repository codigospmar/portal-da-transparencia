@extends('theme')
@section("title", "Portal da Transparência - Angra dos Reis :: Página inicial")
@section('content')

<body class="bg-light">

    @include("elements.search")
    @include("elements.info")

    <div class="container my-5">
        <div class="row g-4">

            @include('components._sectionTitle', ["text" => "Informações Orçamentárias e Financeiras"])

            <!-- Receitas -->
            @include('components._cardDropDown', [
                "id" => "receitas",
                "dropdownId" => "receitasId",
                "fontawesome" => "<i class='fs-1 fas fa-money-bill-wave text-white fa-lg'></i>",
                "title" => "Receitas",
                "dropdown" => [
                    [
                        "link" => "https://angra.prodataweb.inf.br/sig/app.html#/transparencia/comparativo-receita-prevista-com-arrecadada/",
                        "target" => "_blank",
                        "title" => "Receita Prevista e Arrecadada",
                    ],
                    [
                        "link" => route('pages.renuncias-de-receitas'),
                        "target" => "_self",
                        "title" => "Renúncias de Receitas",
                    ],
                    [
                        "link" => route('pages.beneficiarios-desoneracoes-tributarias'),
                        "target" => "_self",
                        "title" => "Beneficiários das Desonerações Tributárias",
                    ],
                    [
                        "link" => route('pages.incentivos-culturais'),
                        "target" => "_self",
                        "title" => "Incentivos Culturais",
                    ],
                ],
            ])
            
            <!-- Despesas -->
            @include('components._cardDropDown', [
                "id" => "despesas",
                "dropdownId" => "despesasId",
                "fontawesome" => "<i class='fs-1 fas fa-file-invoice-dollar text-white fa-lg'></i>",
                "title" => "Despesas",
                "dropdown" => [
                    [
                        "link" => route('pages.qdd'),
                        "target" => "_self",
                        "title" => "QDD - Quadro de Detalhamento das Despesas",
                    ],
                    [
                        "link" => "https://angra.prodataweb.inf.br/sig/app.html#/transparencia/transparencia-despesa-simplificado/",
                        "target" => "_blank",
                        "title" => "Despesa Empenhada, Liquidada e Paga",
                    ],
                    [
                        "link" => "https://angra.prodataweb.inf.br/sig/app.html#/transparencia/transparencia-liquidacoes-a-pagar/",
                        "target" => "_blank",
                        "title" => "Ordem Cronológica de Pagamento",
                    ],
                ],
            ])

            <!-- Convênios -->
            @include('components._cardDropDown', [
                "id" => "convenios",
                "dropdownId" => "conveniosId",
                "fontawesome" => "<i class='fs-1 fas fa-handshake text-white fa-lg'></i>",
                "title" => "Convênios",
                "dropdown" => [
                    [
                        "link" => "https://angra.prodataweb.inf.br/sig/app.html#/transparencia/transparencia-convenio-concedido-recebido/",
                        "target" => "_blank",
                        "title" => "Convênios",
                    ],
                    [
                        "link" => "https://portaldatransparencia.gov.br/convenios/consulta?paginacaoSimples=true&tamanhoPagina=&offset=&direcaoOrdenacao=asc&nomeMunicipio=ANGRA+DOS+REIS&colunasSelecionadas=linkDetalhamento%2CnumeroConvenio%2Cuf%2CmunicipioConvenente%2Csituacao%2CtipoTransferencia%2Cobjetivo%2CorgaoSuperior%2Corgao%2Cconcedente%2Cconvenente%2CdataInicioVigencia%2CdataFimVigencia%2CdataPublicacao%2CvalorLiberado%2CvalorCelebrado/",
                        "target" => "_blank",
                        "title" => "Convênios da União",
                    ],
                ],
            ])

            <!-- Emendas -->
            @include('components._cardDropDown', [
                "id" => "emendas",
                "dropdownId" => "emendasId",
                "fontawesome" => "<i class='fs-1 fas fa-file-contract text-white fa-lg'></i>",
                "title" => "Emendas",
                "dropdown" => [
                    [
                        "link" => route('pages.emendas-impositivas'),
                        "target" => "_self",
                        "title" => "Emendas Impositivas",
                    ],
                    [
                        "link" => route('pages.emendas-parlamentares'),
                        "target" => "_self",
                        "title" => "Emendas Parlamentares",
                    ],
                ],
            ])
            
            <!-- Balanços Contábeis -->
            @include('components._cardSingle', [
                "id" => "balancos",
                "link" => route('pages.balancos-contabeis'),
                "target" => "_self",
                "fontawesome" => "<i class='fs-1 fas fa-balance-scale text-white fa-lg'></i>",
                "title" => "Balanços Contábeis",
            ])

            <!-- Leis Orçamentárias -->
            @include('components._cardDropDown', [
                "id" => "leisOrcamentarias",
                "dropdownId" => "leisOrcamentariasId",
                "fontawesome" => "<i class='fs-1 fas fa-gavel text-white fa-lg'></i>",
                "title" => "Leis Orçamentárias",
                "dropdown" => [
                    [
                        "link" => route('pages.ppa'),
                        "target" => "_self",
                        "title" => "PPA - Plano Plurianual",
                    ],
                    [
                        "link" => route('pages.ldo'),
                        "target" => "_self",
                        "title" => "LDO - Lei de Diretrizes Orçamentárias",
                    ],
                    [
                        "link" => route('pages.loa'),
                        "target" => "_self",
                        "title" => "LOA - Lei Orçamentária Anual",
                    ],
                ],
            ])

            <!-- RREO e RGF --> 
            @include('components._cardSingle', [
                "id" => "RREORGF",
                "link" => route('pages.responsabilidade-fiscal'),
                "target" => "_self",
                "fontawesome" => "<i class='fs-1 fas fa-file-alt text-white fa-lg'></i>",
                "title" => "RREO e RGF",
                "small" => "Lei de Responsabilidade Fiscal",
            ])

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
                <a class="btn btn-outline-success border-0 shadow rounded-4 w-100 text-wrap d-flex align-items-center justify-content-start p-3" href="{{ route("pages.divida-ativa") }}">
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
                <a class="btn btn-outline-success border-0 shadow rounded-4 w-100 text-wrap d-flex align-items-center justify-content-start p-3 btn-hover-item" href="{{ route('pages.ouvidoria-perguntas-frequentes') }}">
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