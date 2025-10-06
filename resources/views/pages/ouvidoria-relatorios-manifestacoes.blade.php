@extends('theme')
@section("title", "Portal da Transparência - Angra dos Reis :: Relatórios de Manifestações")
@section('content')
<main class="main py-4">

    <div class="container">
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb" class="mb-3">
            <ol class="breadcrumb small">
                <li class="breadcrumb-item"><a href="{{ route('index') }}">Página Inicial</a></li>
                <li class="breadcrumb-item active" aria-current="page">Relatórios de Manifestações</li>
            </ol>
        </nav>

        <!-- Título Principal -->
        <div class="row mb-4">
            <div class="col-12 text-center">
                <h1 class="display-5 fw-bold text-soft">Relatórios de Manifestações</h1>
            </div>
        </div>

        <div class="container my-4">
            <article class="article-main">
                <div class="mb-4">
                    <p class="mb-4">
                        Relatórios anuais estatísticos contendo a quantidade de pedidos de acesso recebidos, atendidos e indeferidos.
                    </p>
                </div>

                <!-- Filtros -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title mb-3">Filtrar Relatórios</h5>
                        <form action="" method="GET" id="filtro-form">
                            <div class="row g-2 p-2">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="situacao" class="form-label fw-semibold">Situação:</label>
                                        <select class="form-select" id="situacao" name="situacao">
                                            <option value="">Selecione uma opção...</option>
                                            <option value="Concluída">Concluídas</option>
                                            <option value="Cadastrada">Cadastradas</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="data" class="form-label fw-semibold">Data de Cadastro:</label>
                                        <select class="form-select" id="data" name="data">
                                            <option value="">Selecione uma opção...</option>
                                            <option value="2020">2020</option>
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="pessoa" class="form-label fw-semibold">Tipo de Pessoa:</label>
                                        <select class="form-select" id="pessoa" name="pessoa">
                                            <option value="">Selecione uma opção...</option>
                                            <option value="Pessoa Física">Pessoa Física</option>
                                            <option value="Pessoa Juridica">Pessoa Jurídica</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Download -->
                <div class="mb-4 p-2">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-download me-2"></i>
                        <a href="#" id="downloadCSV" target="_blank" class="text-decoration-none fw-semibold">
                            Download do relatório de manifestações .csv
                        </a>
                    </div>
                </div>

                <!-- Tabela -->
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover">
                                <thead class="table-light">
                                    <tr>
                                        <th class="fw-semibold">Situação</th>
                                        <th class="fw-semibold">Data de Cadastro</th>
                                        <th class="fw-semibold">Data de Resposta</th>
                                        <th class="fw-semibold">Responsável pela Resposta</th>
                                        <th class="fw-semibold">Tipo de Pessoa</th>
                                    </tr>
                                </thead>
                                <tbody id="tabela-body">
                                    <!-- Os itens serão adicionados automaticamente -->
                                    <tr>
                                        <td colspan="5" class="text-center text-muted py-4">
                                            Nenhum dado encontrado. Aplique os filtros para visualizar os relatórios.
                                        </td>
                                    </tr>
                                </tbody>
                                <tbody id="tabela-csv" style="display:none;">
                                    <!-- Os itens serão adicionados automaticamente -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </div>
</main>

<!-- Script para funcionalidade dos filtros (opcional) -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const selects = document.querySelectorAll('select');
    selects.forEach(select => {
        select.addEventListener('change', function() {
            // Aqui você pode adicionar a lógica para filtrar a tabela
            console.log('Filtro alterado:', this.name, this.value);
        });
    });
});
</script>
@endsection