@extends('theme')
@section("title", "Portal da Transparência - Angra dos Reis :: Lei Orçamentária Anual - LOA")
@section('content')
<section>

    <div class="container py-5">
        <!-- Breadcrumb -->
        @php
            $breadcrumbs = [
                [
                    'route' => route('index'),
                    'title' => __("Página Inicial"),
                ],
                [
                    'currentPage' => "page",
                    'title' => __("LOA - Lei Orçamentária Anual"),
                ],
            ];
        @endphp
        
        @include('components._breadcrumb', $breadcrumbs)

        <!-- Título Principal -->
        @include('components._titleMain', [
            "title" => __("Lei Orçamentária Anual - LOA"),
            "summary" => __(""),
        ])
        <!-- <p class="lead text-muted">Estabelece as metas e prioridades para o ano financeiro subsequente, orientando a elaboração da lei orçamentária anual</p> -->
        
        <div class="accordion" id="accordionLOA">

            <!-- 2025 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed fs-4 text-soft" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2025" aria-expanded="false" aria-controls="collapse2025">
                        2025 - Lei Nº 4.429/2024
                    </button>
                </h2>
                <div id="collapse2025" class="accordion-collapse collapse" data-bs-parent="#accordionLOA">
                    <div class="accordion-body">
                        <div class="row g-2">
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2025/LOA_Lei-4429.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-success">
                                    <span><i class="fas fa-file-pdf text-success me-2"></i>Lei Nº 4.429/2024</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                        </div>

                        <h5 class="mt-4 mb-3">Anexos</h5>
                        <div class="row g-2">
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2025/LOA_Lei-4429_Anexos/Anexo-1_Demonstrativo-da-Receita-e-Despesa-Segundo-as-Categorias-Economicas.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo 1 - Demonstrativo da Receita e Despesa</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2025/LOA_Lei-4429_Anexos/Anexo-2_Despesa.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo 2 - Despesa</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2025/LOA_Lei-4429_Anexos/Anexo-2_Receita.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo 2 - Receita</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2025/LOA_Lei-4429_Anexos/Anexo-4_ADMINISTRACAO-DIRETA_INDIRETA.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo 4 - Administração Direta - Indireta</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2025/LOA_Lei-4429_Anexos/ANEXO-6_PROGRAMA-DE-TRABALHO-DO-GOVERNO-DISCRIMINADO-POR-UNIDADES-ORCAMENTARIAS.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo 6 - Programa de Trabalho (Unidades)</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2025/LOA_Lei-4429_Anexos/ANEXO-6_PROGRAMA-DE-TRABALHO-DO-GOVERNO.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo 6 - Programa de Trabalho do Governo</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2025/LOA_Lei-4429_Anexos/ANEXO-7_DEMONSTRATIVO-DE-FUNCOES-SUBFUNCOES-E-PROGRAMAS-PARA-PROJETOS-E-ATIVIDADES.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo 7 - Demonstrativo de Funções</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2025/LOA_Lei-4429_Anexos/ANEXO-8_DEMONSTRATIVO-DA-DESPESA-POR-FUNCOES-SUB-FUNCOES-E-PROGRAMAS-CONFORME-O-VINCULO-COM-OS.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo 8 - Demonstrativo da Despesa</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2025/LOA_Lei-4429_Anexos/ANEXO-9.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo 9</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2025/LOA_Lei-4429_Anexos/DEMONSTRATIVO-I.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Demonstrativo I</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2025/LOA_Lei-4429_Anexos/DEMONSTRATIVO-II.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Demonstrativo II</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2025/LOA_Lei-4429_Anexos/DEMONSTRATIVO-III.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Demonstrativo III</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2025/LOA_Lei-4429_Anexos/DEMONSTRATIVO-IV.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Demonstrativo IV</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2025/LOA_Lei-4429_Anexos/QUADRO-I.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Quadro I</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2025/LOA_Lei-4429_Anexos/QUADRO-II.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Quadro II</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2025/LOA_Lei-4429_Anexos/QUADRO-III.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Quadro III</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2025/LOA_Lei-4429_Anexos/QUADRO-IV.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Quadro IV</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2024 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed fs-4 text-soft" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2024" aria-expanded="false" aria-controls="collapse2024">
                        2024 - Lei Nº 4.271/2023
                    </button>
                </h2>
                <div id="collapse2024" class="accordion-collapse collapse" data-bs-parent="#accordionLOA">
                    <div class="accordion-body">
                        <div class="row g-2">
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2024/LOA-2024_Lei-4271-2023.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-success">
                                    <span><i class="fas fa-file-pdf text-success me-2"></i>Lei Nº 4.271/2023 e anexos</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                        </div>

                        <!-- Abertura de Crédito Suplementar -->
                        <div class="mt-4">
                            <h5 class="mb-3">Abertura de Crédito Suplementar</h5>
                            <div class="row g-2">
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2024/AberturaCredito/Lei-4340-2024.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Lei Nº 4.340/2024</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2024/AberturaCredito/AberturaCredito/Decretos-AberturadeCredito.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decretos de abertura de créditos</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2024/AberturaCredito/Decreto-13471.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 13.471, 04 de abril de 2024</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2024/AberturaCredito/Decreto-13516.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 13.516, 26 de abril de 2024</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2024/AberturaCredito/Decreto-13517.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 13.517, 26 de abril de 2024</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2024/AberturaCredito/Decreto-13518.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 13.518, 29 de abril de 2024</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2024/AberturaCredito/Decreto-13523.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 13.523, 02 de maio de 2024</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2024/AberturaCredito/Decreto-13529.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 13.529, 03 de maio of 2024</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2024/AberturaCredito/Decreto-13551.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 13.551, 17 de maio de 2024</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2024/AberturaCredito/Decreto-13663.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 13.563, 24 de maio de 2024</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2024/AberturaCredito/Decreto-13577.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 13.577, 10 de junho de 2024</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2024/AberturaCredito/Decreto-13588.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 13.588, 19 de junho de 2024</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2024/AberturaCredito/Decreto-13589.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 13.589, 19 de junho de 2024</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2024/AberturaCredito/Decreto-13663.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 13.663, 01 de agosto de 2024</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2024/AberturaCredito/Decreto-13664.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 13.664, 01 de agosto de 2024</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2024/AberturaCredito/Decreto-13671.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 13.671, 02 de agosto de 2024</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2024/AberturaCredito/Decreto-13672.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 13.672, 02 de agosto de 2024</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2024/AberturaCredito/Decreto-13674.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 13.674, 05 de agosto de 2024</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2024/AberturaCredito/Decreto-13721.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 13.721, 06 de setembro de 2024</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2024/AberturaCredito/Decreto-13722.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 13.722, 06 de setembro de 2024</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2024/AberturaCredito/Decreto-13723.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 13.723, 06 de setembro de 2024</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2024/AberturaCredito/Decreto-13733.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 13.733, 13 de setembro de 2024</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2024/AberturaCredito/Decreto-13734.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 13.734, 13 de setembro de 2024</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2024/AberturaCredito/Decreto-13735.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 13.735, 13 de setembro of 2024</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2024/AberturaCredito/Decreto-13736.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 13.736, 13 de setembro de 2024</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2024/AberturaCredito/Decreto-13737.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 13.737, 13 de setembro de 2024</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2024/AberturaCredito/Decreto-13785.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 13.785, 17 de outubro de 2024</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2024/AberturaCredito/Decreto-13786.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 13.786, 17 de outubro de 2024</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2024/AberturaCredito/Decreto-13816.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 13.816, 07 de novembro de 2024</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2024/AberturaCredito/Decreto-13817.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 13.817, 07 de novembro de 2024</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2024/AberturaCredito/Decreto-13821.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 13.821, 12 de novembro de 2024</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2024/AberturaCredito/Decreto-13822.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 13.822, 12 de novembro de 2024</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2024/AberturaCredito/Decreto-13823.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 13.823, 12 de novembro de 2024</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2024/AberturaCredito/Decreto-13824.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 13.824, 12 de novembro de 2024</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2024/AberturaCredito/Decreto-13825.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 13.825, 12 de novembro de 2024</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2024/AberturaCredito/Decreto-13846.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 13.846, 05 de dezembro de 2024</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2024/AberturaCredito/Decreto-13847.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 13.847, 05 de dezembro de 2024</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2024/AberturaCredito/Decreto-13861.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 13.861, 16 de dezembro de 2024</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2024/AberturaCredito/Decreto-13862.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 13.862, 16 de dezembro de 2024</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2024/AberturaCredito/Decreto-13866.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 13.866, 19 de dezembro de 2024</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2024/AberturaCredito/Decreto-13870.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 13.870, 19 de dezembro de 2024</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2024/AberturaCredito/Decreto-13871.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 13.871, 19 de dezembro de 2024</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2024/AberturaCredito/Decreto-13872.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 13.872, 19 de dezembro de 2024</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2024/AberturaCredito/Decreto-13873.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 13.873, 19 de dezembro de 2024</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2024/AberturaCredito/Decreto-13874.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 13.874, 19 de dezembro de 2024</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Emendas impositivas -->
                        <div class="mt-4">
                            <h5 class="mb-3">Emendas impositivas</h5>
                            <div class="alert alert-info">
                                <p class="mb-0"><strong>O município não recebeu emenda impositiva individual (orçamento secreto) no exercício de 2024</strong></p>
                                <p class="mb-0 mt-2">Essas informações no sítio da internet do Município (Portal da Transparência) conforme inciso XXXIII, artigo 5º da CFRB c/c a Lei federal Nº 12.627/11 e o artigo 48 da Lei Federal Nº 101/00.</p>
                            </div>
                        </div>

                        <!-- Situação de Emergência -->
                        <div class="mt-4">
                            <h5 class="mb-3">Situação de Emergência</h5>
                            <div class="alert alert-info">
                                <p class="mb-0">Não houve Decreto que declare situação de Estado de Calamidade Pública para o ano de 2024, conforme demostrado no Processo Nº 212080-6/2024, <strong><a href="https://www.tcerj.tc.br/consulta-processo/VisualizarPDF/VisualizarPDF?url=documento/processo/212080/6/2024/documento/44" target="_blank">peça 08</a></strong> e <strong><a href="https://www.tcerj.tc.br/consulta-processo/VisualizarPDF/VisualizarPDF?url=documento/processo/212080/6/2024/documento/43" target="_blank">peça 09</a></strong>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2023 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed fs-4 text-soft" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2023" aria-expanded="false" aria-controls="collapse2023">
                        2023 - Lei Nº 4.155/2022
                    </button>
                </h2>
                <div id="collapse2023" class="accordion-collapse collapse" data-bs-parent="#accordionLOA">
                    <div class="accordion-body">
                        <div class="row g-2">
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2023/LOA-Lei-4155-2022/4155-2022 - LOA.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-success">
                                    <span><i class="fas fa-file-pdf text-success me-2"></i>Lei Nº 4.155/2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                        </div>

                        <h5 class="mt-4 mb-3">Anexos</h5>
                        <div class="row g-2">
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2023/LOA-Lei-4155-2022/2 - Anexo 1 - Demonstrativo da Receita e Despesa, Segundo as Categorias Economicas.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo 1 - Demonstrativo da Receita e Despesa</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2023/LOA-Lei-4155-2022/3 - Anexo 2 Despesa.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo 2 - Despesa</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2023/LOA-Lei-4155-2022/4 - Anexo 2 Receita.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo 2 - Receita</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2023/LOA-Lei-4155-2022/5 - Anexo 4 - ADMINISTRACAO DIRETA - INDIRETA.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo 4 - Administração Direta - Indireta</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2023/LOA-Lei-4155-2022/6 - ANEXO 6 - PROGRAMA DE TRABALHO DO GOVERNO DISCRIMINADO POR UNIDADES ORCAMENTARIAS.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo 6 - Programa de Trabalho (Unidades)</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2023/LOA-Lei-4155-2022/7 - ANEXO 6 - PROGRAMA DE TRABALHO DO GOVERNO.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo 6 - Programa de Trabalho do Governo</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2023/LOA-Lei-4155-2022/8 - ANEXO 7 - DEMONSTRATIVO DE FUNCOES, SUBFUNCOES E PROGRAMAS PARA PROJETOS E ATIVIDADES.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo 7 - Demonstrativo de Funções</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2023/LOA-Lei-4155-2022/9 - ANEXO 8 - DEMONSTRATIVO DA DESPESA POR FUNCOES, SUB-FUNCOES E PROGRAMAS CONFORME O VINCULO COM OS RECURSOS.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo 8 - Demonstrativo da Despesa</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2023/LOA-Lei-4155-2022/10 - ANEXO 9.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo 9</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2023/LOA-Lei-4155-2022/11 - DEMONSTRATIVO I.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Demonstrativo I</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2023/LOA-Lei-4155-2022/12 - DEMONSTRATIVO II.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Demonstrativo II</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2023/LOA-Lei-4155-2022/13 - DEMONSTRATIVO III.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Demonstrativo III</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2023/LOA-Lei-4155-2022/14 - DEMONSTRATIVO IV.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Demonstrativo IV</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2023/LOA-Lei-4155-2022/15 - QUADRO I.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Quadro I</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2023/LOA-Lei-4155-2022/16 - QUADRO II.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Quadro II</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2023/LOA-Lei-4155-2022/17 - QUADRO III.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Quadro III</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2023/LOA-Lei-4155-2022/18 - QUADRO IV.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Quadro IV</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                        </div>

                        <!-- Abertura de Crédito Suplementar -->
                        <div class="mt-4">
                            <h5 class="mb-3">Abertura de Crédito Suplementar</h5>
                            <div class="row g-2">
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4095_2022-05-24/Lei-N-4095-2022-05-24.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Lei 4.095 - Autoriza abertura de crédito</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4095_2022-05-24/12.646---28.06.2022-(errata).pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Errata do Decreto 12.646</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4095_2022-05-24/12.646---28.06.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 12.646, 28 de junho de 2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4095_2022-05-24/12.647---28.06.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 12.647, 28 de junho de 2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4095_2022-05-24/12.648---29.06.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 12.648, 29 de junho de 2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4095_2022-05-24/12.652---04.07.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 12.652, 04 de julho de 2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4095_2022-05-24/12.653---04.07.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 12.653, 04 de julho de 2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4095_2022-05-24/12.655---06.07.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 12.655, 06 de julho de 2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4095_2022-05-24/12.656---06.07.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 12.656, 06 de julho de 2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4095_2022-05-24/12.657---06.07.022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 12.657, 06 de julho de 2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4095_2022-05-24/12.658---07.07.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 12.658, 07 de julho de 2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4095_2022-05-24/12.659---07.07.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 12.659, 07 de julho de 2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4095_2022-05-24/12.661---07.07.2023.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 12.661, 07 de julho de 2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4095_2022-05-24/12.663---12.07.2022-(republicacao).pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Republicação do Decreto 12.663</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4095_2022-05-24/12.663---12.07.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 12.663, 12 de julho de 2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4095_2022-05-24/12.665---12.07.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 12.665, 12 de julho de 2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4095_2022-05-24/12.666---14.07.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 12.666, 14 de julho de 2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4095_2022-05-24/12.667---14.07.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 12.667, 14 de julho de 2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4095_2022-05-24/12.671---15.07.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 12.671, 15 de julho de 2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4095_2022-05-24/12.673---20.07.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 12.673, 20 de julho de 2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4095_2022-05-24/12.674---20.07.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 12.674, 20 de julho de 2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.675---21.07.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 12.675, 21 de julho de 2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.677---21.07.2022-(errata).pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Errata do Decreto 12.677</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.677---21.07.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 12.677, 20 de julho de 2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.678---21.07.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 12.678, 21 de julho de 2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.679---21.07.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 12.679, 21 de julho de 2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.680---22.07.2022-(errata).pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Errata do Decreto 12.680</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.680---22.07.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 12.680, 22 de julho de 2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.681---22.07.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 12.681, 22 de julho de 2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.682---22.07.2023.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 12.682, 22 de julho de 2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.683---25.07.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 12.683, 25 de julho de 2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.686---27.07.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 12.686, 27 de julho de 2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.687---27.07.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 12.687, 27 de julho de 2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.688---27.07.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 12.688, 27 de julho de 2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.690---28.07.2020.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 12.690, 28 de julho de 2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.694---01.08.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 12.694, 01 de agosto de 2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.695---03.08.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 12.695, 03 de agosto de 2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.697---09.08.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 12.697, 09 de agosto of 2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.700---09.08.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 12.700, 09 de agosto de 2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.701---10.08.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 12.701, 10 de agosto de 2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.702---11.08.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 12.702, 11 de agosto de 2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.704---12.08.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 12.704, 12 de agosto de 2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.705---12.08.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 12.705, 12 de agosto de 2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.706---12.08.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 12.706, 12 de agosto de 2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.708---16.08.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 12.708, 16 de agosto de 2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.709---17.08.2022-(errata).pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Errata do Decreto 12.709</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.709---17.08.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 12.709, 17 de agosto de 2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.711---18.08.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 12.711, 18 de agosto de 2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.715---19.08.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 12.715, 19 de agosto de 2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.718---22.08.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 12.718, 22 de agosto de 2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.719---22.08.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 12.719, 22 de agosto de 2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.721---24.08.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 12.721, 24 de agosto de 2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.722---24.08.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 12.722, 24 de agosto de 2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.723---26.08.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 12.641, 26 de agosto de 2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.725---29.08.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 12.725, 29 de agosto de 2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.726---29.08.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 12.726, 29 de agosto de 2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.727---29.08.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 12.727, 29 de agosto de 2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.733---01.09.2022-(errata).pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Errata do Decreto 12.733</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.733---01.09.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 12.733, 01 de setembro de 2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.734---05.09.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 12.734, 05 de setembro de 2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.735---05.09.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 12.735, 05 de setembro de 2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.736---05.09.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 12.736, 05 de setembro de 2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.739---08.09.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 12.739, 08 de setembro de 2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.740---08.09.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 12.740, 08 de setembro de 2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.742---14.09.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 12.742, 14 de setembro de 2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.745---15.09.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 12.745, 15 de setembro de 2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.749---20.09.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 12.749, 20 de setembro de 2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.751---21.09.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 12.751, 21 de setembro de 2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.753---22.09.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 12.753, 22 de setembro de 2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.754---22.09.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 12.754, 22 de setembro de 2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.756---26.09.2022-(errata).pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Errata do Decreto 12.756</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.756---26.09.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 12.756, 23 de setembro de 2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.759---28.09.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 12.759, 28 de setembro de 2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.760---29.09.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 12.760, 29 de setembro de 2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.762---30.09.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 12.762, 30 de setembro de 2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.763---30.09.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 12.763, 30 de setembro de 2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.765---05.10.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 12.765, 05 de outubro de 2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.768---06.10.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 12.768, 06 de outubro de 2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.769---07.10.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 12.769, 07 de outubro de 2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.773---11.10.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 12.773, 11 de outubro de 2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>

                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.776---14.10.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary decreto-btn">
                                        <span>Decreto 12.776, 14/10/2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.784---19.10.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary decreto-btn">
                                        <span>Decreto 12.784, 19/10/2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.790---25.10.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary decreto-btn">
                                        <span>Decreto 12.790, 25/10/2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.791---25.10.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary decreto-btn">
                                        <span>Decreto 12.791, 25/10/2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.792---25.10.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary decreto-btn">
                                        <span>Decreto 12.792, 25/10/2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.795---26.10.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary decreto-btn">
                                        <span>Decreto 12.795, 26/10/2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.796---26.10.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary decreto-btn">
                                        <span>Decreto 12.796, 26/10/2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.797---26.10.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary decreto-btn">
                                        <span>Decreto 12.797, 26/10/2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.800---31.10.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary decreto-btn">
                                        <span>Decreto 12.780, 31/10/2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.801---03.11.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary decreto-btn">
                                        <span>Decreto 12.801, 03/11/2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.805---04.11.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary decreto-btn">
                                        <span>Decreto 12.805, 04/11/2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.806---04.11.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary decreto-btn">
                                        <span>Decreto 12.806, 04/11/2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.807---04.11.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary decreto-btn">
                                        <span>Decreto 12.807, 04/11/2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.811---08.11.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary decreto-btn">
                                        <span>Decreto 12.811, 08/11/2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.814---10.11.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary decreto-btn">
                                        <span>Decreto 12.814, 10/11/2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.817---17.11.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary decreto-btn">
                                        <span>Decreto 12.817, 17/11/2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.821---18.11.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary decreto-btn">
                                        <span>Decreto 12.821, 18/11/2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.827---25.11.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary decreto-btn">
                                        <span>Decreto 12.827, 25/11/2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.828---25.11.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary decreto-btn">
                                        <span>Decreto 12.828, 25/11/2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.829---25.11.2022-(errata).pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary decreto-btn">
                                        <span>Errata Decreto 12.829</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.829---25.11.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary decreto-btn">
                                        <span>Decreto 12.829, 25/11/2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.831---30.11.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary decreto-btn">
                                        <span>Decreto 12.831, 30/11/2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.832---01.12.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary decreto-btn">
                                        <span>Decreto 12.832, 01/12/2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.835---07.12.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary decreto-btn">
                                        <span>Decreto 12.835, 07/12/2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.836---07.12.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary decreto-btn">
                                        <span>Decreto 12.836, 07/12/2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.837---07.12.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary decreto-btn">
                                        <span>Decreto 12.837, 07/12/2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.838---07.12.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary decreto-btn">
                                        <span>Decreto 12.838, 07/12/2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.842---14.12.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary decreto-btn">
                                        <span>Decreto 12.842, 14/12/2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.844---15.12.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary decreto-btn">
                                        <span>Decreto 12.844, 15/12/2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.845---15.12.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary decreto-btn">
                                        <span>Decreto 12.845, 15/12/2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.847---20.12.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary decreto-btn">
                                        <span>Decreto 12.847, 20/12/2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.848---20.12.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary decreto-btn">
                                        <span>Decreto 12.848, 20/12/2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.849---20.12.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary decreto-btn">
                                        <span>Decreto 12.849, 20/12/2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.850---22.12.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary decreto-btn">
                                        <span>Decreto 12.850, 22/12/2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.851---22.12.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary decreto-btn">
                                        <span>Decreto 12.851, 22/12/2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.852---22.12.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary decreto-btn">
                                        <span>Decreto 12.852, 22/12/2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.855---26.12.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary decreto-btn">
                                        <span>Decreto 12.855, 26/12/2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.856---27.12.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary decreto-btn">
                                        <span>Decreto 12.856, 27/12/2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.857---27.12.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary decreto-btn">
                                        <span>Decreto 12.857, 27/12/2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.860---27.12.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary decreto-btn">
                                        <span>Decreto 12.860, 27/12/2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.861---27.12.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary decreto-btn">
                                        <span>Decreto 12.861, 27/12/2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.864---27.12.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary decreto-btn">
                                        <span>Decreto 12.864, 27/12/2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.865---28.12.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary decreto-btn">
                                        <span>Decreto 12.865, 28/12/2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.866---28.12.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary decreto-btn">
                                        <span>Decreto 12.866, 28/12/2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/12.867---28.12.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary decreto-btn">
                                        <span>Decreto 12.866, 28/12/2022</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2022 -->

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed fs-4 text-soft" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2022" aria-expanded="false" aria-controls="collapse2022">
                        2022 - Lei Nº 4.025/2021
                    </button>
                </h2>
                <div id="collapse2022" class="accordion-collapse collapse" data-bs-parent="#accordionLOA">
                    <div class="accordion-body">
                        <div class="row g-2">
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/1-Lei-N-4025-10.12.2021.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-success">
                                    <span><i class="fas fa-file-pdf text-success me-2"></i>Lei Nº 4.025/2021</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                        </div>

                        <h5 class="mt-4 mb-3">Anexos</h5>
                        <div class="row g-2">
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/2-Anexo-1-Demonstrativo-da-Receita-e-Despesa-Segundo-as-Categorias-Economicas.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo I - Demonstrativo da Receita e Despesa</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/3-Anexo-2-Despesa.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo II - Despesa</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/4-Anexo-2-Receita.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo II - Receita</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/5-Anexo-4-ADMINISTRACAO-DIRETA-INDIRETA.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo IV - Administração Direta Indireta</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/6-ANEXO-6-PROGRAMA-DE-TRABALHO-DO-GOVERNO-DISCRIMINADO-POR-UNIDADES-ORCAMENTARIAS.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo VI - Programa de Trabalho (Unidades)</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/7-ANEXO-6-PROGRAMA-DE-TRABALHO-DO-GOVERNO.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo VI - Programa de Trabalho do Governo</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/8-ANEXO-7-DEMONSTRATIVO-DE-FUNCOES-SUBFUNCOES-E-PROGRAMAS-PARA-PROJETOS-E-ATIVIDADES.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo VII - Demonstrativo de Funções</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/9-ANEXO-8-DEMONSTRATIVO-DA-DESPESA-POR-FUNCOES-SUB-FUNCOES-E-PROGRAMAS-CONFORME-O-VINCULO-COM-OS.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo VIII - Demonstrativo da Despesa</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/10-ANEXO-9.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo IX - Demonstrativo da despesa</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/11-DEMONSTRATIVO-I.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Demonstrativo I - Compatibilidade da programação</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12-DEMONSTRATIVO-II.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Demonstrativo II - Estimativa e compensação</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/13-DEMONSTRATIVO-III.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Demonstrativo III - Medidas de compensação</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/14-DEMONSTRATIVO-IV.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Demonstrativo IV - Reserva de contingência</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/15-QUADRO-I.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Quadro I</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/16-QUADRO-II.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Quadro II</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/17-QUADRO-III.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Quadro III</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/18-QUADRO-IV.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Quadro IV</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/Capa-LOA-2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Capa</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                        </div>
                        <div class="row">

                            <!-- Abertura de Crédito Suplementar -->
                            <div class="mt-4">
                                <h5 class="mb-3">Abertura de Crédito Suplementar</h5>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.642---24.06.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.642, 24 de junho de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.641---24.06.2022-(republicacao).pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Republica&ccedil;&atilde;o do Decreto 12.641, 24 de junho de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.641---24.06.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.641, 24 de junho de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.640---23.06.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.640, 23 de junho de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.639---23.06.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.639, 23 de junho de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.638---23.06.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.638, 23 de junho de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.638---23.06.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.638, 23 de junho de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.637---23.06.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.637, 23 de junho de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.636---23.06.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.636, 23 de junho de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.635---23.06.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.635, 23 de junho de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.634---23.06.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.634, 23 de junho de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.633---22.06.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.633, 22 de junho de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.632---22.06.22.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.632, 22 de junho de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.624---14.06.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.624, 14 de junho de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.622---14.06.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.622, 14 de junho de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.621---13.06.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.621, 13 de junho de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.620---13.06.2022-(errata).pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Errata do Decreto 12.620, 13 de junho de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.620---13.06.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.620, 13 de junho de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.619---13.06.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.619, 13 de junho de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.617---09.06.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.617, 09 de junho de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.615---09.06.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.615, 09 de junho de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.614---09.06.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.614, 09 de junho de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.612---09.06.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.612, 09 de junho de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.610---07.06.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.610, 07 de junho de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.609---03.06.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.609, 03 de junho de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.608---27.05.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.608, 27 de maio de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.607---27.05.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.607, 27 de maio de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.606---26.05.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.606, 26 de maio de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.605---26.05.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.605, 26 de maio de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.604---26.05.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.604, 26 de maio de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.600---24.05.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.600, 24 de maio de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.598---20.05.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.598, 20 de maio de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.597---17.05.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.597, 17 de maio de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.596---17.05.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.596, 17 de maio de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.592---13.05.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.592, 13 de maio de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.591---12.05.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.591, 12 de maio de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.589---09.05.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.589, 09 de maio de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.584---05.05.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.584, 05 de maio de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.583---04.05.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Republica&ccedil;&atilde;o do Decreto 12.583, 04 de maio de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.579---28.04.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.579, 28 de abril de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.578---27.04.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.578, 27 de abril de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.577---14.04.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.557, 14 de abril de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.576---13.04.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.576, 13 de abril de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.575---13.04.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.575, 13 de abril de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.574---12.04.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.574, 12 de abril de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.571---08.04.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.571, 08 de abril de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.570---08.04.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.570, 08 de abril de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.569---08.04.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.569, 08 de abril de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.568---08.04.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.568, 08 de abril de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.567---08.04.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.567, 08 de abril de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.566---08.04.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.566, 08 de abril de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.556---06.04.2023.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.556, 06 de abril de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.554---04.04.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.554, 04 de abril de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.551---01.04.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.551, 01 de abril de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.550---30.03.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.550, 30 de mar&ccedil;o de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.549---30.03.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.549, 30 de mar&ccedil;o de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.547---29.03.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.547, 29 de mar&ccedil;o de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.546---28.03.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.546, 28 de mar&ccedil;o de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.545---28.03.2022-(republicacao).pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Republica&ccedil;&atilde;o do Decreto 12.545, 28 de mar&ccedil;o de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.545---28.03.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.545, 28 de mar&ccedil;o de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.543---28.03.2022-(republicacao)).pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Republica&ccedil;&atilde;o do Decreto 12.543, 28 de mar&ccedil;o de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.543---28.03.20222.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.513, 28 de mar&ccedil;o de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.542---25.03.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.542, 25 de mar&ccedil;o de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.541---25.03.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.541, 25 de mar&ccedil;o de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.539---24.03.2022-(republicacao).pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Republica&ccedil;&atilde;o do Decreto 12.539, 24 de mar&ccedil;o de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.539---24.03.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.539, 24 de mar&ccedil;o de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.537---23.03.2022-(republicacao).pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Republica&ccedil;&atilde;o do Decreto 12.537, 23 de mar&ccedil;o de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.537---23.03.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.537, 23 de mar&ccedil;o de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.536---23.03.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.536, 23 de mar&ccedil;o de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.533---21.03.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.533, 21 de mar&ccedil;o de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.531---18.03.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.531, 18 de mar&ccedil;o de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.525---15.03.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.525, 15 de mar&ccedil;o de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.524---15.03.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.524, 15 de mar&ccedil;o de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.523---15.03.2022-(errata).pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Errata do Decreto 12.523, 15 de mar&ccedil;o de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.523---15.03.2022-(republicacao).pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Republica&ccedil;&atilde;o do Decreto 12.523, 15 de mar&ccedil;o de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.523---15.03.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.523, 15 de mar&ccedil;o de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.522---15.03.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.522, 15 de mar&ccedil;o de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.521---15.03.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.521, 15 de mar&ccedil;o de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.520---15.03.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.520, 15 de mar&ccedil;o de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.517---08.03.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.517, 08 de mar&ccedil;o de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.516---08.03.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.516, 08 de mar&ccedil;o de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.515---08.03.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.515, 08 de mar&ccedil;o de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.514---08.03.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.514, 08 de mar&ccedil;o de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.512---07.03.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.512, 07 de mar&ccedil;o de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.511---07.03.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.511, 07 de mar&ccedil;o de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.509---04.03.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.509, 04 de mar&ccedil;o de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.505---25.02.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.505, 25 de fevereiro de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.504---25.02.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.504, 25 de fevereiro de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.503---23.02.2022-(republicacao).pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Republica&ccedil;&atilde;o do Decreto 12.503, 23 de fevereiro de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.503---23.02.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.503, 23 de fevereiro de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.501---22.02.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.501, 22 de fevereiro de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.500---22.02.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.500, 22 de fevereiro de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.499---21.02.2022-(errata).pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Errata do Decreto 12.499, 21 de fevereiro de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.499---21.02.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.499, 21 de fevereiro de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.495---16.02.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.495, 16 de fevereiro de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.492---15.02.2022-(errata).pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Errata do Decreto 12.492, 15 de fevereiro de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.492---15.02.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.492, 15 de fevereiro de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.490---14.02.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.490, 14 de fevereiro de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.489---11.02.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.489, 11 de fevereiro de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.485---08.02.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.485, 08 de fevereiro de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.483---08.02.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.483, 08 de fevereiro de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.482---08.02.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.482, 08 de fevereiro de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.481---04.02.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.481, 04 de fevereiro de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.477---02.02.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.477, 02 de fevereiro de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.476---02.02.2022-(republicacao).pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Errata do Decreto 12.476, 02 de fevereiro de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.476---02.02.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.476, 02 de fevereiro de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.472---31.01.2022-(republicacao).pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Republica&ccedil;&atilde;o do Decreto 12.472, 31 de janeiro de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.472---31.01.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.472, 31 de janeiro de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.470---31.01.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.470, 31 de janeiro de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.468---27.01.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.468, 27 de janeiro de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.463---25.01.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.463, 25 de janeiro de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.458---21.01.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.458, 21 de janeiro de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.441---03.01.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.441, 03 de janeiro de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LOA-Lei4025_10-12-2021/12.440---03.01.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Decreto 12.440, 03 de janeiro de 2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                        </div>

                        <!-- Emendas impositivas -->
                        <div class="mt-4">
                            <h5 class="mb-3">Emendas impositivas</h5>
                            <div class="alert alert-info">
                                <p class="mb-0"><strong>O município não recebeu emenda impositiva individual (orçamento secreto) no exercício de 2022</strong></p>
                                <p class="mb-0 mt-2">Essas informações no sítio da internet do Município (Portal da Transparência) conforme inciso XXXIII, artigo 5º da CFRB c/c a Lei federal Nº 12.627/11 e o artigo 48 da Lei Federal Nº 101/00.</p>
                            </div>
                        </div>

                        <!-- Situação de Emergência -->
                        <div class="mt-4">
                            <h5 class="mb-3">Situação de Emergência</h5>
                            <div class="row g-2">
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/decreto-12.553---02.04.2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Decreto 12.553, 02/04/2022 - Situação de Emergência</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- 2021 -->

                        <!-- 2021 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed fs-4 text-soft" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2021" aria-expanded="false" aria-controls="collapse2021">
                        2021 - Lei Nº 3.942/2020
                    </button>
                </h2>
                <div id="collapse2021" class="accordion-collapse collapse" data-bs-parent="#accordionLOA">
                    <div class="accordion-body">
                          <div class="row g-2">
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2021/3942-2020-LOA/1-3.942-2020-LOA.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-success">
                                    <span><i class="fas fa-file-pdf text-success me-2"></i>Lei Nº 3.942/2020</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                        </div>

                        <!-- Anexos -->
                        <div class="mt-4">
                            <h5 class="mb-3">Anexos</h5>
                            <div class="row g-2">
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2021/3942-2020-LOA/15-QUADROI.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Quadro I - Receita Estimada</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2021/3942-2020-LOA/16-QUADROII.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Quadro II - Demonstrativo da Despesa por Unidade Orçamentária</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2021/3942-2020-LOA/17-QUADROIII.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Quadro III - Demonstrativo de Despesas por Programa e Orçamento consolidado</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2021/3942-2020-LOA/18-QUADROIV.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Quadro IV - Demonstrativo de despesas por função e subfunção</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2021/3942-2020-LOA/11-DEMONSTRATIVOI.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Demonstrativo I - Demonstrativo da compatibilidade da programação do orçamento com as metas previstas no anexo de metas fiscais da lei de diretrizes orçamentárias - CONSOLIDADO</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2021/3942-2020-LOA/12-DEMONSTRATIVOII.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Demonstrativo II - Estimativa e compensação da renúncia de receita</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2021/3942-2020-LOA/13-DEMONSTRATIVOIII.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Demonstrativo III - Demonstrativo das medidas de compensação ao aumento das despesas obrigatórias de caráter continuado</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2021/3942-2020-LOA/14-DEMONSTRATIVOIV.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Demonstrativo IV - Demonstrativo da reserva de contingência</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2021/3942-2020-LOA/2-Anexo1.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo I - Demonstrativo da Receita e Despesa, Segundo as Categorias Econômicas</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2021/3942-2020-LOA/3-Anexo2.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo II - Receita Consolidado</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2021/3942-2020-LOA/3-Anexo2.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo II - Despesa Consolidado Geral</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2021/3942-2020-LOA/5-Anexo4.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo IV - Demonstrativo das Despesas por Projetos, Atividades e Operações Especiais conforme as Fontes de Recursos e Categorias Econômicas</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2021/3942-2020-LOA/7-ANEXO6.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo VI - Programa de Trabalho do Governo</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2021/3942-2020-LOA/6-ANEXO6.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo VI - Programa de Trabalho do Governo Discriminado por Unidades Orçamentárias</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2021/3942-2020-LOA/8-ANEXO7.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo VII - Demonstrativo de Funções, Subfunções e Programas para Projetos e Atividades</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2021/3942-2020-LOA/9-ANEXO8.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo VIII - Demonstrativo da Despesa por Funções, Sub-Funções e Programas conforme o vinculo com os Recursos</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2021/3942-2020-LOA/10-ANEXO9.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo IX - Demonstrativo da Despesa por órgão e Funções</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2020 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed fs-4 text-soft" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2020" aria-expanded="false" aria-controls="collapse2020">
                        2020 - Lei Nº 3.917/2019
                    </button>
                </h2>
                <div id="collapse2020" class="accordion-collapse collapse" data-bs-parent="#accordionLOA">
                    <div class="accordion-body">
                        <div class="row g-2">
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2020/3917-2019-LOA/Lei3917.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-success">
                                    <span><i class="fas fa-file-pdf text-success me-2"></i>Lei Nº 3.917/2019</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2020/audiencia-publica-loa-2020.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-success">
                                    <span><i class="fas fa-file-pdf text-success me-2"></i>Audiência Pública - LOA 2020</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                        </div>

                        <!-- Anexos -->
                        <div class="mt-4">
                            <h5 class="mb-3">Anexos</h5>
                            <div class="row g-2">
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2020/3917-2019-LOA/QuadroI.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Quadro I - Receita Estimada</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2020/3917-2019-LOA/QuadroII.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Quadro II - Demonstrativo da Despesa por Unidade Orçamentária</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2020/3917-2019-LOA/QuadroIII.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Quadro III - Demonstrativo de Despesas por Programa e Orçamento consolidado</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2020/3917-2019-LOA/QuadroIV.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Quadro IV - Demonstrativo de despesas por função e subfunção</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2020/3917-2019-LOA/DemonstrativoI.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Demonstrativo I - Demonstrativo da compatibilidade da programação do orçamento com as metas previstas no anexo de metas fiscais da lei de diretrizes orçamentárias - CONSOLIDADO</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2020/3917-2019-LOA/DemonstrativoII.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Demonstrativo II - Estimativa e compensação da renúncia de receita</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2020/3917-2019-LOA/DemonstrativoIII.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Demonstrativo III - Demonstrativo das medidas de compensação ao aumento das despesas obrigatórias de caráter continuado</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2020/3917-2019-LOA/DemonstrativoIV.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Demonstrativo IV - Demonstrativo da reserva de contingência</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2020/3917-2019-LOA/AnexoI.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo I - Demonstrativo da Receita e Despesa, Segundo as Categorias Econômicas</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2020/3917-2019-LOA/AnexoII.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo II - Receita Consolidado</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2020/3917-2019-LOA/AnexoIII.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo III - Despesa Consolidado Geral</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2020/3917-2019-LOA/AnexoIV.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo IV - Demonstrativo das Despesas por Projetos, Atividades e Operações Especiais conforme as Fontes de Recursos e Categorias Econômicas</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2020/3917-2019-LOA/AnexoV.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo V - Programa de Trabalho do Governo</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2020/3917-2019-LOA/AnexoVI.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo VI - Programa de Trabalho do Governo Discriminado por Unidades Orçamentárias</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2020/3917-2019-LOA/AnexoVII.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo VII - Demonstrativo de Funções, Subfunções e Programas para Projetos e Atividades</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2020/3917-2019-LOA/AnexoVIII.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo VIII - Demonstrativo da Despesa por Funções, Sub-Funções e Programas conforme o vinculo com os Recursos</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


                        <!-- 2019 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed fs-4 text-soft" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2019" aria-expanded="false" aria-controls="collapse2019">
                        2019 - Lei Nº 3.820/2018
                    </button>
                </h2>
                <div id="collapse2019" class="accordion-collapse collapse" data-bs-parent="#accordionLOA">
                    <div class="accordion-body">
                        <div class="row g-2">
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2019/3820-2018-LOA/Lei-3820.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-success">
                                    <span><i class="fas fa-file-pdf text-success me-2"></i>Lei Nº 3.820/2018</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                        </div>

                        <!-- Anexos -->
                        <div class="mt-4">
                            <h5 class="mb-3">Anexos</h5>
                            <div class="row g-2">
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2019/3820-2018-LOA/01-Quadro-1.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Quadro 1 - Receita Estimada</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2019/3820-2018-LOA/02-Quadro-2.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Quadro 2 - Demonstrativo da Despesa por Unidade Orçamentária</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2019/3820-2018-LOA/03-Quadro-3.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Quadro 3 - Demonstrativo de Despesas por Programa e Orçamento consolidado</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2019/3820-2018-LOA/03-Quadro-4.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Quadro 4 - Demonstrativo de despesas por função e subfunção</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2019/3820-2018-LOA/05-Demonstrativo-1.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Demonstrativo 1 - Demonstrativo da compatibilidade da programação do orçamento com as metas previstas no anexo de metas fiscais da lei de diretrizes orçamentárias - CONSOLIDADO</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2019/3820-2018-LOA/06-Demonstrativo-2.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Demonstrativo 2 - Estimativa e compensação da renúncia de receita</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2019/3820-2018-LOA/07-Demonstrativo-3.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Demonstrativo 3 - Demonstrativo das medidas de compensação ao aumento das despesas obrigatórias de caráter continuado</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2019/3820-2018-LOA/08-Demonstrativo-4.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Demonstrativo 4 - Demonstrativo da reserva de contingência</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2019/3820-2018-LOA/09-ANEXO-1.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo 1 - Demonstrativo da Receita e Despesa, Segundo as Categorias Econômicas</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2019/3820-2018-LOA/10-ANEXO-2.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo 2 - Receita Consolidado</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2019/3820-2018-LOA/11-ANEXO-3.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo 3 - Despesa Consolidado Geral</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2019/3820-2018-LOA/12-ANEXO-4.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo 4 - Demonstrativo das Despesas por Projetos, Atividades e Operações Especiais conforme as Fontes de Recursos e Categorias Econômicas</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2019/3820-2018-LOA/13-ANEXO-5.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo 5 - Programa de Trabalho do Governo</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2019/3820-2018-LOA/14-ANEXO-6.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo 6 - Programa de Trabalho do Governo Discriminado por Unidades Orçamentárias</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2019/3820-2018-LOA/15-ANEXO-7.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo 7 - Demonstrativo de Funções, Subfunções e Programas para Projetos e Atividades</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2019/3820-2018-LOA/16-ANEXO-8.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo 8 - Demonstrativo da Despesa por Funções, Sub-Funções e Programas conforme o vinculo com os Recursos</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2019/3820-2018-LOA/16-ANEXO-9.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo 9 - Demonstrativo da Despesa por Órgão e Função</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2018 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed fs-4 text-soft" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2018" aria-expanded="false" aria-controls="collapse2018">
                        2018 - Lei Nº 3.723/2017
                    </button>
                </h2>
                <div id="collapse2018" class="accordion-collapse collapse" data-bs-parent="#accordionLOA">
                    <div class="accordion-body">
                        <div class="row g-2">
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2018/3.723-2017-LOA/LOA-3.723-2017-Lei.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-success">
                                    <span><i class="fas fa-file-pdf text-success me-2"></i>Lei Nº 3.723/2017</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                        </div>

                        <!-- Anexos -->
                        <div class="mt-4">
                            <h5 class="mb-3">Anexos</h5>
                            <div class="row g-2">
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2018/3.723-2017-LOA/quadro1.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Quadro I - Receita Estimada</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2018/3.723-2017-LOA/quadro2.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Quadro II - Demonstrativo da Despesa por Unidade Orçamentária</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2018/3.723-2017-LOA/quadro3.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Quadro III - Demonstrativo de Despesas por Programa / Orçamento consolidado</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2018/3.723-2017-LOA/quadro4.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Quadro IV - Demonstrativo de despesas por função/ subfunção</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2018/3.723-2017-LOA/demonstrativo1.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Demonstrativo 1 - Demonstrativo da compatibilidade da programação do orçamento com as metas previstas no anexo de metas fiscais da lei de diretrizes orçamentárias - CONSOLIDADO</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2018/3.723-2017-LOA/demonstrativo2.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Demonstrativo 2 - Estimativa e compensação da renúncia de receita</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2018/3.723-2017-LOA/demonstrativo3.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Demonstrativo 3 - Demonstrativo das medidas de compensação ao aumento das despesas obrigatórias de caráter continuado</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2018/3.723-2017-LOA/demonstrativo4.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Demonstrativo 4 - Demonstrativo da reserva de contingência</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2018/3.723-2017-LOA/anexo1.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo I - Demonstrativo da Receita e Despesa, Segundo as Categorias Econômicas</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2018/3.723-2017-LOA/anexo2.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo II - Despesa Consolidado Geral</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2018/3.723-2017-LOA/anexo3.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo II - Receita Consolidado</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2018/3.723-2017-LOA/anexo4.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo IV - Demonstrativo das Despesas por Projetos, Atividades e Operações Especiais conforme as Fontes de Recursos e Categorias Econômicas</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2018/3.723-2017-LOA/anexo6.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo VI - Programa de Trabalho do Governo Discriminado por Unidades Orçamentárias</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2018/3.723-2017-LOA/anexo7.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo VI - Programa de Trabalho do Governo</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2018/3.723-2017-LOA/anexo8.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo VII - Demonstrativo de Funções, Subfunções e Programas para Projetos e Atividades</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2018/3.723-2017-LOA/anexo9.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo VIII - Demonstrativo da Despesa por Funções, Sub-Funções e Programas conforme o vinculo com os Recursos</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2018/3.723-2017-LOA/anexo10.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo IX - Demonstrativo da Despesa por Órgão e Função</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



                        <!-- 2017 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed fs-4 text-soft" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2017" aria-expanded="false" aria-controls="collapse2017">
                        2017 - Lei Nº 3.615/2016
                    </button>
                </h2>
                <div id="collapse2017" class="accordion-collapse collapse" data-bs-parent="#accordionLOA">
                    <div class="accordion-body">
                        <div class="row g-2">
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2017/3.615-2016-LOA/3.615-2016Loa-Lei.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-success">
                                    <span><i class="fas fa-file-pdf text-success me-2"></i>Lei Nº 3.615/2016</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                        </div>

                        <!-- Anexos -->
                        <div class="mt-4">
                            <h5 class="mb-3">Anexos</h5>
                            <div class="row g-2">
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2017/3.615-2016-LOA/ANEXOS-DA-LOA-PDF-2017/anexo1.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo I - Demonstrativo da Receita e Despesa, Segundo as Categorias Econômicas</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2017/3.615-2016-LOA/ANEXOS-DA-LOA-PDF-2017/anexo2.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo II - Despesa Consolidado Geral</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2017/3.615-2016-LOA/ANEXOS-DA-LOA-PDF-2017/anexo3.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo II - Receita Consolidado</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2017/3.615-2016-LOA/ANEXOS-DA-LOA-PDF-2017/anexo4.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo IV - Demonstrativo das Despesas por Projetos, Atividades e Operações Especiais conforme as Fontes de Recursos e Categorias Econômicas</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2017/3.615-2016-LOA/ANEXOS-DA-LOA-PDF-2017/anexo5.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo V - Quadro de Detalhamento da Despesa por Orgãos, Grupos e Fontes</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2017/3.615-2016-LOA/ANEXOS-DA-LOA-PDF-2017/anexo6.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo VI - Programa de Trabalho do Governo Discriminado por Unidades Orçamentárias</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2017/3.615-2016-LOA/ANEXOS-DA-LOA-PDF-2017/anexo7.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo VI - Programa de Trabalho do Governo</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2017/3.615-2016-LOA/ANEXOS-Da-LOA-PDF-2017/anexo8.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo VII - Demonstrativo de Funções, Subfunções e Programas para Projetos e Atividades</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2017/3.615-2016-LOA/ANEXOS-DA-LOA-PDF-2017/anexo9.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo VIII - Demonstrativo da Despesa por Funções, Sub-Funções e Programas conforme o vinculo com os Recursos</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2017/3.615-2016-LOA/ANEXOS-DA-LOA-PDF-2017/anexo10.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo IX - Demonstrativo da Despesa por Órgão e Função</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2017/3.615-2016-LOA/ANEXOS-DA-LOA-PDF-2017/anexo11.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo X - Demonstrativo Resumido do Orçamento Fiscal - Consolidado</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2017/3.615-2016-LOA/ANEXOS-DA-LOA-PDF-2017/anexo12.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo XI - Demonstrativo Resumido da Seguridade Social - Consolidado</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2017/3.615-2016-LOA/ANEXOS-DA-LOA-PDF-2017/anexo13.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo XII - Demonstrativo da compatibilidade da programação do orçamento com as metas previstas no anexo de metas fiscais da lei de diretrizes orçamentárias - Consolidado</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2017/3.615-2016-LOA/ANEXOS-DA-LOA-PDF-2017/anexo14.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo XIII - Estimativa e compensação da renúncia de receita</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2017/3.615-2016-LOA/ANEXOS-DA-LOA-PDF-2017/anexo15.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo XIV - Demonstrativo das medidas de compensação ao aumento das despesas obrigatórias de caráter continuado</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2017/3.615-2016-LOA/ANEXOS-DA-LOA-PDF-2017/anexo16.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo XV - Demonstrativo da reserva de contingência</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2017/3.615-2016-LOA/ANEXOS-DA-LOA-PDF-2017/anexo17.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo XVI - Mensagem Nº 057/2016</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2016 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed fs-4 text-soft" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2016" aria-expanded="false" aria-controls="collapse2016">
                        2016 - Lei Nº 3.457/2015
                    </button>
                </h2>
                <div id="collapse2016" class="accordion-collapse collapse" data-bs-parent="#accordionLOA">
                    <div class="accordion-body">
                        <div class="row g-2">
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2016/3.457-2015-LOA/3.457-2015-loa-Lei.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-success">
                                    <span><i class="fas fa-file-pdf text-success me-2"></i>Lei Nº 3.457/2015</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                        </div>

                        <!-- Anexos -->
                        <div class="mt-4">
                            <h5 class="mb-3">Anexos</h5>
                            <div class="row g-2">
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2016/3.457-2015-LOA/anexo1.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo I - Demonstrativo da Receita e Despesa, Segundo as Categorias Econômicas</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2016/3.457-2015-LOA/anexo2.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo II - Despesa</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2016/3.457-2015-LOA/anexo3.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo II - Receita</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2016/3.457-2015-LOA/anexo4.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo IV - Demonstrativo das Despesas por Projetos, Atividades e Operações Especiais conforme as Fontes de Recursos e Categorias Econômicas</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2016/3.457-2015-LOA/anexo5.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo V - Programa de Trabalho do Governo</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2016/3.457-2015-LOA/anexo6.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo VI - Programa de Trabalho do Governo Discriminado por Unidades Orçamentárias</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2016/3.457-2015-LOA/anexo7.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo VI - Demonstrativo de Funções, subfunções e Programas para Projetos e Atividades</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2016/3.457-2015-LOA/anexo8.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo VII - Demonstrativo da Despesa por Funções, Subfunções e Programas conforme o vínculo com os recursos</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2016/3.457-2015-LOA/anexo9.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo VIII - Demonstrativo da Despesa por Órgão e Função</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2016/3.457-2015-LOA/anexo10.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo IX - Demonstrativo Resumido do Orçamento Fiscal - Consolidado</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2016/3.457-2015-LOA/anexo11.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo X - Demonstrativo Resumido da Seguridade Social</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2016/3.457-2015-LOA/anexo12.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo XI - Demostratitvo da Compatibilidade da Programação do Orçamento com as Metas Previstas no Anexo de Metas Fiscais da Lei de Diretrizes Orçamentárias - Consolidado</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2016/3.457-2015-LOA/anexo13.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo XII - Estimativa e Compensação da Renúncia de Receita</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2016/3.457-2015-LOA/anexo14.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo XIII - Demonstrativo das Medidas de Compensação ao Aumento das Despesas Obrigatórias de Caráter Continuado</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2016/3.457-2015-LOA/anexo15.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo XIV - Demonstrativo da Reserva de Contingência</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2015 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed fs-4 text-soft" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2015" aria-expanded="false" aria-controls="collapse2015">
                        2015 - Lei Nº 3.328/2014
                    </button>
                </h2>
                <div id="collapse2015" class="accordion-collapse collapse" data-bs-parent="#accordionLOA">
                    <div class="accordion-body">
                        <div class="row g-2">
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2015/LOA Lei n 3.328_2014_LOA 2015.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-success">
                                    <span><i class="fas fa-file-pdf text-success me-2"></i>Lei Nº 3.328/2014</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                        </div>

                        <!-- Anexos -->
                        <div class="mt-4">
                            <h5 class="mb-3">Anexos</h5>
                            <div class="row g-2">
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2015/LOA_01 - Anexo 1 - Receita e Despesa.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo I - Demonstrativo da Receita e Despesa, Segundo as Categorias Econômicas</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2015/LOA_02 - Anexo 2 - Despesa 27.11.2014.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo II - Despesa</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2015/LOA_03 - Anexo 2 - Receita 27.11.2014.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo II.2 - Receita</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2015/LOA_04 - Anexo 4 - Demonstrativo das Despesas por Projetos.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo IV - Demonstrativo das Despesas por Projetos, Atividades e Operações Especiais conforme as Fontes de Recursos e Categorias Econômicas</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2015/LOA_05 - Anexo 5 - Despesa por Orgaos.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo V - Quadro de Detalhamento da Despesa por Órgãos, Grupos e Fontes</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2015/LOA_06 - Anexo 6 - Programa de Trabalho do Governo.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo VI - Programa de Trabalho do Governo</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2015/LOA_07 - Anexo 6 - Programa de Trabalho por Unidades.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo VI.2 - Programa de Trabalho do Governo por Unidades Orçamentárias</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2015/LOA_08 - Anexo 7 - Demonstrativo de Funcoes.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo VII - Demonstrativo de Funções, Subfunções e Programas para Projetos e Atividades</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2015/LOA_09 - Anexo 8 - Demonstrativo da Despesa por Funcoes.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo VIII - Demonstrativo da Despesa por Funções, Subfunções e Programas conforme o Vínculo com os Recursos</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2015/LOA_10 - Anexo 9 - Demonstrativo da Despesa por Orgao.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo IX - Demonstrativo da Despesa por Órgão e Função</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2015/LOA_11 - Demonstrativo I - Fiscal - com Emendas.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Demonstrativo Resumido do Orçamento Fiscal - CONSOLIDADO</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2015/LOA_12 - Demonstrativo II - Seg. Social - com Emendas.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Demonstrativo Resumido da Seguridade Social - CONSOLIDADO</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2015/LOA_13 - Demonstrativo III - Compatibilidade com a LDO.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Demonstrativo da compatibilidade da programação do orçamento com as metas previstas no anexo de Metas Fiscais da Lei de Diretrizes Orçamentárias</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2015/LOA_14 - Demonstrativo IV - Renuncias de Receita.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Demonstrativo da estimativa e compensação da Renúncia de Receita</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2015/LOA_15 - Demonstrativo V - Aumento das Desp de Carater Cont.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Demonstrativo das medidas de compensação ao aumento das despesas obrigatórias de caráter continuado</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2015/LOA_16 - Demonstrativo VI - Reserva de Contingencia.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Demonstrativo da reserva de contingência</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2014 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed fs-4 text-soft" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2014" aria-expanded="false" aria-controls="collapse2014">
                        2014 - Lei Nº 3.183/2013
                    </button>
                </h2>
                <div id="collapse2014" class="accordion-collapse collapse" data-bs-parent="#accordionLOA">
                    <div class="accordion-body">
                        <div class="row g-2">
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2014/LOA_3183/Lei_3.183-2013.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-success">
                                    <span><i class="fas fa-file-pdf text-success me-2"></i>Lei Nº 3.183/2013</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                        </div>

                        <!-- Anexos -->
                        <div class="mt-4">
                            <h5 class="mb-3">Anexos</h5>
                            <div class="row g-2">
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2014/LOA_3183/Anexo1.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo I - Demonstração da Receita e Despesa, segundo as categorias econômicas</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2014/LOA_3183/Anexo2.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo II - Consolidado por natureza da despesa sintético</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2014/LOA_3183/Anexo2b.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo II.2 - Orçamento da Receita</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2014/LOA_3183/Anexo6.PDF" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo VI - Consolidado por programa de trabalho</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2014/LOA_3183/Anexo6b.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo VI.2 - Programa de trabalho por órgão e unidade</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2014/LOA_3183/Anexo7.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo VII - Demonstrativo de funções, subfunções e programas para projetos e atividades</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2014/LOA_3183/Anexo8.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo VIII - Demonstrativo de funções, subfunções e programas conforme o vínculo com os recursos</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2014/LOA_3183/Anexo9.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo IX - Demonstrativo da despesa por órgão e função</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2014/LOA_3183/DemonstrativoI.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Demonstrativo Resumido do Orçamento Fiscal - CONSOLIDADO</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2014/LOA_3183/DemonstrativoII.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Demonstrativo Resumido da Seguridade Social - CONSOLIDADO</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2014/LOA_3183/DemonstrativoIII.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Demonstrativo da compatibilidade da programação do orçamento com as metas previstas no anexo de Metas Fiscais da Lei de Diretrizes Orçamentárias</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2014/LOA_3183/DemonstrativoIV.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Demonstrativo da estimativa e compensação da Renúncia de Receita</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2014/LOA_3183/DemonstrativoV.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Demonstrativo das medidas de compensação ao aumento das despesas obrigatórias de caráter continuado</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2014/LOA_3183/DemonstrativoVI.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Demonstrativo da reserva de contingência</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2014/LOA_3183/DemonstrativoVII.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Demonstrativo da base de cálculo do repasse à Câmara Municipal</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2014/LOA_3183/DemonstrativoVIII.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Demonstrativo da despesa dos órgãos por fonte de recursos</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2013 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed fs-4 text-soft" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2013" aria-expanded="false" aria-controls="collapse2013">
                        2013 - Lei Nº 2.976/2012
                    </button>
                </h2>
                <div id="collapse2013" class="accordion-collapse collapse" data-bs-parent="#accordionLOA">
                    <div class="accordion-body">
                        <div class="row g-2">
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2013/Lei_2976_2012_LOA.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-success">
                                    <span><i class="fas fa-file-pdf text-success me-2"></i>Lei Nº 2.976/2012</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                        </div>

                        <!-- Anexos -->
                        <div class="mt-4">
                            <h5 class="mb-3">Anexos</h5>
                            <div class="row g-2">
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2013/LO_2976/ANEXO 1.PDF" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo I - Demonstração da Receita e Despesa, Segundo as Categorias Econômicas</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2013/LO_2976/ANEXO 2 - DESPESA.PDF" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo II - Consolidado por Natureza da Despesa Sintético</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2013/LO_2976/ANEXO 2 - RECEITA.PDF" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo II.2 - Orçamento da Receita</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2013/LO_2976/ANEXO 6 - PROGRAMA DE TRABALho.PDF" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo VI - Consolidado por Programa de Trabalho</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2013/LO_2976/ANEXO 6 - PROGRAMA DE TRABALho POR &Oacute;RG&Atilde;O E UNIDADE.PDF" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo VI.2 - Programa de Trabalho por Órgão e Unidade</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2013/LO_2976/ANEXO 7.PDF" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo VII - Demonstrativo de Funções, Subfunções e Programas para Projetos e Atividades</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2013/LO_2976/ANEXO 8.PDF" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo VIII - Demonstrativo de Funções, Subfunções e Programas conforme o Vínculo com os Recursos</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2013/LO_2976/ANEXO 9.PDF" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Anexo IX - Demonstrativo da Despesa por Órgão e Função</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2013/LO_2976/QDD Consolidado 2013.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>QDD 2013 - Quadro de Detalhamento da Despesa por Aplicações em Programas</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2013/LO_2976/Lei n&ordm; 2.976 - Demonstrativo Resumido do Or&ccedil;amento Fiscal - Consolidado.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Demonstrativo Resumido do Orçamento Fiscal - CONSOLIDADO</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2013/LO_2976/Lei n&ordm; 2.976 - Demonstrativo Resumido da Seguridade Social - Consolidado.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Demonstrativo Resumido da Seguridade Social - CONSOLIDADO</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2013/LO_2976/Lei n&ordm; 2.976  - Demonstrativo da Compatibilidade da Prog. do Or&ccedil;.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Demonstrativo da Compatibilidade da Programação do Orçamento com as Metas Previstas no Anexo de Metas Fiscais da Lei de Diretrizes Orçamentárias</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2013/LO_2976/DESPESAS DOS &Oacute;RG&Atilde;OS POR FONTE DE RECURSOS.PDF" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                        <span>Demonstrativo da Despesa dos Órgãos por Fontes de Recursos</span>
                                        <span class="badge bg-softGray text-green">PDF</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>







        </div>
    </div>
    </div>
</section>
@endsection