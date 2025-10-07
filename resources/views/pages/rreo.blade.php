@extends('theme')
@section("title", "Portal da Transparência - Angra dos Reis :: RREO - Relatórios bimestrais da execução orçamentária")
@section('content')
<section>
    <div class="container my-5 pb-5">

        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('index') }}">Página Inicial</a></li>
                <li class="breadcrumb-item active">RREO - Relatórios bimestrais da execução orçamentária</li>
            </ol>
        </nav>


        <!-- Título Principal -->
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h1 class="display-5 fw-bold text-soft">Relatório Resumido de Execução Orçamentária</h1>
                <p class="lead text-muted">RREO - Relatórios bimestrais da execução orçamentária</p>
            </div>
        </div>

        <!-- Accordion de Anos -->
        <div class="accordion" id="accordionRREO">

            <!-- 2025 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button fs-4 text-soft" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2025" aria-expanded="true" aria-controls="collapse2025">
                        2025
                    </button>
                </h2>
                <div id="collapse2025" class="accordion-collapse collapse show" data-bs-parent="#accordionRREO">
                    <div class="accordion-body">
                        <div class="list-group">
                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/RREO/2025/RREO-3BIM.pdf" target="_blank" class="list-group-item btn btn-outline-success border-0 shadow-sm m-1 list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>3° Bimestre</strong>
                                    <span class="text-muted ms-2">- Resolução CGM Nº 016/2025</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/RREO/2025/RREO-2BIM.pdf" target="_blank" class="list-group-item btn btn-outline-success border-0 shadow-sm m-1 list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>2° Bimestre</strong>
                                    <span class="text-muted ms-2">- Resolução CGM Nº 011/2025</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/RREO/2025/1-Bimestre.pdf" target="_blank" class="list-group-item btn btn-outline-success border-0 shadow-sm m-1 list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>1° Bimestre</strong>
                                    <span class="text-muted ms-2">- BO 2096 - Resolução CGM Nº 006/2025</span>
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
                <div id="collapse2024" class="accordion-collapse collapse" data-bs-parent="#accordionRREO">
                    <div class="accordion-body">
                        <div class="list-group">
                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/RREO/2024/6-Bimestre.pdf" target="_blank" class="list-group-item btn btn-outline-success border-0 shadow-sm m-1 list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>6° Bimestre</strong>
                                    <span class="text-muted ms-2">- BO 2057 - Resolução CGM Nº 002/2025</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/RREO/2024/5-Bimestre.pdf" target="_blank" class="list-group-item btn btn-outline-success border-0 shadow-sm m-1 list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>5° Bimestre</strong>
                                    <span class="text-muted ms-2">- BO 2007 - Resolução CGM Nº 031/2024</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/RREO/2024/4-Bimestre.pdf" target="_blank" class="list-group-item btn btn-outline-success border-0 shadow-sm m-1 list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>4° Bimestre</strong>
                                    <span class="text-muted ms-2">- BO 1973 - Resolução CGM Nº 026/2024</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/RREO/2024/3-Bimestre.pdf" target="_blank" class="list-group-item btn btn-outline-success border-0 shadow-sm m-1 list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>3° Bimestre</strong>
                                    <span class="text-muted ms-2">- BO 1933 - Resolução CGM Nº 023/2024</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/RREO/2024/2-Bimestre.pdf" target="_blank" class="list-group-item btn btn-outline-success border-0 shadow-sm m-1 list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>2° Bimestre</strong>
                                    <span class="text-muted ms-2">- Resolução CGM Nº 016/2024</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/RREO/2024/1-Bimestre.pdf" target="_blank" class="list-group-item btn btn-outline-success border-0 shadow-sm m-1 list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>1° Bimestre</strong>
                                    <span class="text-muted ms-2">- Resolução CGM Nº 011/2024 e Errata (Anexos nº 6 e 8)</span>
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
                <div id="collapse2023" class="accordion-collapse collapse" data-bs-parent="#accordionRREO">
                    <div class="accordion-body">
                        <div class="list-group">
                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/RREO/2023/6-Bimestre.pdf" target="_blank" class="list-group-item btn btn-outline-success border-0 shadow-sm m-1 list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>6° Bimestre</strong>
                                    <span class="text-muted ms-2">- Errata da Resolução CGM Nº 003/2024</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                            <a href="https://angra.rj.gov.br/downloads/CGM/legislacao/2023/Resolucao-030-2023-Anexos.pdf" target="_blank" class="list-group-item btn btn-outline-success border-0 shadow-sm m-1 list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>5° Bimestre</strong>
                                    <span class="text-muted ms-2">- Resolução CGM Nº 030/2023</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                            <a href="https://angra.rj.gov.br/downloads/CGM/legislacao/2023/Resolucao-027-2023-Anexos.pdf" target="_blank" class="list-group-item btn btn-outline-success border-0 shadow-sm m-1 list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>4° Bimestre</strong>
                                    <span class="text-muted ms-2">- Resolução CGM Nº 027/2023</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/RREO/2023/3-Bimestre.pdf" target="_blank" class="list-group-item btn btn-outline-success border-0 shadow-sm m-1 list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>3° Bimestre</strong>
                                    <span class="text-muted ms-2">- Resolução CGM Nº 021/2023</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/RREO/2023/2-Bimestre.pdf" target="_blank" class="list-group-item btn btn-outline-success border-0 shadow-sm m-1 list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>2° Bimestre</strong>
                                    <span class="text-muted ms-2">- Resolução CGM Nº 011/2023</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/RREO/2023/1-Bimestre.pdf" target="_blank" class="list-group-item btn btn-outline-success border-0 shadow-sm m-1 list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>1° Bimestre</strong>
                                    <span class="text-muted ms-2">- Resolução CGM Nº 008/2023</span>
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
                <div id="collapse2022" class="accordion-collapse collapse" data-bs-parent="#accordionRREO">
                    <div class="accordion-body">
                        <div class="list-group">
                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/RREO/2022/6-Bimestre.pdf" target="_blank" class="list-group-item btn btn-outline-success border-0 shadow-sm m-1 list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>6° Bimestre</strong>
                                    <span class="text-muted ms-2">- Errata da Resolução CGM Nº 003/2023</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/RREO/2022/5-Bimestre.pdf" target="_blank" class="list-group-item btn btn-outline-success border-0 shadow-sm m-1 list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>5° Bimestre</strong>
                                    <span class="text-muted ms-2">- Resolução CGM Nº 033/2022</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/RREO/2022/4-Bimestre.pdf" target="_blank" class="list-group-item btn btn-outline-success border-0 shadow-sm m-1 list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>4° Bimestre</strong>
                                    <span class="text-muted ms-2">- Resolução CGM Nº 029/2022</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/RREO/2022/3-Bimestre.pdf" target="_blank" class="list-group-item btn btn-outline-success border-0 shadow-sm m-1 list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>3° Bimestre</strong>
                                    <span class="text-muted ms-2">- Resolução CGM Nº 025/2022</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/RREO/2022/2-Bimestre.pdf" target="_blank" class="list-group-item btn btn-outline-success border-0 shadow-sm m-1 list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>2° Bimestre</strong>
                                    <span class="text-muted ms-2">- Resolução CGM Nº 011/2022</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/RREO/2022/1-Bimestre.pdf" target="_blank" class="list-group-item btn btn-outline-success border-0 shadow-sm m-1 list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>1° Bimestre</strong>
                                    <span class="text-muted ms-2">- Resolução CGM Nº 009/2022</span>
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
                <div id="collapse2021" class="accordion-collapse collapse" data-bs-parent="#accordionRREO">
                    <div class="accordion-body">
                        <div class="list-group">
                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/RREO/2021/6-Bimestre.pdf" target="_blank" class="list-group-item btn btn-outline-success border-0 shadow-sm m-1 list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>6º Bimestre</strong>
                                    <span class="text-muted ms-2">- Errata da Resolução CGM nº 004/2022</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/RREO/2021/5-Bimestre.pdf" target="_blank" class="list-group-item btn btn-outline-success border-0 shadow-sm m-1 list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>5º Bimestre</strong>
                                    <span class="text-muted ms-2">- Resolução CGM nº 021/2021</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/RREO/2021/4-Bimestre.pdf" target="_blank" class="list-group-item btn btn-outline-success border-0 shadow-sm m-1 list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>4º Bimestre</strong>
                                    <span class="text-muted ms-2">- Errata da Resolução CGM nº 018/2021</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/RREO/2021/3-Bimestre.pdf" target="_blank" class="list-group-item btn btn-outline-success border-0 shadow-sm m-1 list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>3º Bimestre</strong>
                                    <span class="text-muted ms-2">- Errata da Resolução CGM Nº 011/2021</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/RREO/2021/2-Bimestre.pdf" target="_blank" class="list-group-item btn btn-outline-success border-0 shadow-sm m-1 list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>2° Bimestre</strong>
                                    <span class="text-muted ms-2">- Resolução CGM Nº 007/2021</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/RREO/2021/1-Bimestre.pdf" target="_blank" class="list-group-item btn btn-outline-success border-0 shadow-sm m-1 list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>1° Bimestre</strong>
                                    <span class="text-muted ms-2">- Errata da Resolução CGM Nº 006/2021</span>
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
                <div id="collapse2020" class="accordion-collapse collapse" data-bs-parent="#accordionRREO">
                    <div class="accordion-body">
                        <div class="list-group">
                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/RREO/2020/6-Bimestre.pdf" target="_blank" class="list-group-item btn btn-outline-success border-0 shadow-sm m-1 list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>6° Bimestre</strong>
                                    <span class="text-muted ms-2">- Resolução CGM nº 02/2021</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/RREO/2020/5-Bimestre.pdf" target="_blank" class="list-group-item btn btn-outline-success border-0 shadow-sm m-1 list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>5° Bimestre</strong>
                                    <span class="text-muted ms-2">- Resolução CGM nº 026/2020</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/RREO/2020/4-Bimestre.pdf" target="_blank" class="list-group-item btn btn-outline-success border-0 shadow-sm m-1 list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>4° Bimestre</strong>
                                    <span class="text-muted ms-2">- Resolução CGM nº 019/2020</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/RREO/2020/3-Bimestre.pdf" target="_blank" class="list-group-item btn btn-outline-success border-0 shadow-sm m-1 list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>3° Bimestre</strong>
                                    <span class="text-muted ms-2">- Errata da Resolução CGM nº 014/2020</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                            <a href="https://angra.rj.gov.br/downloads/bo/BO-1177_de_26-05-2020.pdf" target="_blank" class="list-group-item btn btn-outline-success border-0 shadow-sm m-1 list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>2° Bimestre</strong>
                                    <span class="text-muted ms-2">BO 1177 - Páginas 03 a 25 (Resolução CGM Nº 007/2020)</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                            <a href="https://angra.rj.gov.br/downloads/bo/BO-1173_de_19-05-2020.pdf" target="_blank" class="list-group-item btn btn-outline-success border-0 shadow-sm m-1 list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>1° Bimestre</strong>
                                    <span class="text-muted ms-2">BO 1173 - Páginas 15 a 36 (Errata da Resolução CGM nº 004/2020)</span>
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
                <div id="collapse2019" class="accordion-collapse collapse" data-bs-parent="#accordionRREO">
                    <div class="accordion-body">
                        <div class="list-group">
                            <a href="https://angra.rj.gov.br/downloads/bo/BO-1124_de_30-01-2020.pdf" target="_blank" class="list-group-item btn btn-outline-success border-0 shadow-sm m-1 list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>6° Bimestre</strong>
                                    <span class="text-muted ms-2">BO 1124 - Páginas 03 a 29 (Errata da Resolução CGM Nº 001/2020)</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                            <a href="https://angra.rj.gov.br/downloads/bo/BO-1102_de_29-11-2019.pdf" target="_blank" class="list-group-item btn btn-outline-success border-0 shadow-sm m-1 list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>5° Bimestre</strong>
                                    <span class="text-muted ms-2">BO 1102 - Páginas 28 a 48 (Errata da Resolução CGM Nº 022/2019)</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                            <a href="https://angra.rj.gov.br/downloads/bo/BO-1079_de_27-09-2019.pdf" target="_blank" class="list-group-item btn btn-outline-success border-0 shadow-sm m-1 list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>4° Bimestre</strong>
                                    <span class="text-muted ms-2">BO 1079 - Páginas 41 a 60 (Resolução CGM Nº 019/2019)</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                            <a href="https://angra.rj.gov.br/downloads/bo/BO-1054_de_26-07-2019.pdf" target="_blank" class="list-group-item btn btn-outline-success border-0 shadow-sm m-1 list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>3° Bimestre</strong>
                                    <span class="text-muted ms-2">BO 1054 - Páginas 10 a 30 (Errata da Resolução CGM Nº 017/2019)</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                            <a href="https://angra.rj.gov.br/downloads/bo/BO-1035_de_28-05-2019.pdf" target="_blank" class="list-group-item btn btn-outline-success border-0 shadow-sm m-1 list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>2° Bimestre</strong>
                                    <span class="text-muted ms-2">BO 1035 - Páginas 22 a 42 (Resolução CGM Nº 013/2019)</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                            <a href="https://angra.rj.gov.br/downloads/bo/BO-1030_de_14-05-2019.pdf" target="_blank" class="list-group-item btn btn-outline-success border-0 shadow-sm m-1 list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>1° Bimestre</strong>
                                    <span class="text-muted ms-2">BO 1030 - Páginas 06 a 26 (Errata da Resolução CGM nº 010/2019)</span>
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
                <div id="collapse2018" class="accordion-collapse collapse" data-bs-parent="#accordionRREO">
                    <div class="accordion-body">
                        <div class="list-group">
                            <a href="https://angra.rj.gov.br/downloads/bo/BO-1032_de_20-05-2019.pdf" target="_blank" class="list-group-item btn btn-outline-success border-0 shadow-sm m-1 list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>6° Bimestre</strong>
                                    <span class="text-muted ms-2">BO 1032 - Páginas 02 a 26 (Errata da Resolução CGM nº 002/2019)</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                            <a href="https://angra.rj.gov.br/downloads/bo/BO-967_de_30-11-2018.pdf" target="_blank" class="list-group-item btn btn-outline-success border-0 shadow-sm m-1 list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>5° Bimestre</strong>
                                    <span class="text-muted ms-2">BO 967 - Páginas 04 a 21 (Resolução CGM 031/2018)</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                            <a href="https://angra.rj.gov.br/downloads/bo/BO-946_de_28-09-2018.pdf" target="_blank" class="list-group-item btn btn-outline-success border-0 shadow-sm m-1 list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>4° Bimestre</strong>
                                    <span class="text-muted ms-2">BO 946 - Páginas 02 a 20 (Resolução CGM 025/2018)</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                            <a href="https://angra.rj.gov.br/downloads/bo/BO-922_de_30-07-2018.pdf" target="_blank" class="list-group-item btn btn-outline-success border-0 shadow-sm m-1 list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>3° Bimestre</strong>
                                    <span class="text-muted ms-2">BO 922 - Páginas 02 a 19 (Resolução CGM N° 023/2018)</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                            <a href="https://angra.rj.gov.br/downloads/bo/BO-899_de_25-05-2018.pdf" target="_blank" class="list-group-item btn btn-outline-success border-0 shadow-sm m-1 list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>2° Bimestre</strong>
                                    <span class="text-muted ms-2">BO 899 - Páginas 14 a 32 (Resolução CGM N° 019/2018)</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                            <a href="https://angra.rj.gov.br/downloads/bo/BO-896_de_18-05-2018.pdf" target="_blank" class="list-group-item btn btn-outline-success border-0 shadow-sm m-1 list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>1° Bimestre</strong>
                                    <span class="text-muted ms-2">BO 881 - Páginas 8 a 26 (Resolução CGM N° 010/2018) Errata BO 896 - Páginas 16 à 36</span>
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
                <div id="collapse2017" class="accordion-collapse collapse" data-bs-parent="#accordionRREO">
                    <div class="accordion-body">
                        <div class="list-group">
                            <a href="https://angra.rj.gov.br/downloads/bo/BO-862-em-30-01-18-min.pdf" target="_blank" class="list-group-item btn btn-outline-success border-0 shadow-sm m-1 list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>6° Bimestre</strong>
                                    <span class="text-muted ms-2">BO 862 - Páginas 12 a 37 (Resolução CGM 003/2018)</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                            <a href="https://angra.rj.gov.br/downloads/bo/BO-835-em-30-11-17-min.pdf" target="_blank" class="list-group-item btn btn-outline-success border-0 shadow-sm m-1 list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>5° Bimestre</strong>
                                    <span class="text-muted ms-2">BO 835 - Páginas 02 a 21 (Resolução CGM 046/2017)</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                            <a href="https://angra.rj.gov.br/downloads/bo/BO-813-em-26-09-17-ilovepdf-compressed.pdf" target="_blank" class="list-group-item btn btn-outline-success border-0 shadow-sm m-1 list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>4° Bimestre</strong>
                                    <span class="text-muted ms-2">BO 813 - Páginas 17 a 35 (Resolução CGM 035/2017)</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                            <a href="https://angra.rj.gov.br/downloads/bo/BO-792-em-28-07-17-min.pdf" target="_blank" class="list-group-item btn btn-outline-success border-0 shadow-sm m-1 list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>3° Bimestre</strong>
                                    <span class="text-muted ms-2">BO 792 - Páginas 10 a 28 (Resolução CGM 032/2017)</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                            <a href="https://angra.rj.gov.br/downloads/bo/BO-768-em-30-05-17-min.pdf" target="_blank" class="list-group-item btn btn-outline-success border-0 shadow-sm m-1 list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>2° Bimestre</strong>
                                    <span class="text-muted ms-2">BO 768 - Páginas 07 a 26 (Resolução CGM 025/2017)</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                            <a href="https://angra.rj.gov.br/downloads/bo/BO-775-em-12-06-17-min.pdf" target="_blank" class="list-group-item btn btn-outline-success border-0 shadow-sm m-1 list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>1° Bimestre</strong>
                                    <span class="text-muted ms-2">BO 740 - Páginas 03 a 21 (Resolução CGM 015/2017) Errata BO 775 - Páginas 02 a 20</span>
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
                <div id="collapse2016" class="accordion-collapse collapse" data-bs-parent="#accordionRREO">
                    <div class="accordion-body">
                        <div class="list-group">
                            <a href="https://angra.rj.gov.br/downloads/bo/BO-715-em-30-01-17-min-ilovepdf-compressed.pdf" target="_blank" class="list-group-item btn btn-outline-success border-0 shadow-sm m-1 list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>6° Bimestre</strong>
                                    <span class="text-muted ms-2">BO 715 - Páginas 02 a 27 (Resolução CGM 004/2017)</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                            <a href="https://angra.rj.gov.br/downloads/bo/BO-691-em-30-11-16_site.pdf" target="_blank" class="list-group-item btn btn-outline-success border-0 shadow-sm m-1 list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>5° Bimestre</strong>
                                    <span class="text-muted ms-2">BO 691 - Páginas 02 a 21 (Resolução CGM 40/2016)</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                            <a href="https://angra.rj.gov.br/downloads/bo/BO-672-em-28-09-16_site.pdf" target="_blank" class="list-group-item btn btn-outline-success border-0 shadow-sm m-1 list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>4° Bimestre</strong>
                                    <span class="text-muted ms-2">BO 672 - Páginas 03 a 22 (Resolução CGM 35/2016)</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                            <a href="https://angra.rj.gov.br/downloads/bo/BO-655-em-29-07-16_site.pdf" target="_blank" class="list-group-item btn btn-outline-success border-0 shadow-sm m-1 list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>3° Bimestre</strong>
                                    <span class="text-muted ms-2">BO 655 - Páginas 71 a 90 (Resolução CGM 31/2016)</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                            <a href="https://angra.rj.gov.br/downloads/bo/BO-635-em-30-05-2016_site.pdf" target="_blank" class="list-group-item btn btn-outline-success border-0 shadow-sm m-1 list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>2° Bimestre</strong>
                                    <span class="text-muted ms-2">BO 635 - Páginas 14 a 28 (Resolução CGM 26/2016)</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                            <a href="https://angra.rj.gov.br/downloads/bo/bo-620-em-30-03-2016_site.pdf" target="_blank" class="list-group-item btn btn-outline-success border-0 shadow-sm m-1 list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>1° Bimestre</strong>
                                    <span class="text-muted ms-2">BO 620 - Páginas 03 a 22 (Resolução CGM 17/2016)</span>
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
                <div id="collapse2015" class="accordion-collapse collapse" data-bs-parent="#accordionRREO">
                    <div class="accordion-body">
                        <div class="list-group">
                            <a href="https://angra.rj.gov.br/downloads/bo/bo-607-em-29-01-2016_site.pdf" target="_blank" class="list-group-item btn btn-outline-success border-0 shadow-sm m-1 list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>6° Bimestre</strong>
                                    <span class="text-muted ms-2">BO 607 - Páginas 63 a 79 (publicação da Resolução 007/cgm/2016 e os Anexos 1, 2, 3, 4, 5, 6, 7, 8, 12, 13 e 14)</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                            <a href="https://angra.rj.gov.br/downloads/bo/BO-597-em-30-11-2015_site.pdf" target="_blank" class="list-group-item btn btn-outline-success border-0 shadow-sm m-1 list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>5° Bimestre</strong>
                                    <span class="text-muted ms-2">BO 597 - Páginas 12 a 21 (publicação da Resolução 200/CGM/2015 e os Anexos 1, 2, 3, 4, 5, 6, 7, 8, 12, 13 e 14)</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                            <a href="https://angra.rj.gov.br/downloads/bo/BO-584-em-28-09-2015_SITE.pdf" target="_blank" class="list-group-item btn btn-outline-success border-0 shadow-sm m-1 list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>4° Bimestre</strong>
                                    <span class="text-muted ms-2">BO 584 - Páginas 6 a 15 (publicação da Resolução 196/CGM/2015 e os Anexos 1, 2, 3, 4, 5, 6, 7, 8, 12, 13 e 14)</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                            <a href="http://www.angra.rj.gov.br/https://angra.rj.gov.br/downloads/bo/BO-553-em30-03-2015.edicao.extra.grafica.pdf" target="_blank" class="list-group-item btn btn-outline-success border-0 shadow-sm m-1 list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>3° Bimestre</strong>
                                    <span class="text-muted ms-2">BO 571 - Páginas 16 a 26 (publicação da Resolução 195/CGM/2015 e os Anexos 1, 2, 3, 4, 5, 6, 7, 8, 12 e 14)</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                            <a href="http://www.angra.rj.gov.br/https://angra.rj.gov.br/downloads/bo/BO-561-em-29-05-2015-site.pdf" target="_blank" class="list-group-item btn btn-outline-success border-0 shadow-sm m-1 list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>2° Bimestre</strong>
                                    <span class="text-muted ms-2">BO 561 - Páginas 6 a 15 (publicação da Resolução 192/CGM/2015 e os Anexos 1, 2, 3, 4, 5, 6, 7, 8, 12 e 14)</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                            <a href="http://www.angra.rj.gov.br/https://angra.rj.gov.br/downloads/bo/BO-553-em30-03-2015.edicao.extra.grafica.pdf" target="_blank" class="list-group-item btn btn-outline-success border-0 shadow-sm m-1 list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>1° Bimestre</strong>
                                    <span class="text-muted ms-2">BO 553 - Páginas 2 a 10 (publicação da Resolução 191/CGM/2015 e os Anexos 1, 2, 3, 4, 5, 6, 7, 8, 12 e 14)</span>
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
                    <button class="accordion-button collapsed fs-4 text-soft" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2014" aria-expanded="false" aria-controls="collapse2014">
                        2014
                    </button>
                </h2>
                <div id="collapse2014" class="accordion-collapse collapse" data-bs-parent="#accordionRREO">
                    <div class="accordion-body">
                        <div class="list-group">
                            <a href="http://www.angra.rj.gov.br/https://angra.rj.gov.br/downloads/bo/BO-559-em15-05-2015.site.pdf" target="_blank" class="list-group-item btn btn-outline-success border-0 shadow-sm m-1 list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>6° Bimestre</strong>
                                    <span class="text-muted ms-2">BO 559 - Páginas 29 a 41 (Republicação da Resolução 188/CGM/2014 PUBLICADA NA EDIÇÃO Nº 544 DO BOLETIM OFICIAL, DE 30/01/2015 - PÁGINAS 26/38 e os Anexos 1, 2, 3, 4, 5, 6, 7, 8, 12 e 14)</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                            <a href="http://www.angra.rj.gov.br/https://angra.rj.gov.br/downloads/bo/BO-559-em15-05-2015.site.pdf" target="_blank" class="list-group-item btn btn-outline-success border-0 shadow-sm m-1 list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>5° Bimestre</strong>
                                    <span class="text-muted ms-2">BO n° 532 - Páginas 18 à 26 (Publicação da Resolução 185/CGM/2014 e os Anexos 1, 2, 3, 4, 5, 6, 7, 8, 12 e 14)</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                            <a href="https://angra.rj.gov.br/downloads/bo/BO-521-em26-09-2014.site.pdf" target="_blank" class="list-group-item btn btn-outline-success border-0 shadow-sm m-1 list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>4° Bimestre</strong>
                                    <span class="text-muted ms-2">BO n° 521 - Páginas 10 à 18 (Publicação da Resolução 180/CGM/2014 e os Anexos 1, 2, 3, 4, 5, 6, 7, 8, 12 e 14)</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                            <a href="http://www.angra.rj.gov.br/https://angra.rj.gov.br/downloads/bo/BO-512-em25-07-2014.site.pdf" target="_blank" class="list-group-item btn btn-outline-success border-0 shadow-sm m-1 list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>3° Bimestre</strong>
                                    <span class="text-muted ms-2">BO n° 512 - Páginas 27 à 35 (Publicação da Resolução 177/CGM/2014 e os Anexos 1, 2, 3, 4, 5, 6, 7, 8, 12 e 14)</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                            <a href="http://www.angra.rj.gov.br/https://angra.rj.gov.br/downloads/bo/BO-503-em30-05-2014sitepdf.pdf" target="_blank" class="list-group-item btn btn-outline-success border-0 shadow-sm m-1 list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>2° Bimestre</strong>
                                    <span class="text-muted ms-2">BO n° 503 - Páginas 60 à 78 (Publicação da Resolução 174/CGM/2014 e os Anexos 1, 2, 3, 4, 5, 6, 7, 8, 12 e 14)</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                            <a href="http://www.angra.rj.gov.br/https://angra.rj.gov.br/downloads/bo/BO-494-em28-03-2014site.pdf" target="_blank" class="list-group-item btn btn-outline-success border-0 shadow-sm m-1 list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>1° Bimestre</strong>
                                    <span class="text-muted ms-2">BO n° 494 - Páginas 29 à 46 (Publicação da Resolução 172/CGM/2014 e os Anexos 1, 2, 3, 4, 5, 6, 7, 8, 12 e 14)</span>
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
                <div id="collapse2013" class="accordion-collapse collapse" data-bs-parent="#accordionRREO">
                    <div class="accordion-body">
                        <div class="list-group">
                            <a href="http://www.angra.rj.gov.br/https://angra.rj.gov.br/downloads/bo/BO-484-em31-01-2014.site.pdf" target="_blank" class="list-group-item btn btn-outline-success border-0 shadow-sm m-1 list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>6° Bimestre</strong>
                                    <span class="text-muted ms-2">BO n° 510 - Páginas 04 à 16 (Publicação da Resolução 170/CGM/2014 e os Anexos I, II, III, IV, V, VI, VII, VIII, XII e XIV)</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                            <a href="http://www.angra.rj.gov.br/https://angra.rj.gov.br/downloads/bo/BO-473-em29-11-2013site.pdf" target="_blank" class="list-group-item btn btn-outline-success border-0 shadow-sm m-1 list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>5° Bimestre</strong>
                                    <span class="text-muted ms-2">BO n° 473 - Páginas 38 à 54 (Publicação da Resolução 166/CGM/2013 e os Anexos I, II, III, IV, V, VI, VII, VIII, XII e XIV)</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                            <a href="https://angra.rj.gov.br/downloads/bo/BO-461-em27-09-2013site.pdf" target="_blank" class="list-group-item btn btn-outline-success border-0 shadow-sm m-1 list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>4° Bimestre</strong>
                                    <span class="text-muted ms-2">BO 461/2013 - Páginas 34 à 50 (Publicação da Resolução 161/CGM/2013 e os Anexos I, II, III, IV, V, VI, VII, VIII, XII e XIV)</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                            <a href="https://angra.rj.gov.br/downloads/bo/BO-448-em26-07-2013site.pdf" target="_blank" class="list-group-item btn btn-outline-success border-0 shadow-sm m-1 list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>3° Bimestre</strong>
                                    <span class="text-muted ms-2">BO 448/2013 - Páginas 18 à 35 (Publicação da Resolução 160/CGM/2013 e os Anexos I, II, III, IV, V, VI, VII, VIII, XII e XIV)</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                            <a href="../https://angra.rj.gov.br/downloads/bo/BO-438-em29-05-2013grafica.pdf" target="_blank" class="list-group-item btn btn-outline-success border-0 shadow-sm m-1 list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>2° Bimestre</strong>
                                    <span class="text-muted ms-2">BO 438/2013 - Páginas 8 à 25 (Publicação da Resolução 155/CGM/2013 e os Anexos I, II, III, V, VI, VII, IX, X e XVIII)</span>
                                </div>
                                <span class="badge bg-softGray text-green badge-document">PDF</span>
                            </a>
                            <a href="../https://angra.rj.gov.br/downloads/bo/BO-429-em28-03-2013site.pdf" target="_blank" class="list-group-item btn btn-outline-success border-0 shadow-sm m-1 list-group-item-action d-flex justify-content-between align-items-center document-link">
                                <div>
                                    <i class="fas fa-file-pdf text-success me-2"></i>
                                    <strong>1° Bimestre</strong>
                                    <span class="text-muted ms-2">BO 429/2013 - Páginas 13 à 29 (Publicação da Resolução 152/CGM/2013 e os Anexos I, II, III, V, VI, VII, IX, X e XVIII)</span>
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
                <div id="collapse2012" class="accordion-collapse collapse" data-bs-parent="#accordionRREO">
                    <div class="accordion-body">
                        <!-- 1º Bimestre 2012 -->
                        <div class="card mb-3">
                            <div class="card-header bg-light">
                                <h5 class="mb-0">
                                    <button class="text-soft fw-bold btn text-decoration-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2012_1bim">
                                        1° Bimestre
                                    </button>
                                </h5>
                            </div>
                            <div id="collapse2012_1bim" class="collapse">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2012/RREO_2012_1bim/36320122RREO1A.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm m-1 w-100 text-start d-flex justify-content-between align-items-center">
                                                <span>Anexo I A</span>
                                                <span class="badge bg-softGray text-green">PDF</span>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2012/RREO_2012_1bim/36320122RREO1B.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm m-1 w-100 text-start d-flex justify-content-between align-items-center">
                                                <span>Anexo I B</span>
                                                <span class="badge bg-softGray text-green">PDF</span>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2012/RREO_2012_1bim/36320122RREO2.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm m-1 w-100 text-start d-flex justify-content-between align-items-center">
                                                <span>Anexo II</span>
                                                <span class="badge bg-softGray text-green">PDF</span>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2012/RREO_2012_1bim/36320122RREO3.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm m-1 w-100 text-start d-flex justify-content-between align-items-center">
                                                <span>Anexo III</span>
                                                <span class="badge bg-softGray text-green">PDF</span>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2012/RREO_2012_1bim/36320122RREO5.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm m-1 w-100 text-start d-flex justify-content-between align-items-center">
                                                <span>Anexo V</span>
                                                <span class="badge bg-softGray text-green">PDF</span>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2012/RREO_2012_1bim/36320122RREO6.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm m-1 w-100 text-start d-flex justify-content-between align-items-center">
                                                <span>Anexo VI</span>
                                                <span class="badge bg-softGray text-green">PDF</span>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2012/RREO_2012_1bim/36320122RREO7.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm m-1 w-100 text-start d-flex justify-content-between align-items-center">
                                                <span>Anexo VII</span>
                                                <span class="badge bg-softGray text-green">PDF</span>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2012/RREO_2012_1bim/36320122RREO9.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm m-1 w-100 text-start d-flex justify-content-between align-items-center">
                                                <span>Anexo IX</span>
                                                <span class="badge bg-softGray text-green">PDF</span>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2012/RREO_2012_1bim/36320122RREO10.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm m-1 w-100 text-start d-flex justify-content-between align-items-center">
                                                <span>Anexo X</span>
                                                <span class="badge bg-softGray text-green">PDF</span>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2012/RREO_2012_1bim/36320122RREO18.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm m-1 w-100 text-start d-flex justify-content-between align-items-center">
                                                <span>Anexo XVIII</span>
                                                <span class="badge bg-softGray text-green">PDF</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 2º Bimestre 2012 -->
                        <div class="card mb-3">
                            <div class="card-header bg-light">
                                <h5 class="mb-0">
                                    <button class="text-soft fw-bold btn text-decoration-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2012_2bim">
                                        2° Bimestre
                                    </button>
                                </h5>
                            </div>
                            <div id="collapse2012_2bim" class="collapse">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2012/RREO_2012_2bim/36320124RREO1A.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm m-1 w-100 text-start d-flex justify-content-between align-items-center">
                                                <span>Anexo I A</span>
                                                <span class="badge bg-softGray text-green">PDF</span>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2012/RREO_2012_2bim/36320124RREO1B.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm m-1 w-100 text-start d-flex justify-content-between align-items-center">
                                                <span>Anexo I B</span>
                                                <span class="badge bg-softGray text-green">PDF</span>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2012/RREO_2012_2bim/36320124RREO2.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm m-1 w-100 text-start d-flex justify-content-between align-items-center">
                                                <span>Anexo II</span>
                                                <span class="badge bg-softGray text-green">PDF</span>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2012/RREO_2012_2bim/36320124RREO3.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm m-1 w-100 text-start d-flex justify-content-between align-items-center">
                                                <span>Anexo III</span>
                                                <span class="badge bg-softGray text-green">PDF</span>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2012/RREO_2012_2bim/36320124RREO5.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm m-1 w-100 text-start d-flex justify-content-between align-items-center">
                                                <span>Anexo V</span>
                                                <span class="badge bg-softGray text-green">PDF</span>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2012/RREO_2012_2bim/36320124RREO6.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm m-1 w-100 text-start d-flex justify-content-between align-items-center">
                                                <span>Anexo VI</span>
                                                <span class="badge bg-softGray text-green">PDF</span>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2012/RREO_2012_2bim/36320124RREO7.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm m-1 w-100 text-start d-flex justify-content-between align-items-center">
                                                <span>Anexo VII</span>
                                                <span class="badge bg-softGray text-green">PDF</span>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2012/RREO_2012_2bim/36320124RREO9.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm m-1 w-100 text-start d-flex justify-content-between align-items-center">
                                                <span>Anexo IX</span>
                                                <span class="badge bg-softGray text-green">PDF</span>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2012/RREO_2012_2bim/36320124RREO10.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm m-1 w-100 text-start d-flex justify-content-between align-items-center">
                                                <span>Anexo X</span>
                                                <span class="badge bg-softGray text-green">PDF</span>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2012/RREO_2012_2bim/36320124RREO18.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm m-1 w-100 text-start d-flex justify-content-between align-items-center">
                                                <span>Anexo XVIII</span>
                                                <span class="badge bg-softGray text-green">PDF</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 3º Bimestre 2012 -->
                        <div class="card mb-3">
                            <div class="card-header bg-light">
                                <h5 class="mb-0">
                                    <button class="text-soft fw-bold btn text-decoration-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2012_3bim">
                                        3° Bimestre
                                    </button>
                                </h5>
                            </div>
                            <div id="collapse2012_3bim" class="collapse">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2012/RREO_2012_3bim/36320126RREO1A.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm m-1 w-100 text-start d-flex justify-content-between align-items-center">
                                                <span>Anexo I A</span>
                                                <span class="badge bg-softGray text-green">PDF</span>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2012/RREO_2012_3bim/36320126RREO1B.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm m-1 w-100 text-start d-flex justify-content-between align-items-center">
                                                <span>Anexo I B</span>
                                                <span class="badge bg-softGray text-green">PDF</span>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2012/RREO_2012_3bim/36320126RREO2.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm m-1 w-100 text-start d-flex justify-content-between align-items-center">
                                                <span>Anexo II</span>
                                                <span class="badge bg-softGray text-green">PDF</span>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2012/RREO_2012_3bim/36320126RREO3.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm m-1 w-100 text-start d-flex justify-content-between align-items-center">
                                                <span>Anexo III</span>
                                                <span class="badge bg-softGray text-green">PDF</span>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2012/RREO_2012_3bim/36320126RREO5.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm m-1 w-100 text-start d-flex justify-content-between align-items-center">
                                                <span>Anexo V</span>
                                                <span class="badge bg-softGray text-green">PDF</span>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2012/RREO_2012_3bim/36320126RREO6.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm m-1 w-100 text-start d-flex justify-content-between align-items-center">
                                                <span>Anexo VI</span>
                                                <span class="badge bg-softGray text-green">PDF</span>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2012/RREO_2012_3bim/36320126RREO7.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm m-1 w-100 text-start d-flex justify-content-between align-items-center">
                                                <span>Anexo VII</span>
                                                <span class="badge bg-softGray text-green">PDF</span>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2012/RREO_2012_3bim/36320126RREO9.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm m-1 w-100 text-start d-flex justify-content-between align-items-center">
                                                <span>Anexo IX</span>
                                                <span class="badge bg-softGray text-green">PDF</span>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2012/RREO_2012_3bim/36320126RREO10.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm m-1 w-100 text-start d-flex justify-content-between align-items-center">
                                                <span>Anexo X</span>
                                                <span class="badge bg-softGray text-green">PDF</span>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2012/RREO_2012_3bim/36320126RREO16.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm m-1 w-100 text-start d-flex justify-content-between align-items-center">
                                                <span>Anexo XVI</span>
                                                <span class="badge bg-softGray text-green">PDF</span>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2012/RREO_2012_3bim/36320126RREO18.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm m-1 w-100 text-start d-flex justify-content-between align-items-center">
                                                <span>Anexo XVIII</span>
                                                <span class="badge bg-softGray text-green">PDF</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 4º Bimestre 2012 -->
                        <div class="card mb-3">
                            <div class="card-header bg-light">
                                <h5 class="mb-0">
                                    <button class="text-soft fw-bold btn text-decoration-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2012_4bim">
                                        4° Bimestre
                                    </button>
                                </h5>
                            </div>
                            <div id="collapse2012_4bim" class="collapse">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <a href="asp/download/CGM/fiscal/2012/RREO_2012_1bim/36320128RREO1A.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm m-1 w-100 text-start d-flex justify-content-between align-items-center">
                                                <span>Anexo I A</span>
                                                <span class="badge bg-softGray text-green">PDF</span>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2012/RREO_2012_4bim/36320128RREO1B.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm m-1 w-100 text-start d-flex justify-content-between align-items-center">
                                                <span>Anexo I B</span>
                                                <span class="badge bg-softGray text-green">PDF</span>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2012/RREO_2012_4bim/36320128RREO2.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm m-1 w-100 text-start d-flex justify-content-between align-items-center">
                                                <span>Anexo II</span>
                                                <span class="badge bg-softGray text-green">PDF</span>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2012/RREO_2012_4bim/36320128RREO3.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm m-1 w-100 text-start d-flex justify-content-between align-items-center">
                                                <span>Anexo III</span>
                                                <span class="badge bg-softGray text-green">PDF</span>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2012/RREO_2012_4bim/36320128RREO5.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm m-1 w-100 text-start d-flex justify-content-between align-items-center">
                                                <span>Anexo V</span>
                                                <span class="badge bg-softGray text-green">PDF</span>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2012/RREO_2012_4bim/36320128RREO6.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm m-1 w-100 text-start d-flex justify-content-between align-items-center">
                                                <span>Anexo VI</span>
                                                <span class="badge bg-softGray text-green">PDF</span>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2012/RREO_2012_4bim/36320128RREO7.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm m-1 w-100 text-start d-flex justify-content-between align-items-center">
                                                <span>Anexo VII</span>
                                                <span class="badge bg-softGray text-green">PDF</span>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2012/RREO_2012_4bim/36320128RREO9.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm m-1 w-100 text-start d-flex justify-content-between align-items-center">
                                                <span>Anexo IX</span>
                                                <span class="badge bg-softGray text-green">PDF</span>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2012/RREO_2012_4bim/36320128RREO10.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm m-1 w-100 text-start d-flex justify-content-between align-items-center">
                                                <span>Anexo X</span>
                                                <span class="badge bg-softGray text-green">PDF</span>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2012/RREO_2012_4bim/36320128RREO18.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm m-1 w-100 text-start d-flex justify-content-between align-items-center">
                                                <span>Anexo XVIII</span>
                                                <span class="badge bg-softGray text-green">PDF</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 5º Bimestre 2012 -->
                        <div class="card mb-3">
                            <div class="card-header bg-light">
                                <h5 class="mb-0">
                                    <button class="text-soft fw-bold btn text-decoration-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2012_5bim">
                                        5° Bimestre
                                    </button>
                                </h5>
                            </div>
                            <div id="collapse2012_5bim" class="collapse">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2012/RREO_2012_5bim/363201210RREO1A.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm m-1 w-100 text-start d-flex justify-content-between align-items-center">
                                                <span>Anexo I A</span>
                                                <span class="badge bg-softGray text-green">PDF</span>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2012/RREO_2012_5bim/363201210RREO1B.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm m-1 w-100 text-start d-flex justify-content-between align-items-center">
                                                <span>Anexo I B</span>
                                                <span class="badge bg-softGray text-green">PDF</span>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2012/RREO_2012_5bim/363201210RREO2.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm m-1 w-100 text-start d-flex justify-content-between align-items-center">
                                                <span>Anexo II</span>
                                                <span class="badge bg-softGray text-green">PDF</span>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2012/RREO_2012_5bim/363201210RREO3.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm m-1 w-100 text-start d-flex justify-content-between align-items-center">
                                                <span>Anexo III</span>
                                                <span class="badge bg-softGray text-green">PDF</span>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2012/RREO_2012_5bim/363201210RREO5.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm m-1 w-100 text-start d-flex justify-content-between align-items-center">
                                                <span>Anexo V</span>
                                                <span class="badge bg-softGray text-green">PDF</span>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2012/RREO_2012_5bim/363201210RREO6.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm m-1 w-100 text-start d-flex justify-content-between align-items-center">
                                                <span>Anexo VI</span>
                                                <span class="badge bg-softGray text-green">PDF</span>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2012/RREO_2012_5bim/363201210RREO7.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm m-1 w-100 text-start d-flex justify-content-between align-items-center">
                                                <span>Anexo VII</span>
                                                <span class="badge bg-softGray text-green">PDF</span>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2012/RREO_2012_5bim/363201210RREO9.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm m-1 w-100 text-start d-flex justify-content-between align-items-center">
                                                <span>Anexo IX</span>
                                                <span class="badge bg-softGray text-green">PDF</span>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2012/RREO_2012_5bim/363201210RREO10.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm m-1 w-100 text-start d-flex justify-content-between align-items-center">
                                                <span>Anexo X</span>
                                                <span class="badge bg-softGray text-green">PDF</span>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2012/RREO_2012_5bim/363201210RREO18.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm m-1 w-100 text-start d-flex justify-content-between align-items-center">
                                                <span>Anexo XVIII</span>
                                                <span class="badge bg-softGray text-green">PDF</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 6º Bimestre 2012 -->
                        <div class="card mb-3">
                            <div class="card-header bg-light">
                                <h5 class="mb-0">
                                    <button class="text-soft fw-bold btn text-decoration-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2012_6bim">
                                        6° Bimestre
                                    </button>
                                </h5>
                            </div>
                            <div id="collapse2012_6bim" class="collapse">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2012/RREO_2012_6bim/363201212RREO1A.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm m-1 w-100 text-start d-flex justify-content-between align-items-center">
                                                <span>Anexo I A</span>
                                                <span class="badge bg-softGray text-green">PDF</span>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2012/RREO_2012_6bim/363201212RREO1B.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm m-1 w-100 text-start d-flex justify-content-between align-items-center">
                                                <span>Anexo I B</span>
                                                <span class="badge bg-softGray text-green">PDF</span>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2012/RREO_2012_6bim/363201212RREO2.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm m-1 w-100 text-start d-flex justify-content-between align-items-center">
                                                <span>Anexo II</span>
                                                <span class="badge bg-softGray text-green">PDF</span>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2012/RREO_2012_6bim/363201212RREO3.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm m-1 w-100 text-start d-flex justify-content-between align-items-center">
                                                <span>Anexo III</span>
                                                <span class="badge bg-softGray text-green">PDF</span>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2012/RREO_2012_6bim/363201212RREO4.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm m-1 w-100 text-start d-flex justify-content-between align-items-center">
                                                <span>Anexo IV</span>
                                                <span class="badge bg-softGray text-green">PDF</span>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2012/RREO_2012_6bim/363201212RREO6.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm m-1 w-100 text-start d-flex justify-content-between align-items-center">
                                                <span>Anexo VI</span>
                                                <span class="badge bg-softGray text-green">PDF</span>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2012/RREO_2012_6bim/363201212RREO7.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm m-1 w-100 text-start d-flex justify-content-between align-items-center">
                                                <span>Anexo VII</span>
                                                <span class="badge bg-softGray text-green">PDF</span>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2012/RREO_2012_6bim/363201212RREO9.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm m-1 w-100 text-start d-flex justify-content-between align-items-center">
                                                <span>Anexo IX</span>
                                                <span class="badge bg-softGray text-green">PDF</span>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2012/RREO_2012_6bim/363201212RREO10.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm m-1 w-100 text-start d-flex justify-content-between align-items-center">
                                                <span>Anexo X</span>
                                                <span class="badge bg-softGray text-green">PDF</span>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2012/RREO_2012_6bim/363201212RREO11.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm m-1 w-100 text-start d-flex justify-content-between align-items-center">
                                                <span>Anexo XI</span>
                                                <span class="badge bg-softGray text-green">PDF</span>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2012/RREO_2012_6bim/363201212RREO13.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm m-1 w-100 text-start d-flex justify-content-between align-items-center">
                                                <span>Anexo XIII</span>
                                                <span class="badge bg-softGray text-green">PDF</span>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2012/RREO_2012_6bim/363201212RREO14.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm m-1 w-100 text-start d-flex justify-content-between align-items-center">
                                                <span>Anexo XIV</span>
                                                <span class="badge bg-softGray text-green">PDF</span>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2012/RREO_2012_6bim/363201212RREO16.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm m-1 w-100 text-start d-flex justify-content-between align-items-center">
                                                <span>Anexo XVI</span>
                                                <span class="badge bg-softGray text-green">PDF</span>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2012/RREO_2012_6bim/363201212RREO17.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm m-1 w-100 text-start d-flex justify-content-between align-items-center">
                                                <span>Anexo XVII</span>
                                                <span class="badge bg-softGray text-green">PDF</span>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <a href="https://angra.rj.gov.br/downloads/CGM/fiscal/2012/RREO_2012_6bim/363201212RREO18.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm m-1 w-100 text-start d-flex justify-content-between align-items-center">
                                                <span>Anexo XVIII</span>
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