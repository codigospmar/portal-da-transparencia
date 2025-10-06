@extends('theme')
@section("title", "Portal da Transparência - Angra dos Reis :: Dívida Ativa")
@section('content')
<main class="main py-4">

    <div class="container">
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb" class="mb-3">
            <ol class="breadcrumb small">
                <li class="breadcrumb-item"><a href="{{ env("PORTAL_ANGRA") }}">Página Inicial</a></li>
                <li class="breadcrumb-item"><a href="{{ route('index') }}">Portal da Transparência</a></li>
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
            <form action="" method="GET" id="filtro-form" class="border-0 shadow-sm rounded p-3 bg-light">
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
            </form>
        </section>

        <!-- Download -->
        <div class="mb-4 text-center col-4 col-sm-12">
            <a href="https://angra.rj.gov.br/downloads/transparencia/dados-divida-consolidada.csv" target="_blank" class="fw-bold btn border-0 shadow-sm btn-outline-success">
                <i class="fas fa-file-csv me-2"></i> Download do relatório completo (.csv)
            </a>
        </div>

        <!-- Resultados -->
        <section>
            <div class="table-responsive">
                <table class="table table-striped table-bordered align-middle">
                    <thead class="table-success text-center">
                        <tr>
                            <th class="fs-6">Inscrição</th>
                            <th class="fs-6">Imóvel</th>
                            <th class="fs-6">CPF/CNPJ</th>
                            <th class="fs-6">Contribuinte</th>
                            <th class="fs-6">Origem</th>
                            <th class="fs-6">Exercício</th>
                            <th class="fs-6">Data da Dívida</th>
                            <th class="fs-6">Valor Total</th>
                            <th class="fs-6">Certidão</th>
                            <th class="fs-6">Status</th>
                            <th class="fs-6">Parcelado</th>
                            <th class="fs-6">Protestado</th>
                            <th class="fs-6">Ajuizado</th>
                        </tr>
                    </thead>
                    <tbody id="tabela-body">
                        <tr>
                            <td colspan="13" class="text-center py-4">
                                <div class="text-muted">
                                    <i class="fas fa-search fa-2x mb-2"></i>
                                    <p class="mb-0">Nenhum resultado encontrado.<br>Use os filtros acima para pesquisar.</p>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Paginação -->
            <div class="d-flex justify-content-between align-items-center mt-3">
                <small id="paginationInfo" class="text-muted">Mostrando 0 de 0 registros</small>
                <nav aria-label="Navegação de página">
                    <ul class="pagination pagination-sm mb-0">
                        <li class="page-item disabled">
                            <a class="page-link" href="#"><i class="fas fa-chevron-left"></i></a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item disabled">
                            <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </section>
    </div>
</main>
@endsection