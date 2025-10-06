@extends('theme')
@section("title", "Portal da Transparência - Angra dos Reis :: Atas das Audiências Públicas")
@section('content')
<section>

    <div class="container py-5">
        <!-- Breadcrumb -->
        <nav class="mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('index') }}">Página Inicial</a></li>
                <li class="breadcrumb-item active">Atas das Audiências Públicas</li>
            </ol>
        </nav>

        <!-- Título Principal -->
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h1 class="display-5 fw-bold text-soft">Atas das Audiências Públicas</h1>
                <p class="lead text-muted">Atas de Audiências Públicas das metas fiscais e da saúde e os seus respectivos comprovantes de chamamento.</p>
            </div>
        </div>

        <!-- Accordion de Anos -->
        <div class="accordion" id="accordionAtas">
            <!-- 2024 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button text-soft fs-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2024" aria-expanded="true" aria-controls="collapse2024">
                        2024
                    </button>
                </h2>
                <div id="collapse2024" class="accordion-collapse collapse show" data-bs-parent="#accordionAtas">
                    <div class="accordion-body">
                        <h3 class="h5 text-secondary fw-bold mb-3">PMAR</h3>
                        <div class="row g-2 mb-4">
                            <div class="col-md-4">
                                <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2024/Comprovantes/Ata-Audiencia-Publica-PMAR-3-QUAD-2024.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                    <span>Ata do 3º Quadrimestre</span>
                                    <i class="fas fa-download ms-2"></i>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2024/Comprovantes/Ata-Audiencia-Publica-PMAR-2-QUAD-2024.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                    <span>Ata do 2º Quadrimestre</span>
                                    <i class="fas fa-download ms-2"></i>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="https://portal.angra.rj.gov.br/downloads/CGM/fiscal/2024/Comprovantes/Ata-Audiencia-Publica-PMAR-1-QUAD-2024.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                    <span>Ata do 1º Quadrimestre</span>
                                    <i class="fas fa-download ms-2"></i>
                                </a>
                            </div>
                        </div>
                        <hr>
                        <hr>
                        <h3 class="h5 text-green fw-bold mb-3">Saúde</h3>
                        <div class="row g-2">
                            <div class="col-md-4">
                                <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2024/Comprovantes/3-quadrimestre.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                    <span>Ata do 3º Quadrimestre</span>
                                    <i class="fas fa-download ms-2"></i>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2024/Comprovantes/2-quadrimestre.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                    <span>Ata do 2º Quadrimestre</span>
                                    <i class="fas fa-download ms-2"></i>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2024/Comprovantes/1-quadrimestre.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                    <span>Ata do 1º Quadrimestre</span>
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
                <div id="collapse2023" class="accordion-collapse collapse" data-bs-parent="#accordionAtas">
                    <div class="accordion-body">
                        <h3 class="h5 text-secondary fw-bold mb-3">PMAR</h3>
                        <div class="row g-2 mb-4">
                            <div class="col-md-4">
                                <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2023/Comprovantes/Ata-Audiencia-Publica-PMAR-3-QUAD-2023.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                    <span>Ata do 3º Quadrimestre</span>
                                    <i class="fas fa-download ms-2"></i>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2023/Comprovantes/Ata-Audiencia-Publica-PMAR-2-QUAD-2023.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                    <span>Ata do 2º Quadrimestre</span>
                                    <i class="fas fa-download ms-2"></i>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2023/Comprovantes/Ata-Audiencia-Publica-PMAR-1-QUAD-2023.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                    <span>Ata do 1º Quadrimestre</span>
                                    <i class="fas fa-download ms-2"></i>
                                </a>
                            </div>
                        </div>
                        <hr>
                        <h3 class="h5 text-green fw-bold mb-3">Saúde</h3>
                        <div class="row g-2">
                            <div class="col-md-4">
                                <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2023/Comprovantes/ATA-PRESTACAO-DE-CONTAS-SAUDE-2-QUAD-2023.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                    <span>Ata do 2º Quadrimestre</span>
                                    <i class="fas fa-download ms-2"></i>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2023/Comprovantes/ATA-PRESTACAO-DE-CONTAS-SAUDE-1-QUAD-2023.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                    <span>Ata do 1º Quadrimestre</span>
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
                <div id="collapse2022" class="accordion-collapse collapse" data-bs-parent="#accordionAtas">
                    <div class="accordion-body">
                        <h3 class="h5 text-secondary fw-bold mb-3">PMAR</h3>
                        <div class="row g-2 mb-4">
                            <div class="col-md-4">
                                <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2023/Comprovantes/Ata-Audiencia-Publica-PMAR-3-QUAD-2022.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                    <span>Ata do 3º Quadrimestre</span>
                                    <i class="fas fa-download ms-2"></i>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2022/ata-da-audiencia-publica-do-municipio-de-angra-ref-ao-segundo-quadrimestre-de-2022.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                    <span>Ata do 2º Quadrimestre</span>
                                    <i class="fas fa-download ms-2"></i>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2022/ata-de-audiencia-publica-do-municipio-de-angra--ref-ao-primeiro-quadrimestre-de-2022.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                    <span>Ata do 1º Quadrimestre</span>
                                    <i class="fas fa-download ms-2"></i>
                                </a>
                            </div>
                        </div>
                        <hr>
                        <h3 class="h5 text-green fw-bold mb-3">Saúde</h3>
                        <div class="row g-2">
                            <div class="col-md-4">
                                <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2023/Comprovantes/ATA-PRESTACAO-DE-CONTAS-SAUDE-3-QUAD-2022.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                    <span>Ata do 3º Quadrimestre</span>
                                    <i class="fas fa-download ms-2"></i>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2022/ata-da-audiencia-publica-da-comissao-permanente-de-saude-ref.-segundo-quadrimeste-de-2022.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                    <span>Ata do 2º Quadrimestre</span>
                                    <i class="fas fa-download ms-2"></i>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2022/ata-audiencia-publica-secreatria-saude-ref-primeiro-quadrimestre-de-2022.pdf" target="_blank" class="btn border-0 btn-outline-success shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center">
                                    <span>Ata do 1º Quadrimestre</span>
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