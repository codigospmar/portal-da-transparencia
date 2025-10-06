@extends('theme')
@section("title", "Portal da Transparência - Angra dos Reis :: Relatório de Estoques de Medicamentos")
@section('content')
<main class="main py-4">
    <div class="container py-4">
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ env("PORTAL_ANGRA") }}">Página Inicial</a></li>
                <li class="breadcrumb-item"><a href="{{ route('index') }}">Portal da Transparência</a></li>
                <li class="breadcrumb-item active">Relatório de Estoques de Medicamentos - Farmácias Públicas</li>
            </ol>
        </nav>

        <!-- Título Principal -->
        <div class="row mb-5 my-2">
            <div class="col-12 text-center">
                <h1 class="display-6 fw-bold text-soft">Relatório de Estoques de Medicamentos das Farmácias Públicas</h1>
                <p class="lead text-muted">Acompanhe a disponibilidade de medicamentos na rede pública municipal.</p>
            </div>
        </div>


        <!-- Cards de Estoques -->
        <div class="row mb-5">
            <!-- Julho 2025 -->
            <div class="col-md-6 mb-4">
                <div class="card h-100 medication-card">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-success rounded-5 p-3 me-3">
                                <i class="fas fs-3 fa-pills text-white fa-lg"></i>
                            </div>
                            <div>
                                <h5 class="card-title mb-0">Estoque em Julho de 2025</h5>
                                <small class="text-muted">Relatório atualizado</small>
                            </div>
                        </div>
                        <p class="card-text">
                            Relatório histórico dos medicamentos disponíveis em maio de 2025.
                        </p>
                        <div class="d-flex justify-content-between align-items-center my-3">
                            <span class="badge bg-success">Disponível</span>
                            <a href="https://angra.rj.gov.br/downloads/SSA/MEDICAMENTOS-DA-REDE-BASICO-DISP-11072025.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm btn-sm">
                                <i class="fas fa-download me-1"></i> Baixar PDF
                            </a>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent">
                        <small class="text-muted">
                            <i class="fas fa-calendar-alt me-1"></i> Atualizado em: 11/07/2025
                        </small>
                    </div>
                </div>
            </div>

            <!-- Maio 2025 -->
            <div class="col-md-6 mb-4">
                <div class="card h-100 medication-card">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-success rounded-5 p-3 me-3">
                                <i class="fas fs-3 fa-pills text-white fa-lg"></i>
                            </div>
                            <div>
                                <h5 class="card-title mb-0">Estoque em Maio de 2025</h5>
                                <small class="text-muted">Relatório anterior</small>
                            </div>
                        </div>
                        <p class="card-text">
                            Relatório histórico dos medicamentos disponíveis em maio de 2025.
                        </p>
                        <div class="d-flex justify-content-between align-items-center my-4">
                            <span class="badge bg-success">Arquivo</span>
                            <a href="https://angra.rj.gov.br/downloads/SSA/MEDICAMENTOS-DA-REDE-BASICO-DISP-20052025.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm  btn-sm">
                                <i class="fas fa-download me-1"></i> Baixar PDF
                            </a>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent">
                        <small class="text-muted">
                            <i class="fas fa-calendar-alt me-1"></i> Atualizado em: 20/05/2025
                        </small>
                    </div>
                </div>
            </div>
        </div>

        <!-- Informação de Atualização -->
        <div class="row mt-5">
            <div class="col-12">
                <div class="text-center">
                    <p class="update-info">
                        <i class="fas fa-info-circle me-1"></i>
                        <em>Atualizado em: 11 de julho de 2025</em>
                    </p>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection