@extends('theme')
@section("title", "Portal da Transparência - Angra dos Reis :: Tabela de valores das diárias")
@section('content')
<section>
    <div class="container my-5">

        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('index') }}">Página Inicial</a></li>
                <li class="breadcrumb-item active">Tabela de valores das diárias</li>
            </ol>
        </nav>

        <!-- Título Principal -->
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h1 class="display-5 fw-bold text-soft mb-3">Tabela de valores das diárias</h1>
                <p class="lead text-muted">Normativas e atualizações sobre valores de diárias municipais</p>
            </div>
        </div>

        <!-- Cards dos Decretos -->
        <div class="row justify-content-center">
            <div class="col-lg-8">
                
                <!-- Decreto 14.125 - ERRATA -->
                <div class="card shadow-sm border-0 mb-4">
                    <div class="card-body p-4">
                        <div class="text-center mb-3">
                            <h4 class="card-title fw-bold text-soft">Decreto Nº 14.125 - ERRATA</h4>
                        </div>
                        <p class="text-muted text-center mb-4">
                            Errata do Anexo do Decreto 14.125, de 20 de maio de 2025, publicado no Boletim Oficial do Município de Angra dos Reis, Edição nº 2124, de 20 de maio de 2025, páginas 15 e 16, tendo em vista a verificação de incorreções em parte do Decreto anteriormente publicado.
                        </p>
                        <div class="text-center">
                            <a href="https://angra.rj.gov.br/downloads/Transparencia/Boletim-2126_2025-05-23-25.pdf" target="_blank" class="btn btn-outline-success shadow-sm border-0 col-6 mx-auto btn-lg">
                                <i class="fas fa-download me-2"></i> Baixar Decreto
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Decreto 14.125 -->
                <div class="card shadow-sm border-0 mb-4">
                    <div class="card-body p-4">
                        <div class="text-center mb-3">
                            <h4 class="card-title fw-bold text-soft">Decreto Nº 14.125 - 20 de maio de 2025</h4>
                        </div>
                        <p class="text-muted text-center mb-4">
                            Altera dispositivo do Decreto nº 5.282, de 20 de abril de 2007, que dispõe sobre concessão de diárias na administração direta e indireta do Município e dá outras providências.
                        </p>
                        <div class="text-center">
                            <a href="https://angra.rj.gov.br/downloads/Transparencia/Boletim-2124_2025-05-20-15-16.pdf" target="_blank" class="btn btn-outline-success shadow-sm border-0 col-6 mx-auto btn-lg">
                                <i class="fas fa-download me-2"></i> Baixar Decreto
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Decreto 12.613 -->
                <div class="card shadow-sm border-0 mb-4">
                    <div class="card-body p-4">
                        <div class="text-center mb-3">
                            <h4 class="card-title fw-bold text-soft">Decreto Nº 12.613 - 09 de junho de 2022</h4>
                        </div>
                        <p class="text-muted text-center mb-4">
                            Altera o Anexo I do Decreto nº 5.282, de 20 de abril de 2007, que dispõe sobre concessão de diárias na administração direta e indireta do Município.
                        </p>
                        <div class="text-center">
                            <a href="https://angra.rj.gov.br/downloads/legislacoes-pdf/472-2022119-1612.pdf" target="_blank" class="btn btn-outline-success shadow-sm border-0 col-6 mx-auto btn-lg">
                                <i class="fas fa-download me-2"></i> Baixar Decreto
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection