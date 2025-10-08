@extends('theme')
@section("title", "Portal da Transparência - Angra dos Reis :: Dívida Ativa")
@section('content')
    <main class="main py-4">

        <div class="container">
        <!-- Breadcrumb -->
            <nav aria-label="breadcrumb" class="mb-3">
                <ol class="breadcrumb small">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Página Inicial</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Relatório de Manifestações</li>
                </ol>
            </nav>


        <!-- Título Principal -->
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h1 class="display-5 fw-bold text-soft">Relatório de Manifestações</h1>
                    <p class="lead text-muted">Relatórios anuais estatísticos contendo a quantidade de pedidos de acesso recebidos, atendidos e indeferidos.</p>
                </div>
            </div>


        <!-- Filtros -->
            <section class="mb-4">
                
                @include('components/forms/_filtroPesquisaDefault', [ 
                    "id" => "cadastroDeUsuario", 
                    "placeholder" => "Pesquisar por pedidos de acesso recebidos, atendidos e indeferidos..."
                ])
                
            </section>

        <!-- Download -->
            <div class="mb-4 text-center col-4 col-sm-12">
                <a href="https://portal.angra.rj.gov.br/ouvidoria-relatorios-manifestacoes.asp?IndexSigla=transp#" target="_blank" class="fw-bold btn border-0 shadow-sm btn-outline-success">
                    <i class="fas fa-file-csv me-2"></i> Download do relatório de manifestações (.csv)
                </a>
            </div>

        <!-- Resultados -->
            <section>
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped align-middle text-center">
                                @include('components.tables._thead', ['thead' => [
                                'Situação', 
                                'NUP', 
                                'Data de Cadastro', 
                                'Data de Resposta', 
                                'Responsável pela Resposta',  
                                'Tipo de Pessoa',
                             ]])
                                <tbody>
                                    @php $index = 0; @endphp
                                    @forelse($relatorioDeManifestacoes as $manifestacao)
                                        <tr>
                                            <td>{{ $manifestacao->situacao ?? "não informado" }}</td>
                                            <td>{{ $manifestacao->nup ?? "não informado" }}</td>
                                            <td>{{ date("d/m/Y", strtotime($manifestacao->dataDeCadastro)) }}</td>
                                            <td>{{ date("d/m/Y", strtotime($manifestacao->dataResposta)) }}</td>
                                            <td>{{ $manifestacao->responsavelResposta ?? "Não informado" }}</td>
                                            <td>{{ $manifestacao->pessoa ?? "Não informado" }}</td>
                                        </tr>
                                        @php $index++; @endphp
                                    @empty
                                        <tr>
                                            <td colspan="6">* Nenhum registro encontrado</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection