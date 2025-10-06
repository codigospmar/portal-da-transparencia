@extends('theme')
@section("title", "Portal da Transparência - Angra dos Reis :: Dívida Ativa")
@section('content')
    <main class="main py-4">

        <div class="container">
        <!-- Breadcrumb -->
            <nav aria-label="breadcrumb" class="mb-3">
                <ol class="breadcrumb small">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Página Inicial</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Dívida Ativa</li>
                </ol>
            </nav>


        <!-- Título Principal -->
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h1 class="display-5 fw-bold text-soft">Relatório de Inscritos na Dívida Ativa</h1>
                    <p class="lead text-muted">Relação de imóveis e contribuintes inscritos na dívida ativa do município.</p>
                </div>
            </div>


        <!-- Filtros -->
            <section class="mb-4">
                
                @include('components/forms/_filtroPesquisaDefault', [ 
                    "id" => "cadastroDeUsuario", 
                    "placeholder" => "Pesquisar por número do imóvel, número do iss, cpf ou cnpj, contribuinte, exercício..."
                ])
                
<!--                <form action="" method="GET" id="filtro-form" class="border-0 shadow-sm rounded p-3 bg-light">
                    <div class="row g-3 p-3">
                        <div class="col-md-2">
                            <label for="numeroImovel" class="form-label">Número do Imóvel</label>
                            <input type="text" name="numeroImovel" id="numeroImovel" class="form-control" placeholder="Ex: 12345">
                        </div>

                        <div class="col-md-2">
                            <label for="codigoISS" class="form-label">Número do ISS</label>
                            <input type="text" name="codigoISS" id="codigoISS" class="form-control" placeholder="Ex: 98765">
                        </div>

                        <div class="col-md-2">
                            <label for="cpfCnpj" class="form-label">CPF ou CNPJ</label>
                            <input type="text" name="cpfCnpj" id="cpfCnpj" class="form-control" placeholder="Digite CPF ou CNPJ">
                        </div>

                        <div class="col-md-2">
                            <label for="nomePessoa" class="form-label">Contribuinte</label>
                            <input type="text" name="nomePessoa" id="nomePessoa" class="form-control" placeholder="Nome do contribuinte">
                        </div>

                        <div class="col-md-2">
                            <label for="exercicio" class="form-label">Exercício</label>
                            <select name="exercicio" id="exercicio" class="form-select">
                                <option value="">Selecione</option>
                            @for($ano = date('Y'); $ano >= 1983; $ano--)
                                    <option value="{{ $ano }}">{{ $ano }}</option>
                                @endfor
                            </select>
                        </div>

                        <div class="col-12 d-flex justify-content-end gap-2">
                            <button type="reset" class="btn btn-outline-secondary">
                                <i class="fas fa-eraser me-1"></i> Limpar
                            </button>
                            <button type="submit" class="btn btn-green">
                                <i class="fas fa-search me-1"></i> Pesquisar
                            </button>
                        </div>
                    </div>
                </form>-->
            </section>

        <!-- Download -->
            <div class="mb-4 text-center col-4 col-sm-12">
                <a href="https://angra.rj.gov.br/downloads/transparencia/dados-divida-consolidada.csv" target="_blank" class="fw-bold btn border-0 shadow-sm btn-outline-success">
                    <i class="fas fa-file-csv me-2"></i> Download do relatório completo (.csv)
                </a>
            </div>

        <!-- Resultados -->
            <section>
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped align-middle text-center">
                                @include('components.tables._thead', ['thead' => [
                                'Criado em', 
                                'Número de inscrição', 
                                'Número do imóvel', 
                                'Informações', 
                                'Parcelado', 
                                'Protestado', 
                                'Ajuizado', 
                             ]])
                                <tbody>
                                    @php $index = 0; @endphp
                                @forelse($dividas as $divida)
                                        <tr>
                                            <td>{{ date("d/m/Y H:m", strtotime($divida->created_at)) }}</td>
                                            <td>{{ $divida->registro->numInscricao ?? "Não informado" }}</td>
                                            <td>{{ $divida->registro->numImovel ?? "Não informado" }}</td>
                                            <td class="text-start">
                                                <div><strong>CPF ou CNPJ</strong></div>
                                                <div class="mb-2">{{ $divida->registro->isPJ ? $divida->registro->cpf ?? "Não informado" : $divida->registro->cnpj ?? "Não informado" }}</div>
                                                <div><strong>Nome ou Razão Social</strong></div>
                                                <div class="mb-2">{{ $divida->registro->nome }}</div>
                                                <div><strong>Origem da dívida</strong></div>
                                                <div class="mb-2">{{ $divida->registro->origemDivida }}</div>
                                                <div><strong>Exercício</strong></div>
                                                <div class="mb-2">{{ $divida->registro->exercicio }}</div>
                                                <div><strong>Data da dívida ativa</strong></div>
                                                <div class="mb-2">{{ date("d/m/Y", strtotime($divida->registro->dividaStatus)) }}</div>
                                                <div><strong>Valor da dívida</strong></div>
                                                <div class="mb-2">{{ $divida->registro->dividaStatus }}</div>
                                                <div><strong>Status da dívida ativa</strong></div>
                                                <div><span style="color: #dc3545;" class="text-bold">{{ $divida->registro->dividaValorTotal }}</span></div>
                                            </td>
                                            <td>{{ $divida->registro->dividaParcelado ? "Sim" : "Não" }}</td>
                                            <td>{{ $divida->registro->dividaProtestado ? "Sim" : "Não"  }}</td>
                                            <td>{{ $divida->registro->dividaAjuizado ? "Sim" : "Não"  }}</td>
                                        </tr>
                                        @php $index++; @endphp
                                    @empty
                                        <tr>
                                            <td colspan="9">* Nenhum registro encontrado</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 my-3">
                        <div class="d-flex justify-content-center">{!! $dividas->links() !!} </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection