@extends('theme')
@section("title", "Portal da Transparência - Angra dos Reis :: Incentivos Culturais")
@section('content')
<section>
    <div class="container my-5">

        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ env("PORTAL_ANGRA") }}">Página Inicial</a></li>
                <li class="breadcrumb-item"><a href="{{ route('index') }}">Portal da Transparência</a></li>
                <li class="breadcrumb-item active">Incentivos Culturais</li>
            </ol>
        </nav>

        <!-- Título Principal -->
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h1 class="display-5 fw-bold text-soft">Incentivos Culturais</h1>
                <p class="lead fs-4 text-soft">Prefeitura Municipal de Angra dos Reis</p>
            </div>
        </div>

        <div class="row g-4 justify-content-center">
            <!-- Pessoa Jurídica - Imobiliário -->
            <div class="col-xl-5 col-lg-6 col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="bg-green bg-opacity-10 p-3 rounded-3 d-inline-flex mb-4">
                            <i class="fa-solid fa-theater-masks text-success fs-2"></i>
                        </div>
                        <h3 class="card-title text-dark mb-3">2024</h3>
                        <p class="text-muted mb-4">Demonstrativo - Renúncia de receita como incentivo à cultura</p>
                        <a href="https://angra.rj.gov.br/downloads/incentivos-culturais/Projetos_aprovados_na_Lei_de_incentivo_2024.pdf" target="_blank" class="btn btn-success btn-lg">
                            <i class="fas fs-4 fa-download me-2"></i> Baixar Demonstrativo
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection