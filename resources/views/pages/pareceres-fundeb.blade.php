@extends('theme')
@section("title", "Portal da Transparência - Angra dos Reis :: Pareceres do FUNDEB")
@section('content')
<section>
    <div class="container my-5 pb-5">

        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('index') }}">Página Inicial</a></li>
                <li class="breadcrumb-item active">Pareceres FUNDEB</li>
            </ol>
        </nav>

        <!-- Título Principal -->
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h1 class="display-5 fw-bold text-soft">Pareceres FUNDEB</h1>
                <p class="lead fs-4 text-soft">Acesse os pareceres de forma rápida e intuitiva</p>
            </div>
        </div>

        <!-- Cards dos Anos -->
        <div class="row g-4">
            <!-- 2024 -->
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm year-card">
                    <div class="card-body text-center p-4">
                        <h3 class="card-title text-soft mb-3">2024</h3>
                        <p class="text-muted mb-3">Parecer conclusivo do Conselho de Acompanhamento e Controle Social</p>
                        <a href="https://angra.rj.gov.br/downloads/Transparencia/Parecer-FUNDEB-2024.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm">
                            <i class="fas fs-4 fa-download me-2"></i> Baixar
                        </a>
                    </div>
                </div>
            </div>

            <!-- 2023 -->
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm year-card">
                    <div class="card-body text-center p-4">
                        <h3 class="card-title text-soft mb-3">2023</h3>
                        <p class="text-muted mb-3">Parecer conclusivo do Conselho de Acompanhamento e Controle Social</p>
                        <a href="https://angra.rj.gov.br/downloads/Transparencia/Parecer-CACS-FUNDEB-2023.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm">
                            <i class="fas fs-4 fa-download me-2"></i> Baixar
                        </a>
                    </div>
                </div>
            </div>

            <!-- 2022 -->
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm year-card">
                    <div class="card-body text-center p-4">
                        <h3 class="card-title text-soft mb-3">2022</h3>
                        <p class="text-muted mb-3">Parecer conclusivo do Conselho de Acompanhamento e Controle Social</p>
                        <a href="https://angra.rj.gov.br/downloads/Transparencia/Parecer-FUNDEB-2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm">
                            <i class="fas fs-4 fa-download me-2"></i> Baixar
                        </a>
                    </div>
                </div>
            </div>

            <!-- 2021 -->
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm year-card">
                    <div class="card-body text-center p-4">
                        <h3 class="card-title text-soft mb-3">2021</h3>
                        <p class="text-muted mb-3">Parecer conclusivo do Conselho de Acompanhamento e Controle Social</p>
                        <a href="https://angra.rj.gov.br/downloads/Transparencia/Parecer-FUNDEB-2021.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm">
                            <i class="fas fs-4 fa-download me-2"></i> Baixar
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection