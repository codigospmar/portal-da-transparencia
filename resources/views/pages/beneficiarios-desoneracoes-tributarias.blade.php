@extends('theme')
@section("title", "Portal da Transparência - Angra dos Reis :: Beneficiários das Desonerações Tributárias")
@section('content')
<section>
    <div class="container my-5">

       <!-- Breadcrumb -->
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('index') }}">Página Inicial</a></li>
                <li class="breadcrumb-item active">Beneficiários das Desonerações Tributárias</li>
            </ol>
        </nav>

        <!-- Título Principal -->
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h1 class="display-5 fw-bold text-soft">Beneficiários das Desonerações Tributárias</h1>
                <p class="lead fs-4 text-soft">Benefícios fiscais</p>

            </div>
        </div>

        <div class="row g-4 justify-content-center">
            <!-- Pessoa Jurídica - Imobiliário -->
            <div class="col-xl-5 col-lg-6 col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="bg-green bg-opacity-10 p-3 rounded-3 d-inline-flex mb-4">
                            <i class="fa-solid fa-building text-success fs-2"></i>
                        </div>
                        <h3 class="card-title text-dark mb-3">Pessoa Jurídica - Imobiliário</h3>
                        <p class="text-muted mb-4">Arquivo CSV com dados dos beneficiários de desonerações tributárias no imposto imobiliário</p>
                        <a href="https://angra.rj.gov.br/downloads/Transparencia/BenFiscais/Consulta_de_Imoveis_x_Beneficios_Fiscais___imobiliario_csv.csv" target="_blank" class="btn btn-success">
                            <i class="fas fs-4 fa-download me-2"></i> Baixar CSV
                        </a>
                    </div>
                </div>
            </div>

            <!-- Pessoa Jurídica - Mobiliário -->
            <div class="col-xl-5 col-lg-6 col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="bg-green bg-opacity-10 p-3 rounded-3 d-inline-flex mb-4">
                            <i class="fas fs-2 fa-warehouse fa-2x text-success"></i>
                        </div>
                        <h3 class="card-title text-dark mb-3">Pessoa Jurídica - Mobiliário</h3>
                        <p class="text-muted mb-4">Arquivo CSV com dados dos beneficiários de desonerações tributárias no imposto mobiliário</p>
                        <a href="https://angra.rj.gov.br/downloads/Transparencia/BenFiscais/Consulta_de_Contribuintes_x_Beneficios_Fiscais_PJ___MOBILIARIO_csv.csv" target="_blank" class="btn btn-success">
                            <i class="fas fs-4 fa-download me-2"></i> Baixar CSV
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Data de Atualização -->
        <div class="row mt-5">
            <div class="col-12 text-center">
                <p class="text-muted"><em><small>Atualizado em: 27 de maio de 2025</small></em></p>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection