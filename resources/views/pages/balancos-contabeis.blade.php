   @extends('theme')
   @section("title", "Portal da Transparência - Angra dos Reis :: Balanços Contábeis")
@section('content')
    <section>

        <div class="container my-5">

        <!-- Breadcrumb -->
        @php
            $breadcrumbs = [
                [
                    'route' => route('index'),
                    'title' => __("Página Inicial"),
                ],
                [
                    'currentPage' => "page",
                    'title' => __("Balanços Contábeis"),
                ],
            ];
        @endphp

        @include('components._breadcrumb', $breadcrumbs)

        <!-- Título Principal -->
        @include('components._titleMain', [
            "title" => __("Balanços Contábeis"),
            "summary" => __("Nesta seção a Prefeitura Municipal de Angra dos Reis disponibiliza os Balanços Contábeis Consolidados do Município, na forma estabelecida pela Lei Federal nº 4.320/64, evidenciando a situação patrimonial, orçamentária e financeira de todos os órgãos da administração direta e indireta."),
        ])

        <!-- Accordion de Anos -->
            <div class="accordion" id="accordionBalanco">
            <!-- 2024 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button text-soft fs-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2024" aria-expanded="true" aria-controls="collapse2024">
                        2024
                        </button>
                    </h2>
                    <div id="collapse2024" class="accordion-collapse collapse show" data-bs-parent="#accordionBalanco">
                        <div class="accordion-body">
                            <div class="row g-2">
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/balancos/2024/BalancoFinanceiro2024.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                        <span>Balanço Financeiro</span>
                                        <span class="badge bg-softGray text-green">182KB</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/balancos/2024/BalancoOrcamentario2024.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                        <span>Balanço Orçamentário</span>
                                        <span class="badge bg-softGray text-green">388KB</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/balancos/2024/BalancoPatrimonial2024.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                        <span>Balanço Patrimonial</span>
                                        <span class="badge bg-softGray text-green">1.021KB</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/balancos/2024/DemostracaodasVariacoesPatrimoniais2024.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                        <span>Demonstrativo das Variações Patrimoniais</span>
                                        <span class="badge bg-softGray text-green">324KB</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/balancos/2024/DemonstracaodosFluxosdeCaixa2024.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                        <span>Demonstração dos Fluxos de Caixa</span>
                                        <span class="badge bg-softGray text-green">282KB</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/balancos/2024/DemonstrativodaDividaFlutuante2024.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                        <span>Demonstrativo da Dívida Flutuante</span>
                                        <span class="badge bg-softGray text-green">394KB</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/balancos/2024/DemonstrativodaDividaFundada2024.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                        <span>Demonstrativo da Dívida Fundada</span>
                                        <span class="badge bg-softGray text-green">197KB</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <!-- 2023 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button text-soft collapsed fs-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2023" aria-expanded="false" aria-controls="collapse2023">
                        2023 - Consolidado
                        </button>
                    </h2>
                    <div id="collapse2023" class="accordion-collapse collapse" data-bs-parent="#accordionBalanco">
                        <div class="accordion-body">
                            <div class="row g-2">
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/balancos/2023/Balanco_Financeiro-2023.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                        <span>Balanço Financeiro</span>
                                        <span class="badge bg-softGray text-green">110KB</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/balancos/2023/Balanco_Orcamentario-2023.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                        <span>Balanço Orçamentário</span>
                                        <span class="badge bg-softGray text-green">334KB</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/balancos/2023/Balanco_Patrimonial-2023v2.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                        <span>Balanço Patrimonial</span>
                                        <span class="badge bg-softGray text-green">892KB</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/balancos/2023/Demonstracoes_das_Variacoes_Patrimoniais-2023.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                        <span>Demonstração das Variações Patrimoniais</span>
                                        <span class="badge bg-softGray text-green">366KB</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/balancos/2023/Demonstracao_dos_Fluxos_de_Caixa-2023.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                        <span>Demonstração dos Fluxos de Caixa</span>
                                        <span class="badge bg-softGray text-green">217KB</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/balancos/2023/Demonstracao_das_Mutacoes_no_Patrimonio_Liquido-2023.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                        <span>Demonstração das Mutações no Patrimônio Líquido</span>
                                        <span class="badge bg-softGray text-green">99KB</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/balancos/2023/Demonstrativo_da_Divida_Flutuante-2023.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                        <span>Balanço da Dívida Flutuante</span>
                                        <span class="badge bg-softGray text-green">311KB</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/balancos/2023/Demonstrativo_da_Divida_Fundada-2023.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                        <span>Balanço da Dívida Fundada</span>
                                        <span class="badge bg-softGray text-green">111KB</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <!-- 2022 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button text-soft collapsed fs-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2022" aria-expanded="false" aria-controls="collapse2022">
                        2022 - Consolidado
                        </button>
                    </h2>
                    <div id="collapse2022" class="accordion-collapse collapse" data-bs-parent="#accordionBalanco">
                        <div class="accordion-body">
                            <div class="row g-2">
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/balancos/2022/Balanco-Financeiro-2022.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                        <span>Balanço Financeiro</span>
                                        <span class="badge bg-softGray text-green">194KB</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/balancos/2022/Balanco-Patrimonial-2022.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                        <span>Balanço Patrimonial</span>
                                        <span class="badge bg-softGray text-green">405KB</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/balancos/2022/Demostracao-Variacoes-Patrimoniais-2022.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                        <span>Demonstração das Variações Patrimoniais</span>
                                        <span class="badge bg-softGray text-green">867KB</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/balancos/2022/Fluxo-de-Caixa-2022.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                        <span>Demonstração dos Fluxos de Caixa</span>
                                        <span class="badge bg-softGray text-green">537KB</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/balancos/2022/Demonstracao-das-Mutacoes-no-Patrimonio-2022.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                        <span>Demonstração das Mutações no Patrimônio Líquido</span>
                                        <span class="badge bg-softGray text-green">96KB</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/balancos/2022/Demonstrativo-da-Divida-Flututante-2022.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                        <span>Balanço da Dívida Flutuante</span>
                                        <span class="badge bg-softGray text-green">304KB</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/balancos/2022/Demonstrativo-da-Divida-Fundada-2022.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                        <span>Balanço da Dívida Fundada</span>
                                        <span class="badge bg-softGray text-green">145KB</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/balancos/2022/ANEXO-II-Despesa-receita.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                        <span>Demonstração por Natureza da Receita</span>
                                        <span class="badge bg-softGray text-green">2.312KB</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <!-- Demais anos (2021 a 2009) seguindo o mesmo padrão -->
            <!-- Para economizar espaço, vou mostrar apenas a estrutura para um ano adicional -->

            <!-- 2021 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button text-soft collapsed fs-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2021" aria-expanded="false" aria-controls="collapse2021">
                        2021 - Consolidado
                        </button>
                    </h2>
                    <div id="collapse2021" class="accordion-collapse collapse" data-bs-parent="#accordionBalanco">
                        <div class="accordion-body">
                            <div class="row g-2">
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/balancos/2021/BALANCO-ORCAMENTARIO.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                        <span>Balanço Orçamentário</span>
                                        <span class="badge bg-softGray text-green">1,44MB</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/balancos/2021/BALANCO-FINANCEIRO.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                        <span>Balanço Financeiro</span>
                                        <span class="badge bg-softGray text-green">369KB</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/balancos/2021/BALANCO-PATRIMONIAL.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                        <span>Balanço Patrimonial</span>
                                        <span class="badge bg-softGray text-green">5,24MB</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/balancos/2021/DEMONSTRACAO-DAS-VARIACOES-PATRIMONIAIS.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                        <span>Demonstração das Variações Patrimoniais</span>
                                        <span class="badge bg-softGray text-green">1,06MB</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/balancos/2021/DEMONSTRACAO-DE-FLUXOS-DE-CAIXA.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                        <span>Demonstração dos Fluxos de Caixa</span>
                                        <span class="badge bg-softGray text-green">1,06MB</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/balancos/2021/DEMONSTRACAO-DAS-MUTACOES-NO-PATRIMONIO-LIQUIDO.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                        <span>Demonstração das Mutações no Patrimônio Líquido</span>
                                        <span class="badge bg-softGray text-green">89KB</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button text-soft collapsed fs-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2020" aria-expanded="false" aria-controls="collapse2020">
                        2020 - Consolidado
                        </button>
                    </h2>
                    <div id="collapse2020" class="accordion-collapse collapse" data-bs-parent="#accordionBalanco">
                        <div class="accordion-body">
                            <div class="row g-2">
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/cgm/balancos/2020-Balanco-Orcamentario.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                        <span>Balanço Orçamentário</span>
                                        <span class="badge bg-softGray text-green">1,59MB</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/cgm/balancos/2020-Balanco-Financeiro.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                        <span>Balanço Financeiro</span>
                                        <span class="badge bg-softGray text-green">975KB</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/cgm/balancos/2020-Balanco-Patrimonial.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                        <span>Balanço Patrimonial</span>
                                        <span class="badge bg-softGray text-green">3,94MB</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/cgm/balancos/2020-Variacoes-Patrimoniais.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                        <span>Demonstração das Variações Patrimoniais</span>
                                        <span class="badge bg-softGray text-green">1,35MB</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/cgm/balancos/2020-Fluxo-Caixa.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                        <span>Demonstração dos Fluxos de Caixa</span>
                                        <span class="badge bg-softGray text-green">1,36MB</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/cgm/balancos/2020-Mutacoes-Patrimonio-Liquido.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                        <span>Demonstração das Mutações no Patrimônio Líquido</span>
                                        <span class="badge bg-softGray text-green">619KB</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <!-- 2019 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button text-soft collapsed fs-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2019" aria-expanded="false" aria-controls="collapse2019">
                        2019 - Consolidado
                        </button>
                    </h2>
                    <div id="collapse2019" class="accordion-collapse collapse" data-bs-parent="#accordionBalanco">
                        <div class="accordion-body">
                            <div class="row g-2">
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/cgm/balancos/2019-Balanco-Orcamentario.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                        <span>Balanço Orçamentário</span>
                                        <span class="badge bg-softGray text-green">1,24MB</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/cgm/balancos/2019-Balanco-Financeiro.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                        <span>Balanço Financeiro</span>
                                        <span class="badge bg-softGray text-green">376KB</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/cgm/balancos/2019-Balanco-Patrimonial.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                        <span>Balanço Patrimonial</span>
                                        <span class="badge bg-softGray text-green">2,15MB</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/cgm/balancos/2019-Variacoes-Patrimoniais.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                        <span>Demonstração das Variações Patrimoniais</span>
                                        <span class="badge bg-softGray text-green">1,24MB</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/cgm/balancos/2019-Fluxos-de-Caixa.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                        <span>Demonstração dos Fluxos de Caixa</span>
                                        <span class="badge bg-softGray text-green">1,34MB</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <!-- 2018 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button text-soft collapsed fs-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2018" aria-expanded="false" aria-controls="collapse2018">
                        2018 - Consolidado
                        </button>
                    </h2>
                    <div id="collapse2018" class="accordion-collapse collapse" data-bs-parent="#accordionBalanco">
                        <div class="accordion-body">
                            <div class="row g-2">
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/cgm/balancos/2018-Balanco-Orcamentario.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                        <span>Balanço Orçamentário</span>
                                        <span class="badge bg-softGray text-green">92KB</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/cgm/balancos/2018-Balanco-Financeiro.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                        <span>Balanço Financeiro</span>
                                        <span class="badge bg-softGray text-green">82KB</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/cgm/balancos/2018-Balanco-Patrimonial.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                        <span>Balanço Patrimonial</span>
                                        <span class="badge bg-softGray text-green">96KB</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/cgm/balancos/2018-Variacoes-Patrimoniais.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                        <span>Demonstração das Variações Patrimoniais</span>
                                        <span class="badge bg-softGray text-green">85KB</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/cgm/balancos/2018-Fluxos-de-Caixa.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                        <span>Demonstração dos Fluxos de Caixa</span>
                                        <span class="badge bg-softGray text-green">85KB</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <!-- 2017 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button text-soft collapsed fs-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2017" aria-expanded="false" aria-controls="collapse2017">
                        2017 - Consolidado
                        </button>
                    </h2>
                    <div id="collapse2017" class="accordion-collapse collapse" data-bs-parent="#accordionBalanco">
                        <div class="accordion-body">
                            <div class="row g-2">
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/balancos/2017-Balanco-Orcamentario-Consolidado.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                        <span>Balanço Orçamentário</span>
                                        <span class="badge bg-softGray text-green">92KB</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/balancos/2017-BF.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                        <span>Balanço Financeiro</span>
                                        <span class="badge bg-softGray text-green">74KB</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/balancos/2017-B-Patrimonial.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                        <span>Balanço Patrimonial</span>
                                        <span class="badge bg-softGray text-green">112KB</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/balancos/2017-DVP-Consolidado.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                        <span>Demonstração das Variações Patrimoniais</span>
                                        <span class="badge bg-softGray text-green">110KB</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/balancos/2017-Fluxo-caixa.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                        <span>Fluxo de Caixa</span>
                                        <span class="badge bg-softGray text-green">71KB</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            <!-- 2016 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button text-soft collapsed fs-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2016" aria-expanded="false" aria-controls="collapse2016">
                        2016 - Consolidado
                        </button>
                    </h2>
                    <div id="collapse2016" class="accordion-collapse collapse" data-bs-parent="#accordionBalanco">
                        <div class="accordion-body">
                            <div class="row g-2">
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/balancos/2016_BO.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                        <span>Balanço Orçamentário</span>
                                        <span class="badge bg-softGray text-green">92KB</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/balancos/2016_BF.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                        <span>Balanço Financeiro</span>
                                        <span class="badge bg-softGray text-green">78KB</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/balancos/2016_BP.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                        <span>Balanço Patrimonial</span>
                                        <span class="badge bg-softGray text-green">173KB</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/balancos/2016_DVP.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                        <span>Demonstração das Variações Patrimoniais</span>
                                        <span class="badge bg-softGray text-green">85KB</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/balancos/2016_FC.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                        <span>Fluxo de Caixa</span>
                                        <span class="badge bg-softGray text-green">85KB</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <!-- 2015 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button text-soft collapsed fs-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2015" aria-expanded="false" aria-controls="collapse2015">
                        2015 - Consolidado
                        </button>
                    </h2>
                    <div id="collapse2015" class="accordion-collapse collapse" data-bs-parent="#accordionBalanco">
                        <div class="accordion-body">
                            <div class="row g-2">
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/balancos/2015_BO.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                        <span>Balanço Orçamentário</span>
                                        <span class="badge bg-softGray text-green">850KB</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/balancos/2015_BF.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                        <span>Balanço Financeiro</span>
                                        <span class="badge bg-softGray text-green">294KB</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/balancos/2015_BP.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                        <span>Balanço Patrimonial</span>
                                        <span class="badge bg-softGray text-green">1.100KB</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/balancos/2015_BVP.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                        <span>Demonstração das Variações Patrimoniais</span>
                                        <span class="badge bg-softGray text-green">787KB</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <!-- 2014 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button text-soft collapsed fs-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2014" aria-expanded="false" aria-controls="collapse2014">
                        2014 - Consolidado
                        </button>
                    </h2>
                    <div id="collapse2014" class="accordion-collapse collapse" data-bs-parent="#accordionBalanco">
                        <div class="accordion-body">
                            <div class="row g-2">
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/balancos/2014_BO.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                        <span>Balanço Orçamentário</span>
                                        <span class="badge bg-softGray text-green">789KB</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/balancos/2014_BF.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                        <span>Balanço Financeiro</span>
                                        <span class="badge bg-softGray text-green">264KB</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/balancos/2014_BP.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                        <span>Balanço Patrimonial</span>
                                        <span class="badge bg-softGray text-green">1MB</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/balancos/2014_DVP.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                        <span>Demonstração das Variações Patrimoniais</span>
                                        <span class="badge bg-softGray text-green">685KB</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <!-- 2013 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button text-soft collapsed fs-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2013" aria-expanded="false" aria-controls="collapse2013">
                        2013 - Consolidado
                        </button>
                    </h2>
                    <div id="collapse2013" class="accordion-collapse collapse" data-bs-parent="#accordionBalanco">
                        <div class="accordion-body">
                            <div class="row g-2">
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/balancos/2013_BOC_12.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                        <span>Balanço Orçamentário - Anexo XII</span>
                                        <span class="badge bg-softGray text-green">207KB</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/balancos/2013_BFC_13.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                        <span>Balanço Financeiro - Anexo XIII</span>
                                        <span class="badge bg-softGray text-green">206KB</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/balancos/2013_BPC_14.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                        <span>Balanço Patrimonial - Anexo XIV</span>
                                        <span class="badge bg-softGray text-green">106KB</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/balancos/2013_DVPC_15.PDF" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                        <span>Demonstração das Variações Patrimoniais - Anexo XV</span>
                                        <span class="badge bg-softGray text-green">207KB</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <!-- 2012 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button text-soft collapsed fs-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2012" aria-expanded="false" aria-controls="collapse2012">
                        2012 - Consolidado
                        </button>
                    </h2>
                    <div id="collapse2012" class="accordion-collapse collapse" data-bs-parent="#accordionBalanco">
                        <div class="accordion-body">
                            <div class="row g-2">
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/balancos/2012_BOC_XII.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                        <span>Balanço Orçamentário - Anexo XII</span>
                                        <span class="badge bg-softGray text-green">207KB</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/balancos/2012_BF_VIII.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                        <span>Balanço Financeiro - Anexo XIII</span>
                                        <span class="badge bg-softGray text-green">206KB</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/balancos/2012_BP_XIV.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                        <span>Balanço Patrimonial - Anexo XIV</span>
                                        <span class="badge bg-softGray text-green">106KB</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/balancos/2012_DVP_XV.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                        <span>Demonstração das Variações Patrimoniais - Anexo XV</span>
                                        <span class="badge bg-softGray text-green">206KB</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <!-- 2011 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button text-soft collapsed fs-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2011" aria-expanded="false" aria-controls="collapse2011">
                        2011 - Consolidado
                        </button>
                    </h2>
                    <div id="collapse2011" class="accordion-collapse collapse" data-bs-parent="#accordionBalanco">
                        <div class="accordion-body">
                            <div class="row g-2">
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/balancos/2011_12_BOC.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                        <span>Balanço Orçamentário - Anexo XII</span>
                                        <span class="badge bg-softGray text-green">107KB</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/balancos/2011_13_BFC.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                        <span>Balanço Financeiro - Anexo XIII</span>
                                        <span class="badge bg-softGray text-green">106KB</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/balancos/2011_14_BPC.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                        <span>Balanço Patrimonial - Anexo XIV</span>
                                        <span class="badge bg-softGray text-green">106KB</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/balancos/2011_15_DVPC.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                        <span>Demonstração das Variações Patrimoniais - Anexo XV</span>
                                        <span class="badge bg-softGray text-green">87KB</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <!-- 2010 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button text-soft collapsed fs-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2010" aria-expanded="false" aria-controls="collapse2010">
                        2010 - Consolidado
                        </button>
                    </h2>
                    <div id="collapse2010" class="accordion-collapse collapse" data-bs-parent="#accordionBalanco">
                        <div class="accordion-body">
                            <div class="row g-2">
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/balancos/2010_12_BOC.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                        <span>Balanço Orçamentário - Anexo XII</span>
                                        <span class="badge bg-softGray text-green">86KB</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/balancos/2010_13_BFC.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                        <span>Balanço Financeiro - Anexo XIII</span>
                                        <span class="badge bg-softGray text-green">87KB</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/balancos/2010_14_BPC.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                        <span>Balanço Patrimonial - Anexo XIV</span>
                                        <span class="badge bg-softGray text-green">78KB</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/balancos/2010_15_DVPC.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                        <span>Demonstração das Variações Patrimoniais - Anexo XV</span>
                                        <span class="badge bg-softGray text-green">87KB</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <!-- 2009 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button text-soft collapsed fs-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2009" aria-expanded="false" aria-controls="collapse2009">
                        2009 - Consolidado
                        </button>
                    </h2>
                    <div id="collapse2009" class="accordion-collapse collapse" data-bs-parent="#accordionBalanco">
                        <div class="accordion-body">
                            <div class="row g-2">
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/balancos/2009_BOC_12.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                        <span>Balanço Orçamentário - Anexo XII</span>
                                        <span class="badge bg-softGray text-green">80KB</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/balancos/2009_BFC_13.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                        <span>Balanço Financeiro - Anexo XIII</span>
                                        <span class="badge bg-softGray text-green">29KB</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/balancos/2009_BPF_14.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                        <span>Balanço Patrimonial - Anexo XIV</span>
                                        <span class="badge bg-softGray text-green">26KB</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/balancos/2009_DVPC_15.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                        <span>Demonstração das Variações Patrimoniais - Anexo XV</span>
                                        <span class="badge bg-softGray text-green">27KB</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>
@endsection