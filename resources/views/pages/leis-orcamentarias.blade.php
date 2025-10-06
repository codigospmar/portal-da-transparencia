@extends('theme')
@section("title", "Portal da Transparência - Angra dos Reis :: Audiências Públicas - Leis Orçamentárias")
@section('content')
<section>

    <div class="container py-5">
        <!-- Breadcrumb -->
        <nav class="mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('index') }}">Página Inicial</a></li>
                <li class="breadcrumb-item active">Audiências Públicas - Leis Orçamentárias</li>
            </ol>
        </nav>

        <!-- Título Principal -->
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h1 class="display-5 fw-bold text-soft">Audiências Públicas - Leis Orçamentárias</h1>
            </div>
        </div>

        <!-- Accordion de Anos -->
        <div class="accordion" id="accordionLeisOrcamentarias">

            <!-- 2025 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button text-soft fs-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2025" aria-expanded="true" aria-controls="collapse2025">
                        2025
                    </button>
                </h2>
                <div id="collapse2025" class="accordion-collapse collapse show" data-bs-parent="#accordionLeisOrcamentarias">
                    <div class="accordion-body">
                        <div class="row g-2">
                            <div class="col-md-4">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2025/apresentacao-ppa-2025.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                    <span>Revisão do Plano Plurianual - PPA 2022/2025</span>
                                    <i class="fas fa-download ms-2"></i>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2025/apresentacao-ldo-2025.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                    <span>Lei de Diretrizes Orçamentárias - LDO 2025</span>
                                    <i class="fas fa-download ms-2"></i>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2025/apresentacao-loa-2025.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                    <span>Lei Orçamentária Anual - LOA 2025</span>
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
                <div id="collapse2024" class="accordion-collapse collapse" data-bs-parent="#accordionLeisOrcamentarias">
                    <div class="accordion-body">
                        <div class="row g-2">
                            <div class="col-md-4">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2024/1_AudienciaPublica-Revisao-PPA-2024.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                    <span>Revisão do Plano Plurianual - PPA 2022/2025</span>
                                    <i class="fas fa-download ms-2"></i>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2024/3_AudienciaPublica-LOA-2024.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                    <span>Lei Orçamentária Anual - LOA 2024</span>
                                    <i class="fas fa-download ms-2"></i>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2024/LDO-material-complementar.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                    <span>Lei de Diretrizes Orçamentárias - LDO 2024 - Material Complementar</span>
                                    <i class="fas fa-download ms-2"></i>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2024/2_AudienciaPublica-LDO-2024.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                    <span>Lei de Diretrizes Orçamentárias - LDO 2024</span>
                                    <i class="fas fa-download ms-2"></i>
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
                        2023
                    </button>
                </h2>
                <div id="collapse2023" class="accordion-collapse collapse" data-bs-parent="#accordionLeisOrcamentarias">
                    <div class="accordion-body">
                        <div class="row g-2">
                            <div class="col-md-4">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/Audiencia-publica-REVISAO-PPA-2022-2025.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                    <span>Revisão do Plano Plurianual 2022/2025</span>
                                    <i class="fas fa-download ms-2"></i>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/Audiencia-publica-LDO-2023.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                    <span>Lei de Diretrizes Orçamentárias - LDO 2023</span>
                                    <i class="fas fa-download ms-2"></i>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/Audiencia-publica-MATERIAL-COMPLEMENTAR-LDO-2023.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                    <span>Lei de Diretrizes Orçamentárias - LDO 2023 - Demonstrativo de Programas e Ações por órgão e unidade</span>
                                    <i class="fas fa-download ms-2"></i>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/Audiencia-publica-LOA-2023.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                    <span>Lei Orçamentária Anual - LOA 2023</span>
                                    <i class="fas fa-download ms-2"></i>
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
                        2022
                    </button>
                </h2>
                <div id="collapse2022" class="accordion-collapse collapse" data-bs-parent="#accordionLeisOrcamentarias">
                    <div class="accordion-body">
                        <div class="row g-2">
                            <div class="col-md-4">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/audiencia-publica-PPA-2022.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                    <span>Plano Plurianual - PPA 2022 a 2025</span>
                                    <i class="fas fa-download ms-2"></i>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/audiencia-publica-LOA-2022.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                    <span>Lei Orçamentária Anual - LOA 2022</span>
                                    <i class="fas fa-download ms-2"></i>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/audiencia-publica-LDO-2022.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                    <span>Lei de Diretrizes Orçamentárias - LDO 2022</span>
                                    <i class="fas fa-download ms-2"></i>
                                </a>
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
                <div id="collapse2021" class="accordion-collapse collapse" data-bs-parent="#accordionLeisOrcamentarias">
                    <div class="accordion-body">
                        <div class="row g-2">
                            <div class="col-md-4">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2021/Audiencia-Publica--Revisao-PPA-2021.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                    <span>Revisão do Plano Plurianual 2018/2021</span>
                                    <i class="fas fa-download ms-2"></i>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2021/LDO-AUDIeNCIA-2021.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                    <span>Lei de Diretrizes Orçamentárias - LDO 2021</span>
                                    <i class="fas fa-download ms-2"></i>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2021/ldo-complemento-2021.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                    <span>Lei de Diretrizes Orçamentárias - LDO 2021 - Demonstrativo de Programas e Ações por órgão e unidade</span>
                                    <i class="fas fa-download ms-2"></i>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2021/AUDIeNCIA-PUBLICA-LOA-2021.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                    <span>Lei Orçamentária Anual - LOA 2021</span>
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
                <div id="collapse2020" class="accordion-collapse collapse" data-bs-parent="#accordionLeisOrcamentarias">
                    <div class="accordion-body">
                        <div class="row g-2">
                            <div class="col-md-4">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2020/audiencia-publica-loa-2020.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                    <span>Lei Orçamentária Anual (LOA) 2020</span>
                                    <i class="fas fa-download ms-2"></i>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2020/audiencia-publica-ldo-2020.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                    <span>Lei de Diretrizes Orçamentárias (LDO) 2020</span>
                                    <i class="fas fa-download ms-2"></i>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2020/audiencia-publica-ppa-2020.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                    <span>Audiência Pública Revisão do Plano Plurianual 2018/2021</span>
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