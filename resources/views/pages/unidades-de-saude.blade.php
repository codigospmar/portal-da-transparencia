@extends('theme')
@section("title", "Portal da Transparência - Angra dos Reis :: Dívida Ativa")
@section('content')
<main class="main py-4">
    <div class="container">

        <div class="row">
            <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('index') }}">Página Inicial</a></li>
                <li class="breadcrumb-item active">Unidades de Saúde de Angra dos Reis</li>
            </ol>
        </nav>

            <div id="conteudo" class="col-12">
                <section class="mb-4">

                    <!-- Título Principal -->
                    <div class="row mb-5">
                        <div class="col-12 text-center">
                            <h1 class="display-5 fw-bold text-soft">Unidades de Saúde de Angra dos Reis</h1>
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
                                <thead class="table-light">
                                    <tr>
                                        <th width="22%">Unidade de Saúde</th>
                                        <th>Endereço</th>
                                        <th>Telefone</th>
                                        <th>Email</th>
                                        <th>Informações Adicionais</th>
                                    </tr>
                                </thead>
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