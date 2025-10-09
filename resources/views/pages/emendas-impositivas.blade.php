@extends('theme')
@section("title", "Portal da Transparência - Angra dos Reis :: Emendas Parlamentares Impositivas")
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
                    'title' => __("Emendas Parlamentares Impositivas"),
                ],
            ];
        @endphp
        
        @include('components._breadcrumb', $breadcrumbs)

        <!-- Título Principal -->
        @include('components._titleMain', [
            "title" => __("Emendas Parlamentares Impositivas"),
            "summary" => __(""),
        ])

        <!-- 2024 -->
        <div class="row mb-4">
            <div class="col-12">
                <h2 class="text-center text-soft mb-4">2024</h2>
            </div>
        </div>

        <div class="row g-4 justify-content-center mb-5">
            <!-- Emenda 2024 -->
            <div class="col-xl-6 col-lg-8 col-md-10">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="bg-green bg-opacity-10 p-3 rounded-3 d-inline-flex mb-4 text-white">
                            <i class="fa-solid fa-file-contract text-white fs-2"></i>
                        </div>
                        <h3 class="card-title text-dark mb-3">Emenda Parlamentar: 202437650003</h3>
                        <p class="text-muted mb-4">Deputada Soraya Santos</p>
                        <a href="https://angra.rj.gov.br/downloads/Transparencia/EmendaImpositiva/202437650003-SORAYA-SANTOS.pdf" target="_blank" class="btn btn-success">
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

        <div class="row g-4 justify-content-center mb-5">
            <!-- Sem Emenda 2023 -->
            <div class="col-xl-6 col-lg-8 col-md-10">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="bg-green bg-opacity-10 p-3 rounded-3 d-inline-flex mb-4 text-white">
                            <i class="fa-solid fa-circle-info text-white fs-2"></i>
                        </div>
                        <h3 class="card-title text-dark mb-3">Informação</h3>
                        <p class="text-muted mb-4">O município não recebeu emenda impositiva individual (orçamento secreto) no exercício de 2023.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- 2022 -->
        <div class="row mb-4">
            <div class="col-12">
                <h2 class="text-center text-soft mb-4">2022</h2>
            </div>
        </div>

        <div class="row g-4 justify-content-center mb-5">
            <!-- Sem Emenda 2022 -->
            <div class="col-xl-6 col-lg-8 col-md-10">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="bg-green bg-opacity-10 p-3 rounded-3 d-inline-flex mb-4 text-white">
                            <i class="fa-solid fa-circle-info text-white fs-2"></i>
                        </div>
                        <h3 class="card-title text-dark mb-3">Informação</h3>
                        <p class="text-muted mb-4">O município não recebeu emenda impositiva individual (orçamento secreto) no exercício de 2022.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Informações Legais -->
        <div class="row mt-5">
            <div class="col-12 text-center">
                <p class="text-muted"><em><small>Atualizado em: 29 de maio de 2025</small></em></p>
                <p class="text-muted small">
                    Essas informações estão disponíveis no site do Município (Portal da Transparência) conforme inciso XXXIII, artigo 5º. da CFRB c/c a Lei federal Nº. 12.627/11 e o artigo 48 da Lei Federal Nº. 101/00.
                </p>
            </div>
        </div>

    </div>
</section>
@endsection