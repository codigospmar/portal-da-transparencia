@extends('theme')
@section("title", "Portal da Transparência - Angra dos Reis :: Plano de Contratação Anual")
@section('content')
<section>
    <div class="container my-5">

        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ env("PORTAL_ANGRA") }}">Página Inicial</a></li>
                <li class="breadcrumb-item"><a href="{{ route('index') }}">Portal da Transparência</a></li>
                <li class="breadcrumb-item active">Plano de Contratação Anual</li>
            </ol>
        </nav>

        <!-- Título Principal -->
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h1 class="display-5 fw-bold text-soft">Plano de Contratação Anual</h1>
                <p class="lead fs-4 text-soft">Planejamento e transparência nas contratações municipais</p>
            </div>
        </div>

        <!-- Conteúdo Informativo -->
        <div class="row justify-content-center mb-5">
            <div class="col-lg-10">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-5">
                        <p class="fs-6 mb-4">
                            O <strong>Plano de Contratação Anual (PCA)</strong> é uma ferramenta de planejamento utilizada pelo município para organizar e programar suas aquisições e contratações ao longo do ano, com base no <strong>Decreto nº 14.152</strong>, de 03 de junho de 2025. Seu objetivo é estruturar os processos de contratação de forma planejada, garantindo o uso eficiente dos recursos públicos e a adequada prestação de serviços à população.
                        </p>

                        <p class="fs-6 mb-4">
                            O PCA é elaborado de acordo com a legislação vigente e segue diretrizes específicas de planejamento e gestão de contratações. Entre os principais aspectos do plano, destacam-se:
                        </p>

                        <ul class="list-unstyled mb-4">
                            <li class="mb-2">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                <strong>Transparência:</strong> Todas as contratações planejadas são registradas e disponibilizadas para acompanhamento, permitindo a fiscalização e o monitoramento dos processos.
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                <strong>Planejamento:</strong> As aquisições são priorizadas conforme a demanda identificada, garantindo que os recursos sejam direcionados às necessidades mais relevantes.
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                <strong>Qualidade e eficiência:</strong> O plano busca assegurar que os produtos e serviços adquiridos atendam aos padrões de qualidade e contribuam para a eficiência na execução dos serviços públicos.
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                <strong>Capacitação:</strong> As equipes responsáveis pelas contratações recebem treinamento e atualização para garantir a correta aplicação do PCA.
                            </li>
                        </ul>

                        <p class="fs-6 mb-0">
                            O andamento da implantação do PCA é registrado no processo nº <strong>SEI-2025-01008054</strong>, que possibilita o acompanhamento das etapas de implementação e ajustes necessários.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cards de Documentos -->
        <div class="row g-4 justify-content-center">
            <div class="col-lg-10">
                <h2 class="text-center mb-4 fw-bold text-soft">Documentos Relacionados</h2>

                <!-- Documento 1 -->
                <div class="col-10 mx-auto mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <h4 class="card-title text-soft mb-3">Declaração de Início da Implantação</h4>
                            <p class="text-muted mb-3">Documento oficial de início da implantação do Plano de Contratação Anual do Município</p>
                            <a href="https://angra.rj.gov.br/downloads/plano_contratacao_anual/1-Declaracao.pdf" target="_blank" class="btn btn-outline-success border-0 col-6 mx-auto shadow-sm">
                                <i class="fas fa-download me-2"></i> Baixar Documento
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Documento 2 -->
                <div class="col-10 mx-auto mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <h4 class="card-title text-soft mb-3">Decreto n° 14.152</h4>
                            <p class="text-muted mb-3">Regulamenta o inciso VII do caput do art. 12 da Lei nº 14.133, de 1º de abril de 2021, para dispor sobre o plano de contratações anual no âmbito da Administração Pública municipal direta e indireta.</p>
                            <a href="https://angra.rj.gov.br/downloads/plano_contratacao_anual/DECRETO_14152-REGULAMENTACAO.pdf" target="_blank" class="btn btn-outline-success border-0 col-6 mx-auto shadow-sm">
                                <i class="fas fa-download me-2"></i> Baixar Decreto
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Documento 3 -->
                <div class="col-10 mx-auto mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <h4 class="card-title text-soft mb-3">Manual do Sistema</h4>
                            <p class="text-muted mb-3">Plano de Contratação Anual (PCA) - Manual de uso do sistema</p>
                            <a href="https://angra.rj.gov.br/downloads/plano_contratacao_anual/3-Manual_PRODATA.pdf" target="_blank" class="btn btn-outline-success border-0 col-6 mx-auto shadow-sm">
                                <i class="fas fa-download me-2"></i> Baixar Manual
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection