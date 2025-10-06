@extends('theme')
@section("title", "Portal da Transparência - Angra dos Reis :: Audiências Públicas das Metas Fiscais")
@section('content')
<section>

    <div class="container py-5">
        <!-- Breadcrumb -->
        <nav class="mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ env("PORTAL_ANGRA") }}">Página Inicial</a></li>
                <li class="breadcrumb-item"><a href="{{ route('index') }}">Portal da Transparência</a></li>
                <li class="breadcrumb-item active">Audiências Públicas das Metas Fiscais</li>
            </ol>
        </nav>

        <!-- Título Principal -->
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h1 class="display-5 fw-bold text-soft">Audiências Públicas das Metas Fiscais</h1>
                <p class="lead text-muted">Atas de Audiências Públicas das metas fiscais e da saúde e os seus respectivos comprovantes de chamamento.</p>
            </div>
        </div>

        <!-- Botão Lei Complementar -->
        <div class="row mb-4 justify-content-center">
            <div class="col-auto">
                <a href="https://www.planalto.gov.br/ccivil_03/leis/lcp/lcp101.htm" target="_blank" class="btn btn-outline-success border-0 shadow btn-lg">
                    Lei Complementar Nº 101/2000
                </a>
            </div>
        </div>


        <!-- Accordion de Anos -->
        <div class="accordion" id="accordionMetasFiscais">
            <!-- 2025 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button text-soft fs-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2025" aria-expanded="true" aria-controls="collapse2025">
                        2025
                    </button>
                </h2>
                <div id="collapse2025" class="accordion-collapse collapse show" data-bs-parent="#accordionMetasFiscais">
                    <div class="accordion-body">
                        <div class="row g-2">
                            <div class="col-md-4">
                                <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2025/2-Quadrimestre_Apresentacao-Audiencia-Publica_2025.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                    <span>2º Quadrimestre</span>
                                    <i class="fas fa-download ms-2"></i>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2025/1-Quadrimestre_Apresentacao-Audiencia-Publica_2025.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                    <span>1º Quadrimestre</span>
                                    <i class="fas fa-download ms-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2024 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button text-soft collapsed fs-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2024" aria-expanded="false" aria-controls="collapse2024">
                        2024
                    </button>
                </h2>
                <div id="collapse2024" class="accordion-collapse collapse" data-bs-parent="#accordionMetasFiscais">
                    <div class="accordion-body">
                        <div class="row g-2 mb-4">
                            <div class="col-md-4">
                                <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2024/3-Quadrimestre_Apresentacao-Audiencia-Publica_2024.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                    <span>3º Quadrimestre</span>
                                    <i class="fas fa-download ms-2"></i>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2024/2-Quadrimestre_Apresentacao-Audiencia-Publica_2024.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                    <span>2º Quadrimestre</span>
                                    <i class="fas fa-download ms-2"></i>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2024/1-Quadrimestre-2024_Apresentacao-Audiencia-Publica.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                    <span>1º Quadrimestre</span>
                                    <i class="fas fa-download ms-2"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Comprovantes de chamamentos 2024 -->
                        <div class="accordion mb-4" id="accordionComprovantes2024">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button text-soft collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseComprovantes2024" aria-expanded="false" aria-controls="collapseComprovantes2024">
                                        Comprovantes de chamamentos
                                    </button>
                                </h2>
                                <div id="collapseComprovantes2024" class="accordion-collapse collapse" data-bs-parent="#accordionComprovantes2024">
                                    <div class="accordion-body">
                                        <h3 class="h6 text-primary mb-3">PMAR</h3>
                                        <p class="text-muted mb-3">Nenhum comprovante disponível</p>

                                        <h3 class="h6 text-success mb-3">Saúde</h3>
                                        <div class="row g-2">
                                            <div class="col-md-4">
                                                <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2024/Comprovantes/Chamamento-3Quadrimestre-Saude.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                                    <span>3º Quadrimestre</span>
                                                    <i class="fas fa-download ms-2"></i>
                                                </a>
                                            </div>
                                            <div class="col-md-4">
                                                <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2024/Comprovantes/Chamamento-2Quadrimestre-Saude.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                                    <span>2º Quadrimestre</span>
                                                    <i class="fas fa-download ms-2"></i>
                                                </a>
                                            </div>
                                            <div class="col-md-4">
                                                <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2024/Comprovantes/Chamamento-1Quadrimestre-Saude.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                                    <span>1º Quadrimestre</span>
                                                    <i class="fas fa-download ms-2"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2023 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button text-soft collapsed fs-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2023" aria-expanded="false" aria-controls="collapse2023">
                        2023
                    </button>
                </h2>
                <div id="collapse2023" class="accordion-collapse collapse" data-bs-parent="#accordionMetasFiscais">
                    <div class="accordion-body">
                        <div class="row g-2 mb-4">
                            <div class="col-md-4">
                                <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2023/AudienciaPublica3Quadrimestre_2023.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                    <span>3º Quadrimestre</span>
                                    <i class="fas fa-download ms-2"></i>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2023/AudienciaPublica2Quadrimestre_2023.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                    <span>2º Quadrimestre</span>
                                    <i class="fas fa-download ms-2"></i>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2023/AudienciaPublica1Quadrimestre_2023_v2.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                    <span>1º Quadrimestre</span>
                                    <i class="fas fa-download ms-2"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Comprovantes de chamamentos 2023 -->
                        <div class="accordion mb-4" id="accordionComprovantes2023">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button text-soft collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseComprovantes2023" aria-expanded="false" aria-controls="collapseComprovantes2023">
                                        Comprovantes de chamamentos
                                    </button>
                                </h2>
                                <div id="collapseComprovantes2023" class="accordion-collapse collapse" data-bs-parent="#accordionComprovantes2023">
                                    <div class="accordion-body">
                                        <h3 class="h6 text-primary mb-3">PMAR</h3>
                                        <div class="row g-2 mb-3">
                                            <div class="col-md-4">
                                                <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2023/Comprovantes/Chamamento-Publico-PMAR-2-QUAD-2023.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                                    <span>2º Quadrimestre</span>
                                                    <i class="fas fa-download ms-2"></i>
                                                </a>
                                            </div>
                                            <div class="col-md-4">
                                                <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2023/Comprovantes/Chamamento-Publico-PMAR-1-QUAD-2023.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                                    <span>1º Quadrimestre</span>
                                                    <i class="fas fa-download ms-2"></i>
                                                </a>
                                            </div>
                                        </div>

                                        <h3 class="h6 text-success mb-3">Saúde</h3>
                                        <div class="row g-2">
                                            <div class="col-md-4">
                                                <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2023/Comprovantes/CHAMAMENTO-PUBLICO-SAUDE-2-QUAD-2023.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                                    <span>2º Quadrimestre</span>
                                                    <i class="fas fa-download ms-2"></i>
                                                </a>
                                            </div>
                                            <div class="col-md-4">
                                                <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2023/Comprovantes/CHAMamentO-PUBLICO-SAUDE-1-QUAD-2023.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                                    <span>1º Quadrimestre</span>
                                                    <i class="fas fa-download ms-2"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2022 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button text-soft collapsed fs-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2022" aria-expanded="false" aria-controls="collapse2022">
                        2022
                    </button>
                </h2>
                <div id="collapse2022" class="accordion-collapse collapse" data-bs-parent="#accordionMetasFiscais">
                    <div class="accordion-body">
                        <div class="row g-2 mb-4">
                            <div class="col-md-4">
                                <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2022/apresentacao_audiencia_publica_3_quadrimestre_2022.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                    <span>3º Quadrimestre</span>
                                    <i class="fas fa-download ms-2"></i>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2022/apresentacao_audiencia_publica_2_quadrimestre_2022.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                    <span>2º Quadrimestre</span>
                                    <i class="fas fa-download ms-2"></i>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2022/apresentacao_audiencia_publica_1_quadrimestre_2022.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                    <span>1º Quadrimestre</span>
                                    <i class="fas fa-download ms-2"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Comprovantes de chamamentos 2022 -->
                        <div class="accordion mb-4" id="accordionComprovantes2022">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button text-soft collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseComprovantes2022" aria-expanded="false" aria-controls="collapseComprovantes2022">
                                        Comprovantes de chamamentos
                                    </button>
                                </h2>
                                <div id="collapseComprovantes2022" class="accordion-collapse collapse" data-bs-parent="#accordionComprovantes2022">
                                    <div class="accordion-body">
                                        <h3 class="h6 text-primary mb-3">PMAR</h3>
                                        <div class="row g-2 mb-3">
                                            <div class="col-md-4">
                                                <a href="https://www.angradosreis.rj.leg.br/Comunicacao/noticias/camara-recebe-audiencia-para-prestacao-de-contas-da-prefeitura-1" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                                    <span>3º Quadrimestre</span>
                                                    <i class="fas fa-external-link-alt ms-2"></i>
                                                </a>
                                            </div>
                                            <div class="col-md-4">
                                                <a href="https://www.angradosreis.rj.leg.br/Comunicacao/noticias/camara-recebera-prestacao-de-contas-das-financas-do-municipio-1" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                                    <span>2º Quadrimestre</span>
                                                    <i class="fas fa-external-link-alt ms-2"></i>
                                                </a>
                                            </div>
                                            <div class="col-md-4">
                                                <a href="https://www.angradosreis.rj.leg.br/Comunicacao/noticias/camara-recebera-prestacao-de-contas-das-financas-do-municipio" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                                    <span>1º Quadrimestre</span>
                                                    <i class="fas fa-external-link-alt ms-2"></i>
                                                </a>
                                            </div>
                                        </div>

                                        <h3 class="h6 text-success mb-3">Saúde</h3>
                                        <div class="row g-2">
                                            <div class="col-md-4">
                                                <a href="https://www.angradosreis.rj.leg.br/Comunicacao/noticias/camara-recebe-audiencia-publica-para-prestacao-de-contas-da-saude" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                                    <span>3º Quadrimestre</span>
                                                    <i class="fas fa-external-link-alt ms-2"></i>
                                                </a>
                                            </div>
                                            <div class="col-md-4">
                                                <a href="https://www.angradosreis.rj.leg.br/Comunicacao/noticias/camara-recebera-prestacao-de-contas-da-saude-do-municipio-1" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                                    <span>2º Quadrimestre</span>
                                                    <i class="fas fa-external-link-alt ms-2"></i>
                                                </a>
                                            </div>
                                            <div class="col-md-4">
                                                <a href="https://www.angradosreis.rj.leg.br/Comunicacao/noticias/camara-recebera-prestacao-de-contas-da-saude" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                                    <span>1º Quadrimestre</span>
                                                    <i class="fas fa-external-link-alt ms-2"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2021 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button text-soft collapsed fs-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2021" aria-expanded="false" aria-controls="collapse2021">
                        2021
                    </button>
                </h2>
                <div id="collapse2021" class="accordion-collapse collapse" data-bs-parent="#accordionMetasFiscais">
                    <div class="accordion-body">
                        <div class="row g-2">
                            <div class="col-md-4">
                                <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2021/audiencia-publica-3quadrimestre-2021.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                    <span>3º Quadrimestre</span>
                                    <i class="fas fa-download ms-2"></i>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2021/audiencia-publica-2quadrimestre-2021v2.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                    <span>2º Quadrimestre</span>
                                    <i class="fas fa-download ms-2"></i>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="https://angra.rj.gov.br/downloads/cgm/fiscal/2021/audiencia-publica-1quadrimestre-2021v2.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                    <span>1º Quadrimestre</span>
                                    <i class="fas fa-download ms-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2020 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button text-soft collapsed fs-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2020" aria-expanded="false" aria-controls="collapse2020">
                        2020
                    </button>
                </h2>
                <div id="collapse2020" class="accordion-collapse collapse" data-bs-parent="#accordionMetasFiscais">
                    <div class="accordion-body">
                        <div class="row g-2">
                            <div class="col-md-4">
                                <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2020/audiencia-publica-3quadrimestre-2020.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                    <span>3º Quadrimestre</span>
                                    <i class="fas fa-download ms-2"></i>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="https://angra.rj.gov.br/downloads/cgm/fiscal/2020/audiencia-publica-2quadrimestre-2020.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                    <span>2º Quadrimestre</span>
                                    <i class="fas fa-download ms-2"></i>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="https://angra.rj.gov.br/downloads/cgm/fiscal/2020/audiencia-publica-1quadrimestre-2020.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                    <span>1º Quadrimestre</span>
                                    <i class="fas fa-download ms-2"></i>
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
                        2019
                    </button>
                </h2>
                <div id="collapse2019" class="accordion-collapse collapse" data-bs-parent="#accordionMetasFiscais">
                    <div class="accordion-body">
                        <div class="row g-2">
                            <div class="col-md-4">
                                <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2019/Audiencia-Publica-3quadrimestre-2019.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                    <span>3º Quadrimestre</span>
                                    <i class="fas fa-download ms-2"></i>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2019/Audiencia-Publica-2quadrimestre-2019.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                    <span>2º Quadrimestre</span>
                                    <i class="fas fa-download ms-2"></i>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2019/Audiencia-Publica-1quadrimestre-2019.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                    <span>1º Quadrimestre</span>
                                    <i class="fas fa-download ms-2"></i>
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
                        2018
                    </button>
                </h2>
                <div id="collapse2018" class="accordion-collapse collapse" data-bs-parent="#accordionMetasFiscais">
                    <div class="accordion-body">
                        <div class="row g-2">
                            <div class="col-md-4">
                                <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2018/Audiencia-Publica-3quadrimestre.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                    <span>3º Quadrimestre</span>
                                    <i class="fas fa-download ms-2"></i>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2018/Audiencia-Publica-2quadrimestre.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                    <span>2º Quadrimestre</span>
                                    <i class="fas fa-download ms-2"></i>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2018/Audiencia-Publica-1quadrimestre.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                    <span>1º Quadrimestre</span>
                                    <i class="fas fa-download ms-2"></i>
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
                        2017
                    </button>
                </h2>
                <div id="collapse2017" class="accordion-collapse collapse" data-bs-parent="#accordionMetasFiscais">
                    <div class="accordion-body">
                        <div class="row g-2">
                            <div class="col-md-4">
                                <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2017/audiencia-publica-3-quadrimestre-2017-PMAR.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                    <span>3º Quadrimestre</span>
                                    <i class="fas fa-download ms-2"></i>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2017/audiencia-publica-2-quadrimestre-2017-PMAR.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                    <span>2º Quadrimestre</span>
                                    <i class="fas fa-download ms-2"></i>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2017/audiencia-publica-1-quadrimestre-2017-PMAR.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                    <span>1º Quadrimestre</span>
                                    <i class="fas fa-download ms-2"></i>
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
                        2016
                    </button>
                </h2>
                <div id="collapse2016" class="accordion-collapse collapse" data-bs-parent="#accordionMetasFiscais">
                    <div class="accordion-body">
                        <div class="row g-2">
                            <div class="col-md-4">
                                <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2016/Audiencia-Publica-3-QUADRI-2016.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                    <span>3º Quadrimestre</span>
                                    <i class="fas fa-download ms-2"></i>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2016/Audiencia-Publica-2-QUADRI-2016.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                    <span>2º Quadrimestre</span>
                                    <i class="fas fa-download ms-2"></i>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2016/Audiencia-Publica-1-QUADRI-2016.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                    <span>1º Quadrimestre</span>
                                    <i class="fas fa-download ms-2"></i>
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
                        2015
                    </button>
                </h2>
                <div id="collapse2015" class="accordion-collapse collapse" data-bs-parent="#accordionMetasFiscais">
                    <div class="accordion-body">
                        <div class="row g-2">
                            <div class="col-md-4">
                                <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2015/3o_quad_2015_audiencia_publica.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                    <span>3º Quadrimestre</span>
                                    <i class="fas fa-download ms-2"></i>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2015/2o_quad_2015_audiencia_publica.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                    <span>2º Quadrimestre</span>
                                    <i class="fas fa-download ms-2"></i>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2015/1o_quad_2015_audiencia_publica.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                    <span>1º Quadrimestre</span>
                                    <i class="fas fa-download ms-2"></i>
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
                        2014
                    </button>
                </h2>
                <div id="collapse2014" class="accordion-collapse collapse" data-bs-parent="#accordionMetasFiscais">
                    <div class="accordion-body">
                        <div class="row g-2">
                            <div class="col-md-4">
                                <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2014/3o_quad_2014_audiencia_publica.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                    <span>3º Quadrimestre</span>
                                    <i class="fas fa-download ms-2"></i>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2014/2o_quad_2014_audiencia_publica.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                    <span>2º Quadrimestre</span>
                                    <i class="fas fa-download ms-2"></i>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2014/1o_quad_2014_audiencia_publica.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                    <span>1º Quadrimestre</span>
                                    <i class="fas fa-download ms-2"></i>
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
                        2013
                    </button>
                </h2>
                <div id="collapse2013" class="accordion-collapse collapse" data-bs-parent="#accordionMetasFiscais">
                    <div class="accordion-body">
                        <div class="row g-2">
                            <div class="col-md-4">
                                <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2013/AudienciaPublica_3o_quad_2013.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                    <span>3º Quadrimestre</span>
                                    <i class="fas fa-download ms-2"></i>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2013/Audiencia_Publica_2_Quad_2013.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                    <span>2º Quadrimestre</span>
                                    <i class="fas fa-download ms-2"></i>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2013/Audiencia_Publica_1_Quad_2013.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                    <span>1º Quadrimestre</span>
                                    <i class="fas fa-download ms-2"></i>
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
                        2012
                    </button>
                </h2>
                <div id="collapse2012" class="accordion-collapse collapse" data-bs-parent="#accordionMetasFiscais">
                    <div class="accordion-body">
                        <div class="row g-2">
                            <div class="col-md-4">
                                <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2012/audiencia_publica_2013_3quad.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                    <span>3º Quadrimestre</span>
                                    <i class="fas fa-download ms-2"></i>
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