@extends('theme')
@section("title", "Portal da Transparência - Angra dos Reis :: Página inicial")
@section('content')

<body class="bg-light">

    @include("elements.search")
    @include("elements.info")

    <div class="container my-5">
        <div class="row g-4">

            @include('components._sectionTitle', ["text" => "Informações Orçamentárias e Financeiras"])

            <div class="my-3"></div>
            
            <!-- Receitas -->
            @include('components._cardDropDown', [
                "id" => "receitas",
                "dropdownId" => "receitasId",
                "fontawesome" => "<i class=' fas fa-money-bill-wave text-white fa-3x'></i>",
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
                "fontawesome" => "<i class=' fas fa-file-invoice-dollar text-white fa-3x'></i>",
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
                "fontawesome" => "<i class=' fas fa-handshake text-white fa-3x'></i>",
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
                "fontawesome" => "<i class=' fas fa-file-contract text-white fa-3x'></i>",
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
                "fontawesome" => "<i class=' fas fa-balance-scale text-white fa-3x'></i>",
                "title" => "Balanços Contábeis",
            ])

            <!-- Leis Orçamentárias -->
            @include('components._cardDropDown', [
                "id" => "leisOrcamentarias",
                "dropdownId" => "leisOrcamentariasId",
                "fontawesome" => "<i class=' fas fa-gavel text-white fa-3x'></i>",
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
                "link" => route('pages.rreo'),
                "target" => "_self",
                "fontawesome" => "<i class=' fas fa-file-alt text-white fa-3x'></i>",
                "title" => "RREO e RGF",
                "small" => "Lei de Responsabilidade Fiscal",
            ])

            <!-- Prestação de Contas -->
            @include('components._cardDropDown', [
                "id" => "prestacaoDeContas",
                "dropdownId" => "prestacaoDeContasId",
                "fontawesome" => "<i class=' fas fa-clipboard-check text-white fa-3x'></i>",
                "title" => "Prestação de Contas",
                "dropdown" => [
                    [
                        "link" => route('pages.parecer-previo-tcerj'),
                        "target" => "_self",
                        "title" => "Parecer Prévio TCE-RJ",
                    ],
                    [
                        "link" => route('pages.julgamento-contas'),
                        "target" => "_self",
                        "title" => "Julgamento das contas do Executivo pelo Legislativo",
                    ],
                ],
            ])

            <!-- Audiências Públicas -->
            @include('components._cardDropDown', [
                "id" => "audienciasPublicas",
                "dropdownId" => "audienciasPublicasId",
                "fontawesome" => "<i class=' fas fa-users text-white fa-3x'></i>",
                "title" => "Audiências Públicas",
                "dropdown" => [
                    [
                        "link" => route('pages.atas'),
                        "target" => "_self",
                        "title" => "Atas",
                    ],
                    [
                        "link" => route('pages.metas-fiscais'),
                        "target" => "_self",
                        "title" => "Metas Fiscals",
                    ],
                    [
                        "link" => route('pages.leis-orcamentarias'),
                        "target" => "_self",
                        "title" => "Leis orçamentárias",
                    ],
                ],
            ])

            <!-- Prefeitura Eletrônica -->
            @include('components._cardSingle', [
                "id" => "prefeituraEletronica",
                "link" => "https://www.spe.angra.rj.gov.br/Capa.aspx",
                "target" => "_blank",
                "fontawesome" => "<i class=' fas fa-laptop-house text-white fa-3x'></i>",
                "title" => "Prefeitura Eletrônica",
                "small" => "Iptu, NFS-e, Iss e outros",
            ])

            <!-- Dívida Ativa -->
            @include('components._cardSingle', [
                "id" => "dividaAtiva",
//                "link" => "https://portal.angra.rj.gov.br/transp-divida-ativa.asp?IndexSigla=transp",
                "link" => route("pages.divida-ativa"),
//                "target" => "_blank",
                "target" => "_self",
                "fontawesome" => "<i class='fs-1 fas fa-file-invoice text-white fa-lg'></i>",
                "title" => "Dívida Ativa",
            ])

            <!-- Andamento de Obras -->
            @include('components._cardSingle', [
                "id" => "andamentoDeObras",
                "link" => "https://obras.angra.rj.gov.br/",
                "target" => "_blank",
                "fontawesome" => "<i class=' fas fa-hard-hat text-white fa-3x'></i>",
                "title" => "Andamento de Obras",
            ])

            <div class="my-3"></div>
            
            @include('components._sectionTitle', ["text" => "Informações Institucionais"])
            
            <div class="my-3"></div>

            <!-- Estrutura Organizacional -->
            @include('components._cardDropDown', [
                "id" => "estruturaOrganizacional",
                "dropdownId" => "estruturaOrganizacionalId",
                "fontawesome" => "<i class='fas  fa-sitemap text-white fa-3x icon-hover'></i>",
                "title" => "Estrutura Organizacional",
                "dropdown" => [
                    [
                        "link" => route('pages.estrutura-organizacional'),
                        "target" => "_self",
                        "title" => "Informações das Secretarias",
                    ],
                    [
                        "link" => "https://www.canva.com/design/DAFnNE4WjuY/tCXJal3yhq8ZwVj-qggO6w/view?website#2:prefeito",
                        "target" => "_blank",
                        "title" => "Organograma",
                    ],
                    [
                        "link" => "https://portal.angra.rj.gov.br/downloads/Nova_Lista_Telefonica.pdf",
                        "target" => "_blank",
                        "title" => "Lista Telefônica",
                    ],
                ],
            ])

            <!-- Ouvidoria -->
            @include('components._cardSingle', [
                "id" => "ouvidoria",
                "link" => route('pages.ouvidoria'),
                "target" => "_self",
                "fontawesome" => "<i class='fas  fa-headset text-white fa-3x icon-hover'></i>",
                "title" => "Ouvidoria",
            ])

            <!-- e-SIC -->
            @include('components._cardSingle', [
                "id" => "eSIC",
                "link" => "https://falabr.cgu.gov.br/web/home?modoOuvidoria=1&ouvidoriaInterna=false",
                "target" => "_blank",
                "fontawesome" => "<i class='fas  fa-envelope-open-text text-white fa-3x icon-hover'></i>",
                "title" => "e-SIC",
            ])

            <!-- Saúde -->
            @include('components._cardDropDown', [
                "id" => "saude",
                "dropdownId" => "saudeId",
                "fontawesome" => "<i class='fas  fa-heartbeat text-white fa-3x icon-hover'></i>",
                "title" => "Saúde",
                "dropdown" => [
                    [
                        "link" => "https://angra.rj.gov.br/servicos/plano-municipal-de-saude-2022-2025",
                        "target" => "_blank",
                        "title" => "Plano Municipal de Saúde 2022 - 2025",
                    ],
                    [
                        "link" => route('pages.estoques-de-medicamentos'),
                        "target" => "_self",
                        "title" => "Relatórios de Estoque de Medicamentos",
                    ],
                    [
                        "link" => "https://angra.rj.gov.br/servicos/instrumentos-de-planejamento-rag-pas-e-rdqa",
                        "target" => "_blank",
                        "title" => "Relatórios de Gestão",
                    ],
                    [
                        "link" => "https://portal.angra.rj.gov.br/downloads/SSA/REMUME-ATUALIZADA-2025.pdf",
                        "target" => "_blank",
                        "title" => "Relação de Medicamentos Essenciais",
                    ],
                    [
                        "link" => route('pages.unidades-de-saude'),
                        "target" => "_self",
                        "title" => "Unidades de Saúde",
                    ],
                ],
            ])

            <!-- Educação -->
            @include('components._cardDropDown', [
                "id" => "educacao",
                "dropdownId" => "educacaoId",
                "fontawesome" => "<i class='fas  fa-graduation-cap text-white fa-3x icon-hover'></i>",
                "title" => "Educação",
                "dropdown" => [
                    [
                        "link" => "https://angra.rj.gov.br/servicos/plano-municipal-de-educacao-pme-consulta-publica",
                        "target" => "_blank",
                        "title" => "Plano Municipal de Educação 2015 - 2025",
                    ],
                    [
                        "link" => "https://matriculadigital.angra.rj.gov.br/#/",
                        "target" => "_blank",
                        "title" => "Matrícula Digital",
                    ],
                ],
            ])

            <!-- Esporte -->            
            @include('components._cardSingle', [
                "id" => "esporte",
                "link" => "https://angra.rj.gov.br/servicos/projetos-aprovados-pela-comissao-de-incentivo-ao-esporte",
                "target" => "_blank",
                "fontawesome" => "<i class='fas  fa-running text-white fa-3x icon-hover'></i>",
                "title" => "Esporte",
                "small" => "Projetos aprovados",
            ])

            <!-- Cultura -->
            @include('components._cardDropDown', [
                "id" => "cultura",
                "dropdownId" => "culturaId",
                "fontawesome" => "<i class='fas  fa-paint-brush text-white fa-3x icon-hover'></i>",
                "title" => "Cultura",
                "dropdown" => [
                    [
                        "link" => route('pages.oficinas-e-exposicoes-culturais'),
                        "target" => "_self",
                        "title" => "Oficinas e exposições",
                    ],
                    [
                        "link" => "https://portal.angra.rj.gov.br/noticia.asp?IndexSigla=SCP&vid_noticia=54876",
                        "target" => "_blank",
                        "title" => "Lei de Incentivo à Cultura",
                    ],
                    [
                        "link" => "https://angra.rj.gov.br/servicos/fundo-municipal-de-cultura-2023",
                        "target" => "_blank",
                        "title" => "Fundo Municipal de Cultura",
                    ],
                ],
            ])

            <!-- Conselhos Municipais -->
            @include('components._cardDropDown', [
                "id" => "conselhosMunicipais",
                "dropdownId" => "conselhosMunicipaisId",
                "fontawesome" => "<i class='fas  fa-users-cog text-white fa-3x icon-hover'></i>",
                "title" => "Conselhos Municipais",
                "dropdown" => [
                    [
                        "link" => "https://portal.angra.rj.gov.br/transp-conselhos.asp?IndexSigla=transp",
                        "target" => "_blank",
                        "title" => "Conselhos",
                    ],
                    [
                        "link" => route('pages.pareceres-fundeb'),
                        "target" => "_self",
                        "title" => "Parecer FUNDEB",
                    ],
                    [
                        "link" => route('pages.parecer-rag-saude'),
                        "target" => "_self",
                        "title" => "Parecer RAG Saúde",
                    ],
                ],
            ])

            <!-- Metas e Projetos -->
            @include('components._cardSingle', [
                "id" => "metasProjetos",
                "link" => "https://angra.prodataweb.inf.br/sig/app.html#/transparencia/transparencia-acompanhamento-ppa",
                "target" => "_blank",
                "fontawesome" => "<i class='fas  fa-chart-line text-white fa-3x icon-hover'></i>",
                "title" => "Metas e Projetos",
            ])

            <!-- Perguntas Frequentes -->
            @include('components._cardSingle', [
                "id" => "perguntasFrequentes",
                "link" => route('pages.ouvidoria-perguntas-frequentes'),
                "target" => "_self",
                "fontawesome" => "<i class='fas  fa-question-circle text-white fa-3x icon-hover'></i>",
                "title" => "Perguntas Frequentes",
            ])
            
            <div class="my-3"></div>
            
            @include('components._sectionTitle', ["text" => "Informações Administrativas"])

            <div class="my-3"></div>

            <!-- Licitações -->
            @include('components._cardDropDown', [
                "id" => "licitacoes",
                "dropdownId" => "licitacoesId",
                "fontawesome" => "<i class='fas  fa-gavel text-white fa-3x icon-hover'></i>",
                "title" => "Licitações",
                "dropdown" => [
                    [
                        "link" => "https://portal.angra.rj.gov.br/licitacoes-procedimentos.asp?indexsigla=transp&instituicao=0&status=0&modalidade=0&ano=2025",
                        "target" => "_blank",
                        "title" => "Licitações e Procedimentos",
                    ],
                    [
                        "link" => "https://portal.angra.rj.gov.br/licitacoes_atas.asp?IndexSigla=seges",
                        "target" => "_blank",
                        "title" => "Atas de Registro de Preço",
                    ],
                    [
                        "link" => route('pages.plano-de-contratacao-anual'),
                        "target" => "_self",
                        "title" => "Plano de Contratação Anual",
                    ],
                ],
            ])

            <!-- Contratos -->
            @include('components._cardSingle', [
                "id" => "contratos",
                "link" => "https://portal.angra.rj.gov.br/contratos.asp?indexsigla=seges&QN=&QS=0&QF=&QO=&QC=&QA=2023&QT=0&QV=",
                "target" => "_blank",
                "fontawesome" => "<i class='fas  fa-file-contract text-white fa-3x icon-hover'></i>",
                "title" => "Contratos",
            ])

            <!-- Legislação Municipal -->
            @include('components._cardSingle', [
                "id" => "legislacaoMunicipal",
                "link" => "https://portal.angra.rj.gov.br/legislacao.asp?indexsigla=sgri",
                "target" => "_blank",
                "fontawesome" => "<i class='fas  fa-balance-scale text-white fa-3x icon-hover'></i>",
                "title" => "Legislação Municipal",
            ])

            <!-- LGPD -->
            @include('components._cardSingle', [
                "id" => "lgpd",
                "link" => route('pages.lgpd'),
                "target" => "_self",
                "fontawesome" => "<i class='fas  fa-shield-alt text-white fa-3x icon-hover'></i>",
                "title" => "LGPD",
                "small" => "Lei Geral de Proteção de Dados",
            ])
            
            <!-- Governo Digital -->
            @include('components._cardSingle', [
                "id" => "governoDigital",
                "link" => "https://angra.rj.gov.br/servicos/governo-digital",
                "target" => "_blank",
                "fontawesome" => "<i class='fas  fa-laptop text-white fa-3x icon-hover'></i>",
                "title" => "Governo Digital",
            ])

            <!-- Radar da transparência -->
            @include('components._cardSingle', [
                "id" => "radarDaTransparencia",
                "link" => "https://radardatransparencia.atricon.org.br/",
                "target" => "_blank",
                "fontawesome" => "<i class='fa-solid  fa-magnifying-glass text-white fa-3x icon-hover'></i>",
                "title" => "Radar da transparência",
            ])
            
            <div class="my-3"></div>
            
            @include('components._sectionTitle', ["text" => "Informações de Recursos Humanos"])

            <div class="my-3"></div>

            <!-- Remuneração de Servidores -->
            @include('components._cardDropDown', [
                "id" => "remuneracaoDeServidores",
                "dropdownId" => "remuneracaoDeServidoresId",
                "fontawesome" => "<i class='fas  fa-money-check-alt text-white fa-3x icon-hover'></i>",
                "title" => "Remuneração de Servidores",
                "dropdown" => [
                    [
                        "link" => "https://angra.prodataweb.inf.br/sig/app.html#/transparencia/transparencia-folha-pagamento/",
                        "target" => "_blank",
                        "title" => "Remunerações",
                    ],
                    [
                        "link" => "https://portaldoservidor.angra.rj.gov.br/tabela-salarial.asp?indexsigla=transp",
                        "target" => "_blank",
                        "title" => "Tabela Salarial",
                    ],
                    [
                        "link" => "https://portaldoservidor.angra.rj.gov.br/tabela-salarial.asp?indexsigla=transp",
                        "target" => "_blank",
                        "title" => "Teto Salarial",
                    ],
                ],
            ])

            <!-- Diárias e Passagens -->
            @include('components._cardDropDown', [
                "id" => "diariasEPassagens",
                "dropdownId" => "diariasEPassagensId",
                "fontawesome" => "<i class='fas  fa-plane text-white fa-3x icon-hover'></i>",
                "title" => "Diárias e Passagens",
                "dropdown" => [
                    [
                        "link" => "https://angra.prodataweb.inf.br/sig/app.html#/transparencia/transparencia-diaria-passagem/",
                        "target" => "_blank",
                        "title" => "Despesas com diárias e passagens",
                    ],
                    [
                        "link" => route('pages.tabela-de-valores-de-diarias'),
                        "target" => "_blank",
                        "title" => "Tabela de valores das diárias",
                    ],
                ],
            ])

            <!-- Concursos Públicos -->
            @include('components._cardSingle', [
                "id" => "concursosPublicos",
                "link" => route('pages.concursos'),
                "target" => "_self",
                "fontawesome" => "<i class='fas  fa-graduation-cap text-white fa-3x icon-hover'></i>",
                "title" => "Concursos Públicos",
            ])
            
            <div class="my-3"></div>
            
            @include('components._sectionTitle', ["text" => "Portal de Dados Abertos"])

            <div class="my-3"></div>
            
            <!-- Dados Abertos -->
            @include('components._cardSingle', [
                "id" => "dadosAbertos",
                "link" => "https://angra.rj.gov.br/servicos/dados-abertos",
                "target" => "_blank",
                "fontawesome" => "<i class='fas  fa-database text-white fa-3x icon-hover'></i>",
                "title" => "Dados Abertos",
            ])

        </div>
    </div>

@endsection