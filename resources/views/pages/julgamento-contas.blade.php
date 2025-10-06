@extends('theme')
@section("title", "Portal da Transparência - Angra dos Reis :: Julgamento das contas do Executivo pelo Legislativo")
@section('content')
<section>
    <div class="container my-5 pb-5">
    
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ env("PORTAL_ANGRA") }}">Página Inicial</a></li>
                <li class="breadcrumb-item"><a href="{{ route('index') }}">Portal da Transparência</a></li>
                <li class="breadcrumb-item active">Julgamento das contas do Executivo pelo Legislativo</li>
            </ol>
        </nav>

        <!-- Título Principal -->
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h1 class="display-5 fw-bold text-soft">Julgamento das contas do Executivo pelo Legislativo</h1>
            </div>
        </div>

        <!-- Breadcrumb -->


        <!-- Cards dos Anos -->
        <div class="row g-4">
            <!-- 2023 -->
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="card h-100 border-0 shadow-sm year-card no-judgment">
                    <div class="card-body p-4">
                        <h3 class="card-title mb-3">2023</h3>
                        <p class="judgment-info">Não houve julgamento das contas do Poder Executivo pelo Legislativo no exercício de 2023, até a presente data.</p>
                    </div>
                </div>
            </div>

            <!-- 2022 -->
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="card h-100 border-0 shadow-sm year-card no-judgment">
                    <div class="card-body p-4">
                        <h3 class="card-title mb-3">2022</h3>
                        <p class="judgment-info">Não houve julgamento das contas do Poder Executivo pelo Legislativo no exercício de 2022.</p>
                    </div>
                </div>
            </div>

            <!-- 2021 -->
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="card h-100 border-0 shadow-sm year-card no-judgment">
                    <div class="card-body p-4">
                        <h3 class="card-title mb-3">2021</h3>
                        <p class="judgment-info">Não houve julgamento das contas do Poder Executivo pelo Legislativo no exercício de 2021.</p>
                    </div>
                </div>
            </div>

            <!-- 2020 -->
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="card h-100 border-0 shadow-sm year-card no-judgment">
                    <div class="card-body p-4">
                        <h3 class="card-title mb-3">2020</h3>
                        <p class="judgment-info">Não houve julgamento das contas do Poder Executivo pelo Legislativo no exercício de 2020.</p>
                    </div>
                </div>
            </div>

            <!-- 2019 -->
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="card h-100 border-0 shadow-sm year-card no-judgment">
                    <div class="card-body p-4">
                        <h3 class="card-title mb-3">2019</h3>
                        <p class="judgment-info">Não houve julgamento das contas do Poder Executivo pelo Legislativo no exercício de 2019.</p>
                    </div>
                </div>
            </div>

            <!-- 2018 -->
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="card h-100 border-0 shadow-sm year-card no-judgment">
                    <div class="card-body p-4">
                        <h3 class="card-title mb-3">2018</h3>
                        <p class="judgment-info">Não houve julgamento das contas do Poder Executivo pelo Legislativo no exercício de 2018.</p>
                    </div>
                </div>
            </div>

            <!-- 2017 -->
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="card h-100 border-0 shadow-sm year-card no-judgment">
                    <div class="card-body p-4">
                        <h3 class="card-title mb-3">2017</h3>
                        <p class="judgment-info">Não houve julgamento das contas do Poder Executivo pelo Legislativo no exercício de 2017.</p>
                    </div>
                </div>
            </div>

            <!-- 2016 -->
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="card h-100 border-0 shadow-sm year-card with-judgment">
                    <div class="card-body p-4">
                        <h3 class="card-title mb-3">2016</h3>
                        <p class="legislative-act">Decreto Legislativo Nº 2.365, de 05 de setembro de 2019</p>
                        <p class="judgment-info">Dispõe sobre aprovação das contas da administração financeira do município de Angra dos Reis no exercício de 2016.</p>
                        <a href="https://angra.rj.gov.br/downloads/Transparencia/Julgamento-Contas/Contas-2016.pdf" target="_blank" class="btn btn-success btn-sm mt-2">
                            <i class="fas fa-download me-1"></i> Baixar Documento
                        </a>
                    </div>
                </div>
            </div>

            <!-- 2015 -->
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="card h-100 border-0 shadow-sm year-card with-judgment">
                    <div class="card-body p-4">
                        <h3 class="card-title mb-3">2015</h3>
                        <p class="legislative-act">Decreto Legislativo Nº 2.364, de 20 de agosto de 2019</p>
                        <p class="judgment-info">Dispõe sobre a aprovação com ressalvas, determinações, recomendações e comunicações das contas da administração financeira do município de Angra dos Reis no exercício de 2015.</p>
                        <a href="https://angra.rj.gov.br/downloads/Transparencia/Julgamento-Contas/Contas-2015.pdf" target="_blank" class="btn btn-success btn-sm mt-2">
                            <i class="fas fa-download me-1"></i> Baixar Documento
                        </a>
                    </div>
                </div>
            </div>

            <!-- 2014 -->
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="card h-100 border-0 shadow-sm year-card with-judgment">
                    <div class="card-body p-4">
                        <h3 class="card-title mb-3">2014</h3>
                        <p class="legislative-act">Decreto Legislativo Nº 2.318, de 22 de maio de 2018</p>
                        <p class="judgment-info">Dispõe sobre a rejeição das contas da administração financeira do município de Angra dos Reis no exercício de 2014.</p>
                        <a href="https://angra.rj.gov.br/downloads/Transparencia/Julgamento-Contas/Contas-2014.pdf" target="_blank" class="btn btn-success btn-sm mt-2">
                            <i class="fas fa-download me-1"></i> Baixar Documento
                        </a>
                    </div>
                </div>
            </div>

            <!-- 2013 -->
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="card h-100 border-0 shadow-sm year-card with-judgment">
                    <div class="card-body p-4">
                        <h3 class="card-title mb-3">2013</h3>
                        <p class="legislative-act">Decreto Legislativo Nº 2.131, de 8 de outubro de 2015</p>
                        <p class="judgment-info">Dispõe sobre aprovação das contas da Prefeita municipal, Srª. Maria da Conceição Caldas Rabha e o Sr. Leandro Correa da Silva, referentes ao exercício de 2013.</p>
                        <a href="https://angra.rj.gov.br/downloads/Transparencia/Julgamento-Contas/Contas-2013.pdf" target="_blank" class="btn btn-success btn-sm mt-2">
                            <i class="fas fa-download me-1"></i> Baixar Documento
                        </a>
                    </div>
                </div>
            </div>

            <!-- 2012 -->
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="card h-100 border-0 shadow-sm year-card no-judgment">
                    <div class="card-body p-4">
                        <h3 class="card-title mb-3">2012</h3>
                        <p class="judgment-info">Não houve julgamento das contas do Poder Executivo pelo Legislativo no exercício de 2012.</p>
                    </div>
                </div>
            </div>

            <!-- 2011 -->
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="card h-100 border-0 shadow-sm year-card no-judgment">
                    <div class="card-body p-4">
                        <h3 class="card-title mb-3">2011</h3>
                        <p class="judgment-info">Não houve julgamento das contas do Poder Executivo pelo Legislativo no exercício de 2011.</p>
                    </div>
                </div>
            </div>

            <!-- 2010 -->
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="card h-100 border-0 shadow-sm year-card no-judgment">
                    <div class="card-body p-4">
                        <h3 class="card-title mb-3">2010</h3>
                        <p class="judgment-info">Não houve julgamento das contas do Poder Executivo pelo Legislativo no exercício de 2010.</p>
                    </div>
                </div>
            </div>

            <!-- 2009 -->
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="card h-100 border-0 shadow-sm year-card with-judgment">
                    <div class="card-body p-4">
                        <h3 class="card-title mb-3">2009</h3>
                        <p class="legislative-act">Decreto Legislativo Nº 2.316, de 22 de março de 2018</p>
                        <p class="judgment-info">Dispõe sobre aprovação das contas do Prefeito municipal, Sr. Artur Otávio Scapin Jordão Costa, referentes ao exercício de 2009.</p>
                        <a href="https://angra.rj.gov.br/downloads/Transparencia/Julgamento-Contas/Contas-2009.pdf" target="_blank" class="btn btn-success btn-sm mt-2">
                            <i class="fas fa-download me-1"></i> Baixar Documento
                        </a>
                    </div>
                </div>
            </div>

            <!-- 2008 -->
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="card h-100 border-0 shadow-sm year-card with-judgment">
                    <div class="card-body p-4">
                        <h3 class="card-title mb-3">2008</h3>
                        <p class="legislative-act">Decreto Legislativo Nº 2.319, de 28 de agosto de 2018</p>
                        <p class="judgment-info">Dispõe sobre aprovação das contas da administração financeira do município de Angra dos Reis no exercício de 2008.</p>
                        <a href="https://angra.rj.gov.br/downloads/Transparencia/Julgamento-Contas/Contas-2008.pdf" target="_blank" class="btn btn-success btn-sm mt-2">
                            <i class="fas fa-download me-1"></i> Baixar Documento
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

@endsection