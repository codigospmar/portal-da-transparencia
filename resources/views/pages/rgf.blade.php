@extends('theme')
@section("title", "Portal da Transparência - Angra dos Reis :: Relatório de Gestão Fiscal - RGF")
@section('content')
<section>
    <div class="container py-5">
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('index') }}">Página Inicial</a></li>
                <li class="breadcrumb-item active">RGF - Relatório de Gestão Fiscal</li>
            </ol>
        </nav>

        <!-- Título Principal -->
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h1 class="display-5 fw-bold text-soft">Relatório de Gestão Fiscal - RGF</h1>
            </div>
        </div>

        <!-- Accordion de Anos -->
        <div class="accordion" id="accordionRGF">

            <!-- 2025 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button fs-4 text-soft" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2025" aria-expanded="true" aria-controls="collapse2025">
                        2025
                    </button>
                </h2>
                <div id="collapse2025" class="accordion-collapse collapse show" data-bs-parent="#accordionRGF">
                    <div class="accordion-body">
                        <div class="list-group">
                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/RGF/2025/RGF-1QUAD.pdf" target="_blank" class="m-1 list-group-item btn btn-outline-success border-0 shadow-sm list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>1° Quadrimestre</strong>
                                    <span class="text-muted ms-2">- Resolução CGM Nº 012/2025</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2024 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed fs-4 text-soft" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2024" aria-expanded="false" aria-controls="collapse2024">
                        2024
                    </button>
                </h2>
                <div id="collapse2024" class="accordion-collapse collapse" data-bs-parent="#accordionRGF">
                    <div class="accordion-body">
                        <div class="list-group">
                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/RGF/2024/3-Quadrimestre.pdf" target="_blank" class="m-1 list-group-item btn btn-outline-success border-0 shadow-sm list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>3° Quadrimestre</strong>
                                    <span class="text-muted ms-2">- BO 2057 - Resolução CGM Nº 003/2025</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/RGF/2024/2-Quadrimestre.pdf" target="_blank" class="m-1 list-group-item btn btn-outline-success border-0 shadow-sm list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>2° Quadrimestre</strong>
                                    <span class="text-muted ms-2">- BO 1973 - Resolução CGM Nº 027/2024</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/RGF/2024/1-Quadrimestre.pdf" target="_blank" class="m-1 list-group-item btn btn-outline-success border-0 shadow-sm list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>1° Quadrimestre</strong>
                                    <span class="text-muted ms-2">- Resolução CGM Nº 017/2024</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2023 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed fs-4 text-soft" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2023" aria-expanded="false" aria-controls="collapse2023">
                        2023
                    </button>
                </h2>
                <div id="collapse2023" class="accordion-collapse collapse" data-bs-parent="#accordionRGF">
                    <div class="accordion-body">
                        <div class="list-group">
                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/RGF/2023/3-Quadrimestre.pdf" target="_blank" class="m-1 list-group-item btn btn-outline-success border-0 shadow-sm list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>3° Quadrimestre</strong>
                                    <span class="text-muted ms-2">- Errata da Resolução CGM Nº 004/2024</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                            <a href="https://angra.rj.gov.br/downloads/CGM/legislacao/2023/Resolucao-028-2023-Anexos.pdf" target="_blank" class="m-1 list-group-item btn btn-outline-success border-0 shadow-sm list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>2° Quadrimestre</strong>
                                    <span class="text-muted ms-2">- Resolução CGM Nº 028/2023</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/RGF/2023/1-Quadrimestre.pdf" target="_blank" class="m-1 list-group-item btn btn-outline-success border-0 shadow-sm list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>1° Quadrimestre</strong>
                                    <span class="text-muted ms-2">- Resolução CGM Nº 012/2023</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2022 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed fs-4 text-soft" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2022" aria-expanded="false" aria-controls="collapse2022">
                        2022
                    </button>
                </h2>
                <div id="collapse2022" class="accordion-collapse collapse" data-bs-parent="#accordionRGF">
                    <div class="accordion-body">
                        <div class="list-group">
                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/RGF/2022/3-Quadrimestre.pdf" target="_blank" class="m-1 list-group-item btn btn-outline-success border-0 shadow-sm list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>3° Quadrimestre</strong>
                                    <span class="text-muted ms-2">- Errata da Resolução CGM Nº 004/2023</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/RGF/2022/2-Quadrimestre.pdf" target="_blank" class="m-1 list-group-item btn btn-outline-success border-0 shadow-sm list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>2° Quadrimestre</strong>
                                    <span class="text-muted ms-2">- Resolução CGM Nº 030/2022</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/RGF/2022/1-Quadrimestre.pdf" target="_blank" class="m-1 list-group-item btn btn-outline-success border-0 shadow-sm list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>1° Quadrimestre</strong>
                                    <span class="text-muted ms-2">- Resolução CGM Nº 012/2022</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2021 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed fs-4 text-soft" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2021" aria-expanded="false" aria-controls="collapse2021">
                        2021
                    </button>
                </h2>
                <div id="collapse2021" class="accordion-collapse collapse" data-bs-parent="#accordionRGF">
                    <div class="accordion-body">
                        <div class="list-group">
                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/RGF/2021/3-Quadrimestre.pdf" target="_blank" class="m-1 list-group-item btn btn-outline-success border-0 shadow-sm list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>3° Quadrimestre</strong>
                                    <span class="text-muted ms-2">- Errata da Resolução CGM Nº 005/2022</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/RGF/2021/2-Quadrimestre.pdf" target="_blank" class="m-1 list-group-item btn btn-outline-success border-0 shadow-sm list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>2° Quadrimestre</strong>
                                    <span class="text-muted ms-2">- Resolução CGM Nº 019/2021</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/RGF/2021/1-Quadrimestre.pdf" target="_blank" class="m-1 list-group-item btn btn-outline-success border-0 shadow-sm list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>1° Quadrimestre</strong>
                                    <span class="text-muted ms-2">- Resolução CGM Nº 008/2021</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2020 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed fs-4 text-soft" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2020" aria-expanded="false" aria-controls="collapse2020">
                        2020
                    </button>
                </h2>
                <div id="collapse2020" class="accordion-collapse collapse" data-bs-parent="#accordionRGF">
                    <div class="accordion-body">
                        <div class="list-group">
                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/RGF/2020/3-Quadrimestre.pdf" target="_blank" class="m-1 list-group-item btn btn-outline-success border-0 shadow-sm list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>3° Quadrimestre</strong>
                                    <span class="text-muted ms-2">- Resolução CGM Nº 03/2021</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/RGF/2020/2-Quadrimestre.pdf" target="_blank" class="m-1 list-group-item btn btn-outline-success border-0 shadow-sm list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>2° Quadrimestre</strong>
                                    <span class="text-muted ms-2">- Resolução CGM Nº 020/2020</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                            <a href="https://angra.rj.gov.br/downloads/bo/BO-1177_de_26-05-2020.pdf" target="_blank" class="m-1 list-group-item btn btn-outline-success border-0 shadow-sm list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>1° Quadrimestre</strong>
                                    <span class="text-muted ms-2">BO 1177 - Páginas 26 a 32 (Resolução CGM Nº 008/2020)</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2019 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed fs-4 text-soft" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2019" aria-expanded="false" aria-controls="collapse2019">
                        2019
                    </button>
                </h2>
                <div id="collapse2019" class="accordion-collapse collapse" data-bs-parent="#accordionRGF">
                    <div class="accordion-body">
                        <div class="list-group">
                            <a href="https://angra.rj.gov.br/downloads/bo/BO-1124_de_30-01-2020.pdf" target="_blank" class="m-1 list-group-item btn btn-outline-success border-0 shadow-sm list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>3° Quadrimestre</strong>
                                    <span class="text-muted ms-2">BO 1124 - Páginas 30 a 37 (Errata da Resolução CGM Nº 002/2020)</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                            <a href="https://angra.rj.gov.br/downloads/bo/BO-1079_de_27-09-2019.pdf" target="_blank" class="m-1 list-group-item btn btn-outline-success border-0 shadow-sm list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>2° Quadrimestre</strong>
                                    <span class="text-muted ms-2">BO 1079 - Páginas 34 a 40 (Resolução CGM Nº 020/2019)</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                            <a href="https://angra.rj.gov.br/downloads/bo/BO-1035_de_28-05-2019.pdf" target="_blank" class="m-1 list-group-item btn btn-outline-success border-0 shadow-sm list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>1° Quadrimestre</strong>
                                    <span class="text-muted ms-2">BO 1035 - Páginas 43 a 48 (Resolução CGM Nº 014/2019)</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2018 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed fs-4 text-soft" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2018" aria-expanded="false" aria-controls="collapse2018">
                        2018
                    </button>
                </h2>
                <div id="collapse2018" class="accordion-collapse collapse" data-bs-parent="#accordionRGF">
                    <div class="accordion-body">
                        <div class="list-group">
                            <a href="https://angra.rj.gov.br/downloads/bo/BO-1032_de_20-05-2019.pdf" target="_blank" class="m-1 list-group-item btn btn-outline-success border-0 shadow-sm list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>3° Quadrimestre</strong>
                                    <span class="text-muted ms-2">BO 1032 - Páginas 27 A 33 (Errata da Resolução CGM Nº 003/2019)</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                            <a href="https://angra.rj.gov.br/downloads/bo/BO-946_de_28-09-2018.pdf" target="_blank" class="m-1 list-group-item btn btn-outline-success border-0 shadow-sm list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>2° Quadrimestre</strong>
                                    <span class="text-muted ms-2">BO 946 - Páginas 21 a 26 (Resolução CGM 025/2018)</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                            <a href="https://angra.rj.gov.br/downloads/bo/BO-899_de_25-05-2018.pdf" target="_blank" class="m-1 list-group-item btn btn-outline-success border-0 shadow-sm list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>1° Quadrimestre</strong>
                                    <span class="text-muted ms-2">BO 899 - Páginas 33 a 38 (Resolução CGM 020/2018)</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2017 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed fs-4 text-soft" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2017" aria-expanded="false" aria-controls="collapse2017">
                        2017
                    </button>
                </h2>
                <div id="collapse2017" class="accordion-collapse collapse" data-bs-parent="#accordionRGF">
                    <div class="accordion-body">
                        <div class="list-group">
                            <a href="https://angra.rj.gov.br/downloads/bo/BO-862-em-30-01-18-min.pdf" target="_blank" class="m-1 list-group-item btn btn-outline-success border-0 shadow-sm list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>3° Quadrimestre</strong>
                                    <span class="text-muted ms-2">BO 862 - Páginas 38 a 45 (Resolução CGM 004/2018)</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                            <a href="https://angra.rj.gov.br/downloads/bo/BO-813-em-26-09-17-ilovepdf-compressed.pdf" target="_blank" class="m-1 list-group-item btn btn-outline-success border-0 shadow-sm list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>2° Quadrimestre</strong>
                                    <span class="text-muted ms-2">BO 813 - Páginas 36 a 41 (Resolução CGM 036/2017)</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                            <a href="https://angra.rj.gov.br/downloads/bo/BO-768-em-30-05-17-min.pdf" target="_blank" class="m-1 list-group-item btn btn-outline-success border-0 shadow-sm list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>1° Quadrimestre</strong>
                                    <span class="text-muted ms-2">BO 768 - Páginas 12 a 32 (Resolução CGM 026/2017)</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2016 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed fs-4 text-soft" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2016" aria-expanded="false" aria-controls="collapse2016">
                        2016
                    </button>
                </h2>
                <div id="collapse2016" class="accordion-collapse collapse" data-bs-parent="#accordionRGF">
                    <div class="accordion-body">
                        <div class="list-group">
                            <a href="https://angra.rj.gov.br/downloads/bo/BO-715-em-30-01-17-min-ilovepdf-compressed.pdf" target="_blank" class="m-1 list-group-item btn btn-outline-success border-0 shadow-sm list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>3° Quadrimestre</strong>
                                    <span class="text-muted ms-2">BO 715 - Páginas 28 a 34 (Resolução 005/2017)</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                            <a href="https://angra.rj.gov.br/downloads/bo/BO-672-em-28-09-16_site.pdf" target="_blank" class="m-1 list-group-item btn btn-outline-success border-0 shadow-sm list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>2° Quadrimestre</strong>
                                    <span class="text-muted ms-2">BO 672 - Páginas 23 a 28 (Resolução 36/2016)</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                            <a href="https://angra.rj.gov.br/downloads/bo/BO-635-em-30-05-2016_site.pdf" target="_blank" class="m-1 list-group-item btn btn-outline-success border-0 shadow-sm list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>1° Quadrimestre</strong>
                                    <span class="text-muted ms-2">BO 635 - Páginas 29 a 33 (Resolução 27/2016)</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2015 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed fs-4 text-soft" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2015" aria-expanded="false" aria-controls="collapse2015">
                        2015
                    </button>
                </h2>
                <div id="collapse2015" class="accordion-collapse collapse" data-bs-parent="#accordionRGF">
                    <div class="accordion-body">
                        <div class="list-group">
                            <a href="https://angra.rj.gov.br/downloads/bo/bo-607-em-29-01-2016_site.pdf" target="_blank" class="m-1 list-group-item btn btn-outline-success border-0 shadow-sm list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>3° Quadrimestre</strong>
                                    <span class="text-muted ms-2">BO 607 - Páginas 80 a 82</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                            <a href="https://angra.rj.gov.br/downloads/bo/BO-584-em-28-09-2015_SITE.pdf" target="_blank" class="m-1 list-group-item btn btn-outline-success border-0 shadow-sm list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>2° Quadrimestre</strong>
                                    <span class="text-muted ms-2">BO 584 - Páginas 16 a 18 (Publicação da Resolução 197/CGM/2015 e os Anexos 1, 2, 3, 4 e 7)</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                            <a href="http://www.angra.rj.gov.br/https://angra.rj.gov.br/downloads/bo/BO-561-em-29-05-2015-site.pdf" target="_blank" class="m-1 list-group-item btn btn-outline-success border-0 shadow-sm list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>1° Quadrimestre</strong>
                                    <span class="text-muted ms-2">BO 561 - Páginas 16 a 18 (Publicação da Resolução 193/CGM/2015 e os Anexos 1, 2, 3, 4 e 7)</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2014 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed fs-4 text-soft" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2014" aria-exparded="false" aria-controls="collapse2014">
                        2014
                    </button>
                </h2>
                <div id="collapse2014" class="accordion-collapse collapse" data-bs-parent="#accordionRGF">
                    <div class="accordion-body">
                        <div class="list-group">
                            <a href="http://www.angra.rj.gov.br/https://angra.rj.gov.br/downloads/bo/BO-559-em15-05-2015.site.pdf" target="_blank" class="m-1 list-group-item btn btn-outline-success border-0 shadow-sm list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>3° Quadrimestre - DEMONSTRATIVO CONSOLIDADO</strong>
                                    <span class="text-muted ms-2">BO 559 - Páginas 46 a 49 (Republicação da Resolução 190/CGM/2015 PUBLICADA NA EDIÇÃO Nº 545 DO BOLETIM OFICIAL, DE 06/02/2015 - PÁGINAS 25/27 e os Anexos 1, 5, 6 e 7)</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                            <a href="http://www.angra.rj.gov.br/https://angra.rj.gov.br/downloads/bo/BO-559-em15-05-2015.site.pdf" target="_blank" class="m-1 list-group-item btn btn-outline-success border-0 shadow-sm list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>3° Quadrimestre</strong>
                                    <span class="text-muted ms-2">BO 559 - Páginas 41 a 46 (Republicação da Resolução 189/CGM/2014 PUBLICADA NA EDIÇÃO Nº 544 DO BOLETIM OFICIAL, DE 30/01/2015 - Páginas 38/43 e os Anexos 1, 2, 3, 4, 5 e 7)</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                            <a href="https://angra.rj.gov.br/downloads/bo/BO-521-em26-09-2014.site.pdf" target="_blank" class="m-1 list-group-item btn btn-outline-success border-0 shadow-sm list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>2° Quadrimestre</strong>
                                    <span class="text-muted ms-2">BO 521/2014 - Páginas 18 a 21 (Publicação da Resolução 181/CGM/2014 e os Anexos 1, 2, 3, 4, 5, 6 e 7)</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                            <a href="http://www.angra.rj.gov.br/https://angra.rj.gov.br/downloads/bo/BO-503-em30-05-2014sitepdf.pdf" target="_blank" class="m-1 list-group-item btn btn-outline-success border-0 shadow-sm list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>1° Quadrimestre</strong>
                                    <span class="text-muted ms-2">BO N° 503 - Páginas 79 a 84 (Publicação da Resolução 175/CGM/2014 e os Anexos 1, 2, 3, 4 e 7)</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2013 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed fs-4 text-soft" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2013" aria-expanded="false" aria-controls="collapse2013">
                        2013
                    </button>
                </h2>
                <div id="collapse2013" class="accordion-collapse collapse" data-bs-parent="#accordionRGF">
                    <div class="accordion-body">
                        <div class="list-group">
                            <a href="http://www.angra.rj.gov.br/https://angra.rj.gov.br/downloads/bo/BO-484-em31-01-2014.site.pdf" target="_blank" class="m-1 list-group-item btn btn-outline-success border-0 shadow-sm list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>3° Quadrimestre</strong>
                                    <span class="text-muted ms-2">BO 510/2014 - Páginas 16 a 24 (Publicação da Resolução 169/CGM/2014 e os Anexos I, II, III, IV, V, VI e VII)</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                            <a href="http://www.angra.rj.gov.br/https://angra.rj.gov.br/downloads/bo/BO-485-em07-02-2014.site.pdf" target="_blank" class="m-1 list-group-item btn btn-outline-success border-0 shadow-sm list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>3° Quadrimestre - DEMONSTRATIVO CONSOLIDADO</strong>
                                    <span class="text-muted ms-2">BO 485/2014 - Páginas 19 a 25 (Publicação da Resolução 171/CGM/2014 e os Anexos I, V, VI e VII)</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                            <a href="../https://angra.rj.gov.br/downloads/bo/BO-461-em27-09-2013site.pdf" target="_blank" class="m-1 list-group-item btn btn-outline-success border-0 shadow-sm list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>2° Quadrimestre</strong>
                                    <span class="text-muted ms-2">BO 461/2013 - Páginas 51 a 56 (Publicação da Resolução 162/CGM/2013 e os Anexos I, II, III, IV and VII)</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                            <a href="../https://angra.rj.gov.br/downloads/bo/BO-438-em29-05-2013grafica.pdf" target="_blank" class="m-1 list-group-item btn btn-outline-success border-0 shadow-sm list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>1° Quadrimestre</strong>
                                    <span class="text-muted ms-2">BO 438/2013 - Páginas 26 a 31 (Publicação da Resolução 156/CGM/2013 e os Anexos I, II, III, IV and VII)</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2012 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed fs-4 text-soft" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2012" aria-expanded="false" aria-controls="collapse2012">
                        2012
                    </button>
                </h2>
                <div id="collapse2012" class="accordion-collapse collapse" data-bs-parent="#accordionRGF">
                    <div class="accordion-body">
                        <!-- 1º Quadrimestre 2012 -->
                        <div class="card mb-3">
                            <div class="card-header bg-light">
                                <h5 class="mb-0">
                                    <button class="btn text-center btn-outline-success border-0 text-decoration-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2012_1quad">
                                        1° Quadrimestre
                                    </button>
                                </h5>
                            </div>
                            <div id="collapse2012_1quad" class="collapse">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2012/RGF_2012_1quad/36320124RGF1.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm w-100 text-start d-flex justify-content-between align-items-center">
                                                <span>Anexo I</span>
                                                <span class="badge bg-softGray text-green">PDF</span>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2012/RGF_2012_1quad/36320124RGF2.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm w-100 text-start d-flex justify-content-between align-items-center">
                                                <span>Anexo II</span>
                                                <span class="badge bg-softGray text-green">PDF</span>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2012/RGF_2012_1quad/36320124RGF3.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm w-100 text-start d-flex justify-content-between align-items-center">
                                                <span>Anexo III</span>
                                                <span class="badge bg-softGray text-green">PDF</span>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2012/RGF_2012_1quad/36320124RGF4.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm w-100 text-start d-flex justify-content-between align-items-center">
                                                <span>Anexo IV</span>
                                                <span class="badge bg-softGray text-green">PDF</span>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2012/RGF_2012_1quad/36320124RGF8.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm w-100 text-start d-flex justify-content-between align-items-center">
                                                <span>Anexo VIII</span>
                                                <span class="badge bg-softGray text-green">PDF</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 2º Quadrimestre 2012 -->
                        <div class="card mb-3">
                            <div class="card-header bg-light">
                                <h5 class="mb-0">
                                    <button class="btn btn-outline-success border-0 text-decoration-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2012_2quad">
                                        2° Quadrimestre
                                    </button>
                                </h5>
                            </div>
                            <div id="collapse2012_2quad" class="collapse">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2012/RGF_2012_2quad/36320128RGF1.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm w-100 text-start d-flex justify-content-between align-items-center">
                                                <span>Anexo I</span>
                                                <span class="badge bg-softGray text-green">PDF</span>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2012/RGF_2012_2quad/36320128RGF2.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm w-100 text-start d-flex justify-content-between align-items-center">
                                                <span>Anexo II</span>
                                                <span class="badge bg-softGray text-green">PDF</span>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2012/RGF_2012_2quad/36320128RGF3.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm w-100 text-start d-flex justify-content-between align-items-center">
                                                <span>Anexo III</span>
                                                <span class="badge bg-softGray text-green">PDF</span>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2012/RGF_2012_2quad/36320128RGF4.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm w-100 text-start d-flex justify-content-between align-items-center">
                                                <span>Anexo IV</span>
                                                <span class="badge bg-softGray text-green">PDF</span>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2012/RGF_2012_2quad/36320128RGF8.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm w-100 text-start d-flex justify-content-between align-items-center">
                                                <span>Anexo VIII</span>
                                                <span class="badge bg-softGray text-green">PDF</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 3º Quadrimestre 2012 -->
                        <div class="card mb-3">
                            <div class="card-header bg-light">
                                <h5 class="mb-0">
                                    <button class="btn btn-outline-success border-0 text-decoration-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2012_3quad">
                                        3° Quadrimestre
                                    </button>
                                </h5>
                            </div>
                            <div id="collapse2012_3quad" class="collapse">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2012/RGF_2012_3quad/363201212RGF1.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm w-100 text-start d-flex justify-content-between align-items-center">
                                                <span>Anexo I</span>
                                                <span class="badge bg-softGray text-green">PDF</span>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2012/RGF_2012_3quad/363201212RGF2.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm w-100 text-start d-flex justify-content-between align-items-center">
                                                <span>Anexo II</span>
                                                <span class="badge bg-softGray text-green">PDF</span>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2012/RGF_2012_3quad/363201212RGF3.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm w-100 text-start d-flex justify-content-between align-items-center">
                                                <span>Anexo III</span>
                                                <span class="badge bg-softGray text-green">PDF</span>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2012/RGF_2012_3quad/363201212RGF4.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm w-100 text-start d-flex justify-content-between align-items-center">
                                                <span>Anexo IV</span>
                                                <span class="badge bg-softGray text-green">PDF</span>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2012/RGF_2012_3quad/363201212RGF5.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm w-100 text-start d-flex justify-content-between align-items-center">
                                                <span>Anexo V</span>
                                                <span class="badge bg-softGray text-green">PDF</span>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2012/RGF_2012_3quad/363201212RGF6.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm w-100 text-start d-flex justify-content-between align-items-center">
                                                <span>Anexo VI</span>
                                                <span class="badge bg-softGray text-green">PDF</span>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2012/RGF_2012_2quad/36320128RGF8.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm w-100 text-start d-flex justify-content-between align-items-center">
                                                <span>Anexo VIII</span>
                                                <span class="badge bg-softGray text-green">PDF</span>
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
    </div>
</section>
@endsection