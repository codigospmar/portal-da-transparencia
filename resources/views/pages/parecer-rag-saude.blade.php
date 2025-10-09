@extends('theme')
@section("title", "Portal da Transparência - Angra dos Reis :: Pareceres do Relatório Anual de Gestão - Saúde")
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
                    'title' => __("Pareceres do Relatório Anual de Gestão - Saúde"),
                ],
            ];
        @endphp
            
        @include('components._breadcrumb', $breadcrumbs)

        <!-- Título Principal -->
        @include('components._titleMain', [
            "title" => __("Pareceres do Relatório Anual de Gestão - Saúde"),
            "summary" => __("Acesse os pareceres anuais de forma rápida e intuitiva."),
        ])

        <!-- Cards dos Anos -->
        <div class="row g-4">
            <!-- 2024 -->
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm d-flex p-2">
                    <div class="card-body text-center p-4">
                        <h3 class="card-title text-soft mb-3">2024</h3>
                        <p class="text-muted mb-3">Aprova o Relatório Anual de Gestão do exercício de 2024</p>
                    </div>
                    <div class="mt-auto">
                        <a href="https://angra.rj.gov.br/downloads/Transparencia/Paracer-RAG_2024.pdf" target="_blank" class="btn btn-outline-success shadow-sm border-0 mb-3 mx-2">
                            <i class="fas fs-4 fa-download me-2"></i> Baixar
                        </a>
                    </div>
                </div>
            </div>

            <!-- 2023 -->
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm d-flex p-2">
                    <div class="card-body text-center p-4">
                        <h3 class="card-title text-soft mb-3">2023</h3>
                        <p class="text-muted mb-3">Resolução Nº 013/2024/CMSAR - Aprova o Relatório Anual de Gestão do exercício de 2023</p>
                    </div>
                    <div class="mt-auto">
                        <a href="https://angra.rj.gov.br/downloads/Transparencia/Paracer-RAG_2023.pdf" target="_blank" class="btn btn-outline-success shadow-sm border-0 mb-3 mx-2">
                            <i class="fas fs-4 fa-download me-2"></i> Baixar
                        </a>
                    </div>
                </div>
            </div>

            <!-- 2022 -->
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm d-flex p-2">
                    <div class="card-body text-center p-4">
                        <h3 class="card-title text-soft mb-3">2022</h3>
                        <p class="text-muted mb-3">Resolução Nº 015/2023 - Aprova o Relatório Anual de Gestão do exercício de 2022</p>
                    </div>
                    <div class="mt-auto">
                        <a href="https://angra.rj.gov.br/downloads/Transparencia/Paracer-RAG_2022.pdf" target="_blank" class="btn btn-outline-success shadow-sm border-0 mb-3 mx-2">
                            <i class="fas fs-4 fa-download me-2"></i> Baixar
                        </a>
                    </div>
                </div>
            </div>

            <!-- 2021 -->
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm d-flex p-2">
                    <div class="card-body text-center p-4">
                        <h3 class="card-title text-soft mb-3">2021</h3>
                        <p class="text-muted mb-3">Parecer do Relatório Anual de Gestão do ano de 2021</p>
                    </div>
                    <div class="mt-auto">
                        <a href="https://angra.rj.gov.br/downloads/Transparencia/Paracer-RAG_2022.pdf" target="_blank" class="btn btn-outline-success shadow-sm border-0 mb-3 mx-2">
                            <i class="fas fs-4 fa-download me-2"></i> Baixar
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection