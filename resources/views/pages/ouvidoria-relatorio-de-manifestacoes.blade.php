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
                        'route' => route('pages.ouvidoria'),
                        'title' => __("Ouvidoria"),
                    ],
                    [
                        'currentPage' => "page",
                        'title' => __("Relatório de Manifestações"),
                    ],
                ];
            @endphp

            <!-- Título Principal -->
            @include('components._titleMain', [
                "title" => __("Relatório de Manifestações"),
                "summary" => __("Relatórios anuais estatísticos contendo a quantidade de pedidos de acesso recebidos, atendidos e indeferidos."),
            ])
            
            @include('components._bottunsNavOuvidoria')

            <div class="mb-4 text-center col-4 col-sm-12">
                <a href="https://portal.angra.rj.gov.br/ouvidoria-relatorios-manifestacoes.asp?IndexSigla=transp#" target="_blank" class="fw-bold btn border-0 shadow-sm btn-outline-success">
                    <i class="fas fa-file-csv me-2"></i> {{ __("Download do relatório de manifestações (.csv)") }}
                </a>
            </div>

            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title mb-3">{{ __("Filtrar Relatórios") }}</h5>
                    <form action="" method="GET" id="filtro-form">
                        <div class="row g-2 p-2">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="situacao" class="form-label fw-semibold">{{ __("Situação:") }}</label>
                                    <select class="form-select" id="situacao" name="situacao">
                                        <option value="">{{ __("Selecione uma opção...") }}</option>
                                        <option value="Concluída">{{ __("Concluídas") }}</option>
                                        <option value="Cadastrada">{{ __("Cadastradas") }}</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="data" class="form-label fw-semibold">{{ __("Data de Cadastro:") }}</label>
                                    <select class="form-select" id="data" name="data">
                                        <option value="">{{ __("Selecione uma opção...") }}</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                        <option value="2024">2024</option>
                                        <option value="2025">2025</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="pessoa" class="form-label fw-semibold">{{ __("Tipo de Pessoa:") }}</label>
                                    <select class="form-select" id="pessoa" name="pessoa">
                                        <option value="">{{ __("Selecione uma opção...") }}</option>
                                        <option value="Pessoa Física">{{ __("Pessoa Física") }}</option>
                                        <option value="Pessoa Juridica">{{ __("Pessoa Jurídica") }}</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        <!-- Resultados -->
            <section>
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped align-middle text-center">
                                @include('components.tables._thead', ['thead' => [
                                __('Situação'), 
                                __('NUP'), 
                                __('Data de Cadastro'), 
                                __('Data de Resposta'), 
                                __('Responsável pela Resposta'),  
                                __('Tipo de Pessoa'),
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
                                            <td colspan="6">{{ __("* Nenhum registro encontrado") }}</td>
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

    <script>
document.addEventListener("DOMContentLoaded", () => {
const form = document.getElementById("filtro-form");
const rows = document.querySelectorAll("table tbody tr");

form.addEventListener("change", () => {
    const situacao = document.getElementById("situacao").value.toLowerCase();
    const data = document.getElementById("data").value.toLowerCase();
    const pessoa = document.getElementById("pessoa").value.toLowerCase();

    rows.forEach(row => {
        const tdSituacao = row.cells[0]?.textContent.toLowerCase() || "";
        const tdData = row.cells[2]?.textContent.toLowerCase() || "";
        const tdPessoa = row.cells[5]?.textContent.toLowerCase() || "";

        const matchSituacao = !situacao || tdSituacao.includes(situacao);
        const matchData = !data || tdData.includes(data);
        const matchPessoa = !pessoa || tdPessoa.includes(pessoa);

        if (matchSituacao && matchData && matchPessoa) {
            row.style.display = "";
        } else {
            row.style.display = "none";
        }
    });
});
});
    </script>
@endsection