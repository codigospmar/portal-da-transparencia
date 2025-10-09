@extends('theme')
@section("title", "Portal da Transparência - Angra dos Reis :: Dívida Ativa")
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
                    'currentPage' => "page",
                    'title' => __("Unidades de Saúde de Angra dos Reis"),
                ],
            ];
        @endphp

        @include('components._breadcrumb', $breadcrumbs)
        
        <!-- Título Principal -->
        @include('components._titleMain', [
            "title" => __("Unidades de Saúde de Angra dos Reis"),
            "summary" => __(""),
        ])

            <div id="conteudo" class="col-12">
                <section class="mb-4">

                    <div class="row mb-5">
                        <div class="col-12 text-center">
                            <h1 class="display-5 fw-bold text-soft"></h1>
                        </div>
                    </div>

                    <article>
                        
                        <form id="searchAccounts" class="d-flex mb-4 pt-3" method="get">
                            <input type="hidden" name="page" value="{{ request()->input('page', 1) }}">
                            <input type="text" class="form-control me-2" name="q" placeholder="Pesquisar unidade de saúde..."
                                value="{{ request()->input('q') }}">
                            <button class="btn btn-outline-success" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </form>
                        
                        @include('components._cardSingle', [
                            "id" => "unidadesSaude",
                            "link" => "https://angra.rj.gov.br/servicos/unidades-de-saude",
                            "target" => "_blank",
                            "fontawesome" => "<i class='fa-solid fa-hospital text-white fa-lg icon-hover'></i>",
                            "title" => "Unidades de Saúde",
                        ])
                        
                        <div class="table-responsive">
                            <table class="table table-striped table-hover mt-3">
                                @include('components.tables._thead', ['thead' => [
                                    'Unidade de Saúde', 
                                    'Endereço', 
                                    'Telefone', 
                                    'Email', 
                                    'Informações Adicionais',  
                                 ]])
                                <tbody>
                                    @php $index = 0 @endphp
                                    @forelse($unidadesSaude as $unidade)
                                        <tr>
                                            <td>{{ $unidade->nome }}</td>
                                            <td>
                                                {{ $unidade->endereco->logradouro }}, nº {{ $unidade->endereco->numero }}<br>
                                                {{ $unidade->endereco->bairro }} - CEP: {{ $unidade->endereco->cep }}
                                            </td>
                                            <td>{{ $unidade->telefone }}</td>
                                            <td>{{ $unidade->email }}</td>
                                            <td>{!! $unidade->informacoes !!}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td class="* Nenum registro encontrado" colspan="5">{{ $unidade->nome }}</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-center mt-4">
                                {!! $unidadesSaude->links() !!}
                            </div>
                        </div>
                    </article>
                </section>
            </div>
        </div>
    </div>
</main>
@endsection