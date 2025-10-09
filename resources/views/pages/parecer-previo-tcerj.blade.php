@extends('theme')
@section("title", "Portal da Transparência - Angra dos Reis :: Parecer Prévio das contas do Governo Municipal")
@section('content')
<section>

    <div class="container py-5 mb-5">
        <!-- Breadcrumb -->
        @php
            $breadcrumbs = [
                [
                    'route' => route('index'),
                    'title' => __("Página Inicial"),
                ],
                [
                    'currentPage' => "page",
                    'title' => __("Parecer Prévio das contas do Governo Municipal"),
                ],
            ];
        @endphp
            
        @include('components._breadcrumb', $breadcrumbs)

        <!-- Título Principal -->
        @include('components._titleMain', [
            "title" => __("Parecer Prévio das contas do Governo Municipal"),
            "summary" => __("Prestação de contas."),
        ])

        <div class="container">

            <!-- Cards dos Anos -->
            <div class="row g-4">
                <!-- 2024 -->
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm year-card">
                        <div class="card-body text-center p-4">
                            <h3 class="card-title text-soft mb-3">2024</h3>
                            <a href="https://angra.rj.gov.br/downloads/CGM/PrestacaodeContas/2024-Acordao-Prestacao-de-Contas-de-Governo.pdf" target="_blank" class="btn btn-success">
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
                            <a href="https://angra.rj.gov.br/downloads/CGM/PrestacaodeContas/2023-Acordao-Prestacao-de-Contas-de-Governo.pdf" target="_blank" class="btn btn-success">
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
                            <a href="https://angra.rj.gov.br/downloads/CGM/PrestacaodeContas/Acordao-20231011-Prestacao-de-Contas-de-Governo.pdf" target="_blank" class="btn btn-success">
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
                            <a href="https://angra.rj.gov.br/downloads/CGM/PrestacaodeContas/2021-PARECER-PREVIO-CONTAS-GOVERNO.PDF" target="_blank" class="btn btn-success">
                                <i class="fas fs-4 fa-download me-2"></i> Baixar
                            </a>
                        </div>
                    </div>
                </div>

                <!-- 2020 -->
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm year-card">
                        <div class="card-body text-center p-4">
                            <h3 class="card-title text-soft mb-3">2020</h3>
                            <a href="https://angra.rj.gov.br/downloads/CGM/PrestacaodeContas/209599-2021_230-VOTO-FINAL-PARECER-PREVIO-FAVORAVEL-PRESTACAO-DE-CONTAS-DE-GOVERNO-2020.pdf" target="_blank" class="btn btn-success">
                                <i class="fas fs-4 fa-download me-2"></i> Baixar
                            </a>
                        </div>
                    </div>
                </div>

                <!-- 2019 -->
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm year-card">
                        <div class="card-body text-center p-4">
                            <h3 class="card-title text-soft mb-3">2019</h3>
                            <a href="https://angra.rj.gov.br/downloads/CGM/PrestacaodeContas/2019_Relatorio-e-Parecer.PDF" target="_blank" class="btn btn-success">
                                <i class="fas fs-4 fa-download me-2"></i> Baixar
                            </a>
                        </div>
                    </div>
                </div>

                <!-- 2018 -->
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm year-card">
                        <div class="card-body text-center p-4">
                            <h3 class="card-title text-soft mb-3">2018</h3>
                            <a href="https://portal.angra.rj.gov.br/downloads/cgm/PrestacaodeContas/18-207841-2019_190-Relatorio-e-Parecer-final-2018-PrestacaodeContasdoGoverno.pdf" target="_blank" class="btn btn-success">
                                <i class="fas fs-4 fa-download me-2"></i> Baixar
                            </a>
                        </div>
                    </div>
                </div>

                <!-- 2017 -->
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm year-card">
                        <div class="card-body text-center p-4">
                            <h3 class="card-title text-soft mb-3">2017</h3>
                            <a href="https://portal.angra.rj.gov.br/downloads/cgm/PrestacaodeContas/17-212768-2018_228-VOTO-FINAL-PRESTACAO-CONTAS-2017.PDF" target="_blank" class="btn btn-success">
                                <i class="fas fs-4 fa-download me-2"></i> Baixar
                            </a>
                        </div>
                    </div>
                </div>

                <!-- 2016 -->
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm year-card">
                        <div class="card-body text-center p-4">
                            <h3 class="card-title text-soft mb-3">2016</h3>
                            <a href="https://portal.angra.rj.gov.br/downloads/cgm/PrestacaodeContas/16-206028-2017_57-VOTO-PREST-CONTAS-2016.PDF" target="_blank" class="btn btn-success">
                                <i class="fas fs-4 fa-download me-2"></i> Baixar
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection