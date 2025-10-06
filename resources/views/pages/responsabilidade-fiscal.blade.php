@extends('theme')
@section("title", "Portal da Transparência - Angra dos Reis :: Emendas Parlamentares Impositivas")
@section('content')
<section>
    <div class="container my-5 pb-5">

        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('index') }}">Página Inicial</a></li>
                <li class="breadcrumb-item active">Lei de Responsabilidade Fiscal</li>
            </ol>
        </nav>

        <!-- Título Principal -->
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h1 class="display-5 fw-bold text-soft">Relatórios da Lei de Responsabilidade Fiscal</h1>
            </div>
        </div>

        <!-- Botão Lei Complementar -->
        <div class="row mb-4 justify-content-center">
            <div class="col-auto">
                <a href="https://falabr.cgu.gov.br/publico/RJ/AngradosReis/Manifestacao/RegistrarManifestacao" target="_blank" class="btn btn-outline-success border-0 shadow btn-lg">
                    Lei Complementar Nº 101/2020
                </a>
            </div>
        </div>

        <!-- Texto Explicativo -->
        <div class="row mb-5">
            <div class="col-12">
                <p class="lead">A Lei Complementar nº 101, de 04 de maio de 2000 - Lei de Responsabilidade Fiscal (LRF) estabelece um conjunto de disposições no campo das finanças públicas, o qual objetiva o equilíbrio das contas públicas e o estabelecimento de metas fiscais, além do acompanhamento, avaliação e ajuste da execução do que foi planejado e orçado, tornando-se um estímulo para que se busque aprimorar a gestão dos recursos públicos mediante o aperfeiçoamento dos processos de planejamento, execução e controle dos gastos governamentais.</p>
                <p class="lead">Nesse sentido é que divulgamos neste espaço o <strong>Relatório Resumido da Execução Orçamentária - RREO</strong> e o <strong>Relatório de Gestão Fiscal do Município - RGF</strong>, importantes instrumentos de transparência da gestão fiscal previstos na LRF.</p>
            </div>
        </div>

        <!-- Cards RREO e RGF -->
        <div class="row g-4 justify-content-center">
            <!-- RREO -->
            <div class="col-xl-5 col-lg-6 col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="bg-green bg-opacity-10 p-3 rounded-3 d-inline-flex mb-4">
                            <i class="fas fa-file-alt text-success fs-2"></i>
                        </div>
                        <h3 class="card-title text-dark mb-3">RREO</h3>
                        <p class="text-muted mb-4">Relatório Resumido de Execução Fiscal</p>
                        <a href="{{ route('transparencia.rreo') }}" class="btn btn-success btn-lg">
                            <i class="fas fa-eye me-2"></i> Acessar Relatório
                        </a>
                    </div>
                </div>
            </div>

            <!-- RGF -->
            <div class="col-xl-5 col-lg-6 col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="bg-green bg-opacity-10 p-3 rounded-3 d-inline-flex mb-4">
                            <i class="fas fa-chart-line text-success fs-2"></i>
                        </div>
                        <h3 class="card-title text-dark mb-3">RGF</h3>
                        <p class="text-muted mb-4">Relatório de Gestão Fiscal</p>
                        <a href="{{ route('transparencia.rgf') }}" class="btn btn-success btn-lg">
                            <i class="fas fa-eye me-2"></i> Acessar Relatório
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection