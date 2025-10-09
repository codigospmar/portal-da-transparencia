@extends('theme')
@section("title", "Portal da Transparência - Angra dos Reis :: Informações Classificadas e Desclassificadas")
@section('content')
<main class="main py-4">

    <div class="container">
        <!-- Breadcrumb -->
        @php
            $breadcrumbs = [
                [
                    'route' => route('index'),
                    'title' => __("Página Inicial"),
                ],
                [
                    'route' => route('pages.ouvidoria'),
                    'title' => __("Ouvidoria"),
                ],
                [
                    'currentPage' => "page",
                    'title' => __("Informações Classificadas e Desclassificadas"),
                ],
            ];
        @endphp
            
        @include('components._breadcrumb', $breadcrumbs)
        
        <!-- Título Principal -->
        @include('components._titleMain', [
            "title" => __("Informações / Documentos Classificados e Desclassificados"),
            "summary" => __(""),
        ])
        
        
        @include('components._bottunsNavOuvidoria')

        <div class="container my-5">
            <article class="article-main">
                <div class="mb-4">
                    <p class="mb-3">
                        Nesta página divulgamos a lista de informações e documentos classificados e desclassificados pela Prefeitura Municipal de Angra dos Reis, em observância ao disposto no art. 30, incisos I e II da <strong><a href="http://www.planalto.gov.br/ccivil_03/_Ato2011-2014/2011/Lei/L12527.htm" target="_blank" class="text-decoration-none">Lei Federal 12.527/2011</a></strong> - Lei de Acesso à informação.
                    </p>
                </div>

                <div class="mb-4">
                    <h3 class="h4 mb-3">2025</h3>
                    <p class="mb-3">
                        Não houve classificação e desclassificação de informações e documentos entre 1º de janeiro de 2024 e 31 de dezembro de 2024 no âmbito da Prefeitura Municipal de Angra dos Reis.
                    </p>
                </div>

                <div class="mb-4">
                    <h3 class="h4 mb-3">2024</h3>
                    <p class="mb-3">
                        Não houve classificação e desclassificação de informações e documentos entre 1º de janeiro de 2023 e 31 de dezembro de 2023 no âmbito da Prefeitura Municipal de Angra dos Reis.
                    </p>
                </div>

                <div class="mb-4">
                    <h3 class="h4 mb-3">2023</h3>
                    <p class="mb-3">
                        Não houve classificação e desclassificação de informações e documentos entre 1º de janeiro de 2022 e 31 de dezembro de 2022 no âmbito da Prefeitura Municipal de Angra dos Reis.
                    </p>
                </div>

                <div class="mb-4">
                    <h3 class="h4 mb-3">2022</h3>
                    <p class="mb-3">
                        Não houve classificação e desclassificação de informações e documentos entre 1º de janeiro de 2021 e 31 de dezembro de 2021 no âmbito da Prefeitura Municipal de Angra dos Reis.
                    </p>
                </div>

                <div class="mb-4">
                    <h3 class="h4 mb-3">2021</h3>
                    <p class="mb-3">
                        Não houve classificação e desclassificação de informações e documentos entre 1º de janeiro de 2021 e 31 de dezembro de 2021 no âmbito da Prefeitura Municipal de Angra dos Reis.
                    </p>
                </div>

                <div class="mb-4">
                    <h3 class="h4 mb-3">2020</h3>
                    <p class="mb-3">
                        Não houve classificação e desclassificação de informações e documentos entre 1º de janeiro de 2021 e 31 de dezembro de 2020 no âmbito da Prefeitura Municipal de Angra dos Reis.
                    </p>
                </div>

                <div class="mb-4">
                    <h3 class="h4 mb-3">2019</h3>
                    <p class="mb-3">
                        Não houve classificação e desclassificação de informações e documentos entre 1º de janeiro de 2021 e 31 de dezembro de 2019 no âmbito da Prefeitura Municipal de Angra dos Reis.
                    </p>
                </div>

                <div class="mb-4">
                    <h3 class="h4 mb-3">2018</h3>
                    <p class="mb-3">
                        Não houve classificação e desclassificação de informações e documentos entre 1º de janeiro de 2021 e 31 de dezembro de 2018 no âmbito da Prefeitura Municipal de Angra dos Reis.
                    </p>
                </div>

                <div class="mb-4">
                    <h3 class="h4 mb-3">2017</h3>
                    <p class="mb-3">
                        Não houve classificação e desclassificação de informações e documentos entre 1º de janeiro de 2021 e 31 de dezembro de 2017 no âmbito da Prefeitura Municipal de Angra dos Reis.
                    </p>
                </div>

                <div class="mb-4">
                    <h3 class="h4 mb-3">2016</h3>
                    <p class="mb-3">
                        Não houve classificação e desclassificação de informações e documentos entre 1º de janeiro de 2021 e 31 de dezembro de 2016 no âmbito da Prefeitura Municipal de Angra dos Reis.
                    </p>
                </div>
            </article>
        </div>
    </div>
</main>
@endsection