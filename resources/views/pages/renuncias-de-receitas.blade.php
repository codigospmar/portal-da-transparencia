@extends('theme')
@section("title", "Portal da Transparência - Angra dos Reis :: Renúncias de Receitas")
@section('content')
<section>
    <div class="container my-5">

        <!-- Breadcrumb -->
        @php
            $breadcrumbs = [
                [
                    'route' => route('index'),
                    'title' => __("Página Inicial"),
                ],
                [
                    'currentPage' => "page",
                    'title' => __("Renúncias de Receitas"),
                ],
            ];
        @endphp

        @include('components._breadcrumb', $breadcrumbs)

        <!-- Título Principal -->
        @include('components._titleMain', [
            "title" => __("Estimativa e compensação da renúncia de receita"),
            "summary" => __("Acesse os demonstrativos anuais de forma rápida e intuitiva."),
        ])

        <!-- Cards dos Anos -->
        <div class="row g-4">
            <!-- 2023 -->
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm year-card">
                    <div class="card-body text-center p-4">
                        <h3 class="card-title text-soft mb-3">2023</h3>

                        <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2023/LOA-Lei-4155-2022/12 - DEMONSTRATIVO II.pdf" target="_blank" class="btn btn-success">
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

                        <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12-DEMONSTRATIVO-II.pdf" target="_blank" class="btn btn-success">
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

                        <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2021/3942-2020-LOA/12-DEMONSTRATIVOII.pdf" target="_blank" class="btn btn-success">
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

                        <a href="https://portal.angra.rj.gov.br/downloads/CGM/leisorcamentarias/2020/3917-2019-LOA/DemonstrativoII.pdf" target="_blank" class="btn btn-success">
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

                        <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2019/3820-2018-LOA/06-Demonstrativo-2.pdf" target="_blank" class="btn btn-success">
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

                        <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2018/3.723-2017-LOA/demonstrativo2.pdf" target="_blank" class="btn btn-success">
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

                        <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2017/3.615-2016-LOA/ANEXOS-DA-LOA-PDF-2017/anexo14.pdf" target="_blank" class="btn btn-success">
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

                        <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2016/3.457-2015-LOA/anexo13.pdf" target="_blank" class="btn btn-success">
                            <i class="fas fs-4 fa-download me-2"></i> Baixar
                        </a>
                    </div>
                </div>
            </div>

            <!-- 2015 -->
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm year-card">
                    <div class="card-body text-center p-4">
                        <h3 class="card-title text-soft mb-3">2015</h3>

                        <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2015/LOA_14 - Demonstrativo IV - Renuncias de Receita.pdf" target="_blank" class="btn btn-success">
                            <i class="fas fs-4 fa-download me-2"></i> Baixar
                        </a>
                    </div>
                </div>
            </div>

            <!-- 2014 -->
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm year-card">
                    <div class="card-body text-center p-4">
                        <h3 class="card-title text-soft mb-3">2014</h3>

                        <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2014/LOA_3183/DemonstrativoIV.pdf" target="_blank" class="btn btn-success">
                            <i class="fas fs-4 fa-download me-2"></i> Baixar
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>

</section>
@endsection