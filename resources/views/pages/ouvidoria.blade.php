@extends('theme')
@section("title", "Portal da Transparência - Angra dos Reis :: Ouvidoria")
@section('content')
<section>

    <div class="container py-4">
        <!-- Breadcrumb -->
        @php
            $breadcrumbs = [
                [
                    'route' => route('index'),
                    'title' => __("Página Inicial"),
                ],
                [
                    'currentPage' => "page",
                    'title' => __("Ouvidoria"),
                ],
            ];
        @endphp
            
        @include('components._breadcrumb', $breadcrumbs)
        
        <!-- Título Principal -->
        @include('components._titleMain', [
            "title" => __("Ouvidoria"),
            "summary" => __("Canais de comunicação para manifestações, dúvidas e informações."),
        ])

        @include('components._bottunsNavOuvidoria')
        
        <!-- Canais de Atendimento -->
        <div class="row mb-5">
            <div class="col-12">
                <h2 class="h3 mb-4 text-soft border-bottom pb-2">{{ __("Canais de Atendimentos") }}</h2>
            </div>

            <!-- Ouvidoria -->
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card h-100 shadow-sm contact-card">
                    <div class="card-body text-center">
                        <div class="contact-icon">
                            <i class="fas fs-1 text-success pb-3 fa-headset opacity-50"></i>
                        </div>
                        <h5 class="card-title text-soft mb-4">Ouvidoria</h5>
                        <p class="card-text small opacity-75">
                            <span class="d-block text-black">(24) 3379-9966</span>
                            <span class="d-block text-black">ouvidoria@angra.rj.gov.br</span>
                            <span class="text-soft mt-2 d-block">
                                Segunda a sexta<br>
                                das 14:00 às 17:00
                            </span>
                            <span class="text-soft d-block mt-2">
                                Praça Nilo Peçanha, n.º 186<br>
                                Centro - Angra dos Reis, RJ
                            </span>
                        </p>
                    </div>
                </div>
            </div>

            <!-- e-SIC -->
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card h-100 shadow-sm contact-card">
                    <div class="card-body d-flex flex-column text-center">
                        <div class="contact-icon mb-2">
                            <i class="fas fa-laptop-code fs-1 text-success pb-2 opacity-50"></i>
                        </div>
                        <h5 class="card-title text-soft mb-4">e-SIC</h5>
                        <p class="card-text small mb-3 ">
                            Sistema eletrônico do Serviço de Informação ao Cidadão
                        </p>
                        <!-- Botão empurrado para o final -->
                        <div class="mt-auto">
                            <a href="https://falabr.cgu.gov.br/web/home?modoOuvidoria=1&ouvidoriaInterna=false"
                                target="_blank"
                                class="btn btn-outline-success border-0 shadow-sm p-3 rounded-4">
                                <i class="fas fa-external-link-alt me-1"></i>Acessar Fala.BR
                            </a>
                        </div>
                    </div>
                </div>
            </div>


            <!-- SIC Presencial -->
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card h-100 shadow-sm contact-card">
                    <div class="card-body text-center">
                        <div class="contact-icon">
                            <i class="fas fa-building fs-1 text-success pb-2 opacity-50"></i>
                        </div>
                        <h5 class="card-title text-soft mb-4">SIC Presencial</h5>
                        <p class="card-text small">
                            <span class="d-block text-black">
                                Praça Nilo Peçanha, n.º 186<br>
                                Centro - Angra dos Reis, RJ
                            </span>
                            <span class="text-soft mt-2 d-block opacity-75">
                                <span>(24) 3379-9966</span><br>
                                ouvidoria@angra.rj.gov.br
                            </span>
                            <span class="text-soft d-block mt-2 opacity-75">
                                Segunda a sexta<br>
                                das 9:30 às 16:00
                            </span>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Telefonia da PMAR -->
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card h-100 shadow-sm contact-card">
                    <div class="card-body text-center">
                        <div class="contact-icon">
                            <i class="fas fa-phone-alt fs-1 text-success opacity-50 pb-2"></i>
                        </div>
                        <h5 class="card-title text-soft mb-4">Telefonia da PMAR</h5>
                        <p class="card-text small opacity-75">
                            <strong class="d-block text-black">(24) 3379-9900</strong>
                            <span class="text-soft mt-2 d-block">
                                <i class="fas fa-phone me-1"></i> (24) 3377-1500 - Ramal 1674<br>
                                <i class="fas fa-phone me-1"></i> (24) 3377-8311 - Ramal 1714<br>
                                <i class="fas fa-phone me-1"></i> (24) 3377-8388 - Ramal 1715
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Legislação -->
        <div class="row mb-5">
            <div class="col-12">
                <h2 class="h3 mb-4 text-soft border-bottom pb-2">Legislação</h2>
            </div>

            <!-- Lei 12.527/2011 -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm law-card">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-soft mb-3">
                            <i class="fas fa-gavel me-2"></i>Lei Nº 12.527/2011
                        </h5>
                        <p class="card-text small mb-3">
                            Lei de Acesso à Informação - Regula o acesso a informações previsto no inciso XXXIII do art. 5º, no inciso II do § 3º do art. 37 e no § 2º do art. 216 da Constituição Federal.
                        </p>
                        <div class="mt-auto">
                            <a href="http://www.planalto.gov.br/ccivil_03/_Ato2011-2014/2011/Lei/L12527.htm" target="_blank" class="btn btn-outline-success rounded-3 shadow-sm border-0  w-100">
                                <i class="fas fa-external-link-alt me-1"></i>Consultar Lei Completa
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Decreto 9.151/2014 -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm law-card">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-soft mb-3">
                            <i class="fas fa-file-contract me-2"></i>Decreto Nº 9.151/2014
                        </h5>
                        <p class="card-text small mb-3">
                            Regulamenta a Lei Federal Nº 12.527, de 18 de novembro de 2011, que dispõe sobre o acesso a informações previsto na Constituição Federal.
                        </p>
                        <div class="mt-auto">
                            <a href="https://angra.rj.gov.br/downloads/Transparencia/SIC/Decreto9.151-2014-LAI.pdf" target="_blank" class="btn btn-outline-success rounded-3 shadow-sm border-0  w-100">
                                <i class="fas fa-download me-1"></i>Baixar Decreto
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Decreto 13.055/2023 -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm law-card">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-soft mb-3">
                            <i class="fas fa-file-alt me-2"></i>Decreto Nº 13.055/2023
                        </h5>
                        <p class="card-text small mb-3">
                            Regulamenta a Lei Federal Nº 14.129, de 29 de março de 2021, que dispõe sobre normas gerais para licitações e contratos administrativos.
                        </p>
                        <div class="mt-auto">
                            <a href="https://angra.rj.gov.br/downloads/legislacoes-pdf/4360-2023829-1134.pdf" target="_blank" class="btn btn-outline-success rounded-3 shadow-sm border-0  w-100">
                                <i class="fas fa-download me-1"></i>Baixar Decreto
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</section>
@endsection