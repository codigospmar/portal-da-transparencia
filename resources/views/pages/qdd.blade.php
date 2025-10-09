@extends('theme')
@section("title", "Portal da Transparência - Angra dos Reis :: QDD")
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
                    'title' => __("QDD"),
                ],
            ];
        @endphp

        @include('components._breadcrumb', $breadcrumbs)

        <!-- Título Principal -->
        @include('components._titleMain', [
            "title" => __("Quadro de Detalhamentos da Despesa - QDD"),
            "summary" => __(""),
        ])
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h1 class="display-5 fw-bold text-soft"></h1>
            </div>
        </div>

        <!-- 2025 -->
        <div class="row mb-4">
            <div class="col-12">
                <h2 class="text-soft text-center mb-4">2025</h2>
            </div>
        </div>

        <div class="row g-4 justify-content-center mb-5">
            <!-- QDD 2025 -->
            <div class="col-xl-5 col-lg-6 col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="bg-green bg-opacity-10 p-3 rounded-3 d-inline-flex mb-4 text-white">
                            <i class="fa-solid fa-file-invoice-dollar text-white fs-2"></i>
                        </div>
                        <h3 class="card-title text-dark mb-3">QDD 2025</h3>
                        <p class="text-muted mb-4">Quadro de Detalhamento da Despesa (QDD)</p>
                        <a href="https://portal.angra.rj.gov.br/downloads/CGM/leisorcamentarias/2025/qdd-2025.pdf" target="_blank" class="btn btn-success">
                            <i class="fas fs-4 fa-download me-2"></i> Baixar PDF
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- 2024 -->
        <div class="row mb-4">
            <div class="col-12">
                <h2 class="text-soft text-center mb-4">2024</h2>
            </div>
        </div>

        <div class="row g-4 justify-content-center mb-5">
            <!-- QDD 2024 -->
            <div class="col-xl-5 col-lg-6 col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="bg-green bg-opacity-10 p-3 rounded-3 d-inline-flex mb-4 text-white">
                            <i class="fa-solid fa-file-invoice-dollar text-white fs-2"></i>
                        </div>
                        <h3 class="card-title text-dark mb-3">QDD 2024</h3>
                        <p class="text-muted mb-4">Quadro de Detalhamento da Despesa (QDD) - Orçamento Inicial.</p>
                        <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2024/QDD-2024.pdf" target="_blank" class="btn btn-success">
                            <i class="fas fs-4 fa-download me-2"></i> Baixar PDF
                        </a>
                    </div>
                </div>
            </div>

            <!-- Decreto 2024 -->
            <div class="col-xl-5 col-lg-6 col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="bg-green bg-opacity-10 p-3 rounded-3 d-inline-flex mb-4 text-white">
                            <i class="fas fs-2 fa-gavel text-white"></i>
                        </div>
                        <h3 class="card-title text-dark mb-3">Decreto Nº 13.308/2023</h3>
                        <p class="text-muted mb-4">Aprova os Quadros de Detalhamento das Despesas Orçamentárias para o Exercício de 2024 e dá Outras Providências.</p>
                        <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2024/QDD-2024_Decreto-13308-2023.pdf" target="_blank" class="btn btn-success">
                            <i class="fas fs-4 fa-download me-2"></i> Baixar PDF
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- 2023 -->
        <div class="row mb-4">
            <div class="col-12">
                <h2 class="text-center text-soft mb-4">2023</h2>
            </div>
        </div>

        <div class="row g-4 justify-content-center">
            <!-- QDD 2023 -->
            <div class="col-xl-5 col-lg-6 col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="bg-green bg-opacity-10 p-3 rounded-3 d-inline-flex mb-4 text-white">
                            <i class="fa-solid fa-file-invoice-dollar text-white fs-2"></i>
                        </div>
                        <h3 class="card-title text-dark mb-3">QDD 2023</h3>
                        <p class="text-muted mb-4">Quadro de Detalhamento da Despesa (QDD) - Orçamento Inicial.</p>
                        <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2023/1 - QDD 2023.pdf" target="_blank" class="btn btn-success">
                            <i class="fas fs-4 fa-download me-2"></i> Baixar PDF
                        </a>
                    </div>
                </div>
            </div>

            <!-- Decreto 2023 -->
            <div class="col-xl-5 col-lg-6 col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="bg-green bg-opacity-10 p-3 rounded-3 d-inline-flex mb-4 text-white">
                            <i class="fas fs-2 fa-gavel text-white"></i>
                        </div>
                        <h3 class="card-title text-dark mb-3">Decreto Nº 12.858/2022</h3>
                        <p class="text-muted mb-4">Aprova os Quadros de Detalhamento das Despesas Orçamentárias para o Exercício de 2023 e dá Outras Providências.</p>
                        <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2023/Decreto-12.858-2022.pdf" target="_blank" class="btn btn-success">
                            <i class="fas fs-4 fa-download me-2"></i> Baixar PDF
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection