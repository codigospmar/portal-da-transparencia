@extends('theme')
@section("title", "Portal da Transparência - Angra dos Reis :: Concursos Públicos e Processos de Seleção")
@section('content')
<section>
    <div class="container my-5">

        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ env("PORTAL_ANGRA") }}">Página Inicial</a></li>
                <li class="breadcrumb-item"><a href="{{ route('index') }}">Portal da Transparência</a></li>
                <li class="breadcrumb-item active">Concursos Públicos e Processos de Seleção</li>
            </ol>
        </nav>

        <!-- Título Principal -->
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h1 class="display-5 fw-bold text-soft mb-3">Concursos Públicos e Processos de Seleção</h1>
            </div>
        </div>

        <!-- Cards de Navegação -->
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="row g-4">

                    <!-- Card Concursos e Seleções Públicas -->
                    <div class="col-12">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body text-center p-5">
                                <h4 class="card-title text-soft mb-4">Concursos e Seleções Públicas</h4>
                                <p class="text-muted mb-4">Informações sobre todos os Concursos Públicos e Processos Seletivos realizados pela Prefeitura de Angra dos Reis. Consulte os detalhes sobre cada seleção, desde os editais com os requisitos e procedimentos de inscrição até os resultados finais, homologação e convocação dos classificados.</p>
                                <a href="https://angra.prodataweb.inf.br/sig/app.html#/transparencia/transparencia-folha-pagamento" target="_blank" class="btn btn-outline-success border-0 shadow-sm btn-lg col-6 mx-auto">
                                    <i class="fas fa-external-link-alt me-2"></i> Acessar Sistema
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Cards comentados para futura implementação -->
                    <!--
                    <div class="col-md-6">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body text-center p-5">
                                <h4 class="card-title text-soft mb-4">Concursos e Seleções a partir de 2022</h4>
                                <p class="text-muted mb-4">Processos seletivos mais recentes</p>
                                <a href="/concursos" target="_blank" class="btn btn-outline-success btn-lg">
                                    <i class="fas fa-search me-2"></i> Consultar
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body text-center p-5">
                                <h4 class="card-title text-soft mb-4">Concursos e Seleções até 2022</h4>
                                <p class="text-muted mb-4">Processos seletivos históricos</p>
                                <a href="concursos.asp?indexsigla=transp" class="btn btn-outline-success btn-lg">
                                    <i class="fas fa-archive me-2"></i> Consultar
                                </a>
                            </div>
                        </div>
                    </div>
                    -->

                </div>
            </div>
        </div>

    </div>
</section>
@endsection