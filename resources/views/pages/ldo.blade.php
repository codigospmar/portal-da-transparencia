@extends('theme')
@section("title", "Portal da Transparência - Angra dos Reis :: Lei de Diretrizes Orçamentárias - LDO")
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
                    'title' => __("LDO - Lei de Diretrizes Orçamentárias"),
                ],
            ];
        @endphp
        
        @include('components._breadcrumb', $breadcrumbs)

        <!-- Título Principal -->
        @include('components._titleMain', [
            "title" => __("Lei de Diretrizes Orçamentárias - LDO"),
            "summary" => __("Estabelece as metas e prioridades para o ano financeiro subsequente, orientando a elaboração da lei orçamentária anual."),
        ])

        <!-- Accordion de Anos -->
        <div class="accordion" id="accordionLDO">

            <!-- 2025 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button fs-4 text-soft" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2025" aria-expanded="true" aria-controls="collapse2025">
                        2025 - Lei Nº 4.428/2024
                    </button>
                </h2>
                <div id="collapse2025" class="accordion-collapse collapse show" data-bs-parent="#accordionLDO">
                    <div class="accordion-body">
                        <div class="row g-2">
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2025/LDO_Lei-4428.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-success">
                                    <span><i class="fas fa-file-pdf text-success me-2"></i>Lei Nº 4.428/2024</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                        </div>

                        <h5 class="mt-4 mb-3">Anexos</h5>
                        <div class="row g-2">
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2025/LDO_Lei-4428_Anexos/1-Metas-LDO-2025.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Metas LDO 2025</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2025/LDO_Lei-4428_Anexos/ANEXO-II-DEMONSTRATIVO-DE-RISCOS-FISCAIS.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo II - Demonstrativo de Riscos Fiscais</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2025/LDO_Lei-4428_Anexos/ANEXO-III-DEMONSTRATIVOS-DAS-METAS-FISCAIS-CAPA.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo III - Demonstrativos das Metas Fiscais</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2025/LDO_Lei-4428_Anexos/DEMONSTRATIVO-I.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Demonstrativo I</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2025/LDO_Lei-4428_Anexos/DEMONSTRATIVO-I-METAS-ANUAIS.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Demonstrativo I - Metas Anuais</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2025/LDO_Lei-4428_Anexos/DEMONSTRATIVO-II.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Demonstrativo II</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2025/LDO_Lei-4428_Anexos/DEMONSTRATIVO-II-AVALIACAO-DO-CUMPRIMENTO-DAS-METAS-FISCAIS-DO-EXERCICIO-ANTERIOR.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Demonstrativo II - Avaliação do Cumprimento</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2025/LDO_Lei-4428_Anexos/DEMONSTRATIVO-III.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Demonstrativo III</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2025/LDO_Lei-4428_Anexos/DEMONSTRATIVO-IV.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Demonstrativo IV</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2025/LDO_Lei-4428_Anexos/DEMONSTRATIVO-V.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Demonstrativo V</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2025/LDO_Lei-4428_Anexos/DEMONSTRATIVO-VI-AVALIACAO-DA-SITUACAO-FINANCEIRA-PREVIDENCIA-DOS-SERVIDORES.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Demonstrativo VI - Avaliação da Situação Financeira</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2025/LDO_Lei-4428_Anexos/DEMONSTRATIVO-VI.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Demonstrativo VI</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2025/LDO_Lei-4428_Anexos/DEMONSTRATIVO-VI-PARTE-2.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Demonstrativo VI - Parte 2</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2025/LDO_Lei-4428_Anexos/DEMONSTRATIVO-VII.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Demonstrativo VII</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2025/LDO_Lei-4428_Anexos/DEMONSTRATIVO-VIII.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Demonstrativo VIII</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2025/LDO_Lei-4428_Anexos/Memoria-e-Metodologia-de-Calculo-das-Principais-Fontes-de-Receita.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Memória e Metodologia - Fontes de Receita</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2025/LDO_Lei-4428_Anexos/Memoria-e-Metodologia-de-Calculo-das-Metas-Anuais-para-as-Receitas.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Memória e Metodologia - Metas Anuais</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2025/LDO_Lei-4428_Anexos/Nota.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Nota</span>
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
                        2024 - Lei Nº 4.270/2023
                    </button>
                </h2>
                <div id="collapse2024" class="accordion-collapse collapse" data-bs-parent="#accordionLDO">
                    <div class="accordion-body">
                        <div class="row g-2">
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2024/LDO-2024_Lei-4270-2023.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-success">
                                    <span><i class="fas fa-file-pdf text-success me-2"></i>Lei Nº 4.270/2023 e anexos</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2023 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed fs-4 text-soft" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2023" aria-expanded="false" aria-controls="collapse2023">
                        2023 - Lei Nº 4.154/2022
                    </button>
                </h2>
                <div id="collapse2023" class="accordion-collapse collapse" data-bs-parent="#accordionLDO">
                    <div class="accordion-body">
                        <div class="row g-2">
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2023/LDO-Lei-4154-2022/4154-2022 - LDO.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-success">
                                    <span><i class="fas fa-file-pdf text-success me-2"></i>Lei 4.154/2022</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                        </div>

                        <h5 class="mt-4 mb-3">Anexos</h5>
                        <div class="row g-2">
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2023/LDO-Lei-4154-2022/1 - Metas LDO 2023.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Metas LDO 2023</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2023/LDO-Lei-4154-2022/2 - ANEXO II - DEMONSTRATIVO DE RISCOS FISCAIS.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo II - Demonstrativo de Riscos Fiscais</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2023/LDO-Lei-4154-2022/3- ANEXO III - DEMONSTRATIVOS DAS METAS FISCAIS - CAPA.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo III - Demonstrativos das Metas Fiscais</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2023/LDO-Lei-4154-2022/4 - DEMONSTRATIVO I.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Demonstrativo I</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2023/LDO-Lei-4154-2022/5 - DEMONSTRATIVO I - METAS ANUAIS.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Demonstrativo I - Metas Anuais</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2023/LDO-Lei-4154-2022/6 - DEMONSTRATIVO II.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Demonstrativo II</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2023/LDO-Lei-4154-2022/7 - DEMONSTRATIVO II - AVALIACAO DO CUMPRIMENTO DAS METAS FISCAIS DO EXERCICIO ANTERIOR.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Demonstrativo II - Avaliação do Cumprimento</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2023/LDO-Lei-4154-2022/8 - DEMONSTRATIVO III.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Demonstrativo III</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2023/LDO-Lei-4154-2022/9 - DEMONSTRATIVO IV.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Demonstrativo IV</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2023/LDO-Lei-4154-2022/10 - DEMONSTRATIVO V.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Demonstrativo V</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2023/LDO-Lei-4154-2022/11 - DEMONSTRATIVO VI - AVALIACAO DA SITUACAO FINANCEIRA E ATUARIAL DO REGIME PROPRIO DE PREVIDENCIA DOS SERVIDORES.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Demonstrativo VI - Avaliação da Situação Financeira</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2023/LDO-Lei-4154-2022/12 - DEMONSTRATIVO VI.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Demonstrativo VI</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2023/LDO-Lei-4154-2022/13 - DEMONSTRATIVO VI - PARTE 2.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Demonstrativo VI - Parte 2</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2023/LDO-Lei-4154-2022/14 - DEMONSTRATIVO VII.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Demonstrativo VII</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2023/LDO-Lei-4154-2022/15 - DEMONSTRATIVO VIII.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Demonstrativo VIII</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2023/LDO-Lei-4154-2022/16 - Memoria e Metodologia de Calculo das Principais Fontes de Receita.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Memória e Metodologia - Fontes de Receita</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2023/LDO-Lei-4154-2022/17 - Memoria e Metodologia de Calculo das Metas Anuais para as Receitas.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Memória e Metodologia - Metas Anuais</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2023/LDO-Lei-4154-2022/18 - Nota.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Nota</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2022 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed fs-4 text-soft" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2022" aria-expanded="false" aria-controls="collapse2022">
                        2022 - Lei Nº 4.024/2021
                    </button>
                </h2>
                <div id="collapse2022" class="accordion-collapse collapse" data-bs-parent="#accordionLDO">
                    <div class="accordion-body">
                        <div class="row g-2">
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LDO-Lei4024_10-12-2021/1-Lei-N-4024-10122021.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-success">
                                    <span><i class="fas fa-file-pdf text-success me-2"></i>Lei 4.024/2021</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                        </div>

                        <h5 class="mt-4 mb-3">Anexos</h5>
                        <div class="row g-2">
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LDO-Lei4024_10-12-2021/2-ANEXO-II-DEMONSTRATIVO-DE-RISCOS-FISCAIS.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo II - Demonstrativo de Riscos Fiscais</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LDO-Lei4024_10-12-2021/3--ANEXO-III-DEMONSTRATIVOS-DAS-METAS-FISCAIS-CAPA.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo III - Demonstrativo das Metas Fiscais</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LDO-Lei4024_10-12-2021/4-DEMONSTRATIVO-I.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Demonstrativo I - Metas Anuais</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LDO-Lei4024_10-12-2021/5-DEMONSTRATIVO-I---METAS-ANUAIS.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Demonstrativo I - Nota de Metas Anuais</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LDO-Lei4024_10-12-2021/6-DEMONSTRATIVO-II.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Demonstrativo II - Avaliação do cumprimento</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LDO-Lei4024_10-12-2021/7-DEMONSTRATIVO-II-AVALIACAO-DO-CUMPRIMENTO-DAS-METAS.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Demonstrativo II - Nota da Avaliação</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LDO-Lei4024_10-12-2021/8-DEMONSTRATIVO-III.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Demonstrativo III - Metas fiscais atuais</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LDO-Lei4024_10-12-2021/9-DEMONSTRATIVO-IV.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Demonstrativo IV - Evolução do patrimônio</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LDO-Lei4024_10-12-2021/10-DEMONSTRATIVO-V.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Demonstrativo V - Origem e aplicação</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LDO-Lei4024_10-12-2021/11-DEMONSTRATIVO-VI-AVALIACAO-DA-SITUACAO-FINANCEIRA-E-ATUARIAL-DO-REGIME-PROPRIO-DE-PREVIDENCIA-DOS-SERVIDORES.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Demonstrativo VI - Avaliação da situação</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LDO-Lei4024_10-12-2021/12-DEMONSTRATIVO-VI.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Demonstrativo VI - Avaliação da situação</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LDO-Lei4024_10-12-2021/13-DEMONSTRATIVO-VI-PARTE-2.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Demonstrativo VI - Parte 2</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LDO-Lei4024_10-12-2021/14-DEMONSTRATIVO-VII.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Demonstrativo VII - Estimativa e compensação</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LDO-Lei4024_10-12-2021/15-DEMONSTRATIVO-VIII.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Demonstrativo VIII - Margem de expansão</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LDO-Lei4024_10-12-2021/16-Memoria-e-Metodologia-de-Calculo-das-Principais-Fontes-de-Receita.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Memória e Metodologia - Fontes de Receita</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LDO-Lei4024_10-12-2021/17-Memoria-e-Metodologia-de-Calculo-das-Metas-Anuais-para-as-Receitas.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Memória e Metodologia - Metas Anuais</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LDO-Lei4024_10-12-2021/18-Nota.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Nota</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LDO-Lei4024_10-12-2021/19-Metas-LDO-2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Metas</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/LDO-Lei4024_10-12-2021/Capa-LDO-2022.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Capa</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2021 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed fs-4 text-soft" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2021" aria-expanded="false" aria-controls="collapse2021">
                        2021 - Lei Nº 3.940/2020
                    </button>
                </h2>
                <div id="collapse2021" class="accordion-collapse collapse" data-bs-parent="#accordionLDO">
                    <div class="accordion-body">
                        <div class="row g-2">
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2021/3940-2020-LDO/0-3.940-2020-LDO.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-success">
                                    <span><i class="fas fa-file-pdf text-success me-2"></i>Lei 3.940/2020</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                        </div>

                        <h5 class="mt-4 mb-3">Anexos</h5>
                        <div class="row g-2">
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2021/3940-2020-LDO/1-2020-anexoII.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo II - Demonstrativo de Riscos Fiscais</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2021/3940-2020-LDO/2-ANEXOIII.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo III - Demonstrativo das Metas Fiscais</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2021/3940-2020-LDO/3-DEMONSTRATIVOI.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Demonstrativo 1 - Metas Anuais</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2021/3940-2020-LDO/4-DEMONSTRATIVOI-Nota.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Demonstrativo 1 - Nota</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2021/3940-2020-LDO/5-DEMONSTRATIVOII.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Demonstrativo 2 - Avaliação do cumprimento</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2021/3940-2020-LDO/6-DEMONSTRATIVOII-Nota.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Demonstrativo 2 - Nota</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2021/3940-2020-LDO/7-DEMONSTRATIVOIII.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Demonstrativo 3 - Metas Fiscais atuais</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2021/3940-2020-LDO/8-DEMONSTRATIVOIV.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Demonstrativo 4 - Evolução do patrimônio</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2021/3940-2020-LDO/9-DEMONSTRATIVOV.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Demonstrativo 5 - Origem e aplicação</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2021/3940-2020-LDO/10-DEMONSTRATIVOVI-AVALIACAO.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Demonstrativo 6 - Avaliação da situação</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2021/3940-2020-LDO/11-DEMONSTRATIVOVI.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Demonstrativo 6 - Parte I</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2021/3940-2020-LDO/12-DEMONSTRATIVOVI-PARTE2.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Demonstrativo 6 - Parte II</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2021/3940-2020-LDO/13-DEMONSTRATIVOVII.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Demonstrativo 7 - Estimativa e compensação</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2021/3940-2020-LDO/14-DEMONSTRATIVOVIII.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Demonstrativo 8 - Margem de expansão</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2021/3940-2020-LDO/15-MemoriaeMetodologiadeCalculodasPrincipaisFontesdeReceita.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Memória e Metodologia - Fontes de Receita</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2021/3940-2020-LDO/16-MemoriaeMetodologiadeCalculodasMetasAnuaisparaasReceitas.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Memória e Metodologia - Metas Anuais</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2021/3940-2020-LDO/17-Nota.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Nota</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2021/3940-2020-LDO/18-MetasLDO2021.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Metas LDO 2021</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed fs-4 text-soft" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2020" aria-expanded="false" aria-controls="collapse2020">
                        2020 - Lei Nº 3.915/2020
                    </button>
                </h2>
                <div id="collapse2020" class="accordion-collapse collapse" data-bs-parent="#accordionLDO">
                    <div class="accordion-body">
                        <div class="row g-2">
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2020/3915-2019-ldo/Lei3915-LDO2020.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-success">
                                    <span><i class="fas fa-file-pdf text-success me-2"></i>Lei 3.915/2020</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2020/audiencia-publica-ldo-2020.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-success">
                                    <span><i class="fas fa-file-pdf text-success me-2"></i>Audiência Pública</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                        </div>

                        <h5 class="mt-4 mb-3">Anexos</h5>
                        <div class="row g-2">
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2020/3915-2019-ldo/AnexoI.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo I - Demonstrativo de Programas e Ações</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2020/3915-2019-ldo/AnexoII.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo II - Demonstrativo de Riscos Fiscais</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2020/3915-2019-ldo/AnexoIII.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo III - Demonstrativos das Metas Fiscais</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2020/3915-2019-ldo/AnexoIV.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo IV - Anexo de Metas Fiscais</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2020/3915-2019-ldo/AnexoV.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo V - Demonstrativo I - Metas Anuais</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2020/3915-2019-ldo/AnexoVI.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo VI - Avaliação do Cumprimento das Metas</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2020/3915-2019-ldo/AnexoVII.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo VII - Demonstrativo II - Avaliação</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2020/3915-2019-ldo/AnexoVIII.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo VIII - Metas Fiscais Comparadas</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2020/3915-2019-ldo/AnexoIX.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo IX - Evolução do Patrimônio Líquido</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2020/3915-2019-ldo/AnexoX.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo X - Origem e Aplicação de Recursos</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2020/3915-2019-ldo/AnexoXI.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo XI - Avaliação da Situação Financeira</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2020/3915-2019-ldo/AnexoXII.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo XII - Receitas e Despesas Previdenciárias</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2020/3915-2019-ldo/AnexoXIII.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo XIII - Projeção Atuarial</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2020/3915-2019-ldo/AnexoXIV.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo XIV - Estimativa e Compensação</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2020/3915-2019-ldo/AnexoXV.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo XV - Margem de Expansão</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2020/3915-2019-ldo/AnexoXVI.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo XVI - Memória e Metodologia</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2020/3915-2019-ldo/AnexoXVII.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo XVII - Memória e Metodologia de Cálculo</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2020/3915-2019-ldo/AnexoXVIIINota.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo XVIII - Nota</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2019 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed fs-4 text-soft" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2019" aria-expanded="false" aria-controls="collapse2019">
                        2019 - Lei Nº 3.792/2018
                    </button>
                </h2>
                <div id="collapse2019" class="accordion-collapse collapse" data-bs-parent="#accordionLDO">
                    <div class="accordion-body">
                        <div class="row g-2">
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2019/3792-2018-LDO/Lei-3792.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-success">
                                    <span><i class="fas fa-file-pdf text-success me-2"></i>Lei 3.792/2018</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                        </div>

                        <h5 class="mt-4 mb-3">Anexos</h5>
                        <div class="row g-2">
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2019/3792-2018-LDO/Anexo-1.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo I - Demonstrativo de Programas e Ações</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2019/3792-2018-LDO/Anexo-2.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo II - Demonstrativo de Riscos Fiscais</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2019/3792-2018-LDO/Anexo-3.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo III - Demonstrativos das Metas Fiscais</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2019/3792-2018-LDO/Anexo-4.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo IV - Anexo de Metas Fiscais</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2019/3792-2018-LDO/Anexo-5.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo V - Demonstrativo I - Metas Anuais</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2019/3792-2018-LDO/Anexo-6.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo VI - Avaliação do Cumprimento das Metas</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2019/3792-2018-LDO/Anexo-7.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo VII - Demonstrativo II - Avaliação</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2019/3792-2018-LDO/Anexo-8.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo VIII - Metas Fiscais Comparadas</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2019/3792-2018-LDO/Anexo-9.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo IX - Evolução do Patrimônio Líquido</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2019/3792-2018-LDO/Anexo-10.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo X - Origem e Aplicação de Recursos</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2019/3792-2018-LDO/Anexo-11.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo XI - Avaliação da Situação Financeira</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2019/3792-2018-LDO/Anexo-12.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo XII - Receitas e Despesas Previdenciárias</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2019/3792-2018-LDO/Anexo-13.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo XIII - Projeção Atuarial</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2019/3792-2018-LDO/Anexo-14.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo XIV - Estimativa e Compensação</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2019/3792-2018-LDO/Anexo-15.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo XV - Margem de Expansão</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2019/3792-2018-LDO/Anexo-16.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo XVI - Memória e Metodologia</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2019/3792-2018-LDO/Anexo-17.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo XVII - Memória e Metodologia de Cálculo</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2018 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed fs-4 text-soft" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2018" aria-expanded="false" aria-controls="collapse2018">
                        2018 - Lei Nº 3.714/2017
                    </button>
                </h2>
                <div id="collapse2018" class="accordion-collapse collapse" data-bs-parent="#accordionLDO">
                    <div class="accordion-body">
                        <div class="row g-2">
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2018/3.714-2017-LDO/3.714-2017-LDO-Lei.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-success">
                                    <span><i class="fas fa-file-pdf text-success me-2"></i>Lei 3.714/2017</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                        </div>

                        <h5 class="mt-4 mb-3">Anexos</h5>
                        <div class="row g-2">
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2018/3.714-2017-LDO/anexo1.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo I - Demonstrativo de Programas e Ações</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2018/3.714-2017-LDO/anexo2.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo II - Demonstrativo de Riscos Fiscais</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2018/3.714-2017-LDO/anexo3.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo III - Demonstrativos das Metas Fiscais</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2018/3.714-2017-LDO/anexo4.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo IV - Anexo de Metas Fiscais</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2018/3.714-2017-LDO/anexo5.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo V - Demonstrativo I - Metas Anuais</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2018/3.714-2017-LDO/anexo6.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo VI - Avaliação do Cumprimento das Metas</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2018/3.714-2017-LDO/anexo7.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo VII - Demonstrativo II - Avaliação</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2018/3.714-2017-LDO/anexo8.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo VIII - Metas Fiscais Comparadas</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2018/3.714-2017-LDO/anexo9.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo IX - Evolução do Patrimônio Líquido</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2018/3.714-2017-LDO/anexo10.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo X - Origem e Aplicação de Recursos</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2018/3.714-2017-LDO/anexo11.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo XI - Avaliação da Situação Financeira</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2018/3.714-2017-LDO/anexo12.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo XII - Receitas e Despesas Previdenciárias</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2018/3.714-2017-LDO/anexo13.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo XIII - Projeção Atuarial</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2018/3.714-2017-LDO/anexo14.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo XIV - Estimativa e Compensação</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2018/3.714-2017-LDO/anexo15.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo XV - Margem de Expansão</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2018/3.714-2017-LDO/anexo16.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo XVI - Memória e Metodologia</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2018/3.714-2017-LDO/anexo17.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo XVII - Memória e Metodologia de Cálculo</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2018/3.714-2017-LDO/anexo18.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo XVIII - Nota</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2017 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed fs-4 text-soft" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2017" aria-expanded="false" aria-controls="collapse2017">
                        2017 - Lei Nº 3.614/2016
                    </button>
                </h2>
                <div id="collapse2017" class="accordion-collapse collapse" data-bs-parent="#accordionLDO">
                    <div class="accordion-body">
                        <div class="row g-2">
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2017/3.614-2016-LDO/3.614-2016-Lei.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-success">
                                    <span><i class="fas fa-file-pdf text-success me-2"></i>Lei 3.614/2016</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                        </div>

                        <h5 class="mt-4 mb-3">Anexos</h5>
                        <div class="row g-2">
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2017/3.614-2016-LDO/ANEXOS-METAS-FISCAIS-PDF-2017/anexo1.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo I - Demonstrativo de Programas e Ações</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2017/3.614-2016-LDO/ANEXOS-METAS-FISCAIS-PDF-2017/anexo2.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo II - Demonstrativo de Riscos Fiscais</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2017/3.614-2016-LDO/ANEXOS-METAS-FISCAIS-PDF-2017/anexo3.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo III - Demonstrativos das Metas Fiscais</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2017/3.614-2016-LDO/ANEXOS-METAS-FISCAIS-PDF-2017/anexo4.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo IV - Anexo de Metas Fiscais</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2017/3.614-2016-LDO/ANEXOS-METAS-FISCAIS-PDF-2017/anexo5.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo V - Demonstrativo I - Metas Anuais</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2017/3.614-2016-LDO/ANEXOS-METAS-FISCAIS-PDF-2017/anexo6.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo VI - Avaliação do Cumprimento das Metas</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2017/3.614-2016-LDO/ANEXOS-METAS-FISCAIS-PDF-2017/anexo7.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo VII - Demonstrativo II - Avaliação</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2017/3.614-2016-LDO/ANEXOS-METAS-FISCAIS-PDF-2017/anexo8.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo VIII - Metas Fiscais Comparadas</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2017/3.614-2016-LDO/ANEXOS-METAS-FISCAIS-PDF-2017/anexo9.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo IX - Evolução do Patrimônio Líquido</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2017/3.614-2016-LDO/ANEXOS-METAS-FISCAIS-PDF-2017/anexo10.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo X - Origem e Aplicação de Recursos</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2017/3.614-2016-LDO/ANEXOS-METAS-FISCAIS-PDF-2017/anexo11.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo XI - Avaliação da Situação Financeira</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2017/3.614-2016-LDO/ANEXOS-METAS-FISCAIS-PDF-2017/anexo12.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo XII - Receitas e Despesas Previdenciárias</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2017/3.614-2016-LDO/ANEXOS-METAS-FISCAIS-PDF-2017/anexo13.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo XIII - Projeção Atuarial</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2017/3.614-2016-LDO/ANEXOS-METAS-FISCAIS-PDF-2017/anexo14.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo XIV - Estimativa e Compensação</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2017/3.614-2016-LDO/ANEXOS-METAS-FISCAIS-PDF-2017/anexo15.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo XV - Margem de Expansão</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2017/3.614-2016-LDO/ANEXOS-METAS-FISCAIS-PDF-2017/anexo16.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo XVI - Memória e Metodologia</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2017/3.614-2016-LDO/ANEXOS-METAS-FISCAIS-PDF-2017/anexo17.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo XVII - Memória e Metodologia de Cálculo</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2017/3.614-2016-LDO/ANEXOS-METAS-FISCAIS-PDF-2017/anexo18.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo XVIII - Nota</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2017/3.614-2016-LDO/ANEXOS-METAS-FISCAIS-PDF-2017/anexo19.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo XIX - Mensagem Nº 045/2016</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2016 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed fs-4 text-soft" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2016" aria-expanded="false" aria-controls="collapse2016">
                        2016 - Lei Nº 3.456/2015
                    </button>
                </h2>
                <div id="collapse2016" class="accordion-collapse collapse" data-bs-parent="#accordionLDO">
                    <div class="accordion-body">
                        <div class="row g-2">
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2016/3.456-2015-LDO/3.456-2015-ldo-Lei.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-success">
                                    <span><i class="fas fa-file-pdf text-success me-2"></i>Lei 3.456/2015</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                        </div>

                        <h5 class="mt-4 mb-3">Anexos</h5>
                        <div class="row g-2">
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2016/3.456-2015-LDO/anexo1.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo I - Demonstrativo de Programas e Ações</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2016/3.456-2015-LDO/anexo2.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo II - Demonstrativo de Riscos Fiscais</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2016/3.456-2015-LDO/anexo3.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo III - Demonstrativos das Metas Fiscais</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2016/3.456-2015-LDO/anexo4.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo IV - Anexo de Metas Fiscais</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2016/3.456-2015-LDO/anexo5.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo V - Demonstrativo I - Metas Anuais</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2016/3.456-2015-LDO/anexo6.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo VI - Avaliação do Cumprimento das Metas</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2016/3.456-2015-LDO/anexo7.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo VII - Demonstrativo II - Avaliação</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2016/3.456-2015-LDO/anexo8.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo VIII - Metas Fiscais Comparadas</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2016/3.456-2015-LDO/anexo9.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo IX - Evolução do Patrimônio Líquido</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2016/3.456-2015-LDO/anexo10.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo X - Origem e Aplicação de Recursos</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2016/3.456-2015-LDO/anexo11.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo XI - Avaliação da Situação Financeira</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2016/3.456-2015-LDO/anexo12.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo XII - Receitas e Despesas Previdenciárias</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2016/3.456-2015-LDO/anexo13.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo XIII - Projeção Atuarial</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2016/3.456-2015-LDO/anexo14.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo XIV - Estimativa e Compensação</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2016/3.456-2015-LDO/anexo15.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo XV - Margem de Expansão</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2016/3.456-2015-LDO/anexo16.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo XVI - Memória e Metodologia</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2016/3.456-2015-LDO/anexo17.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo XVII - Memória e Metodologia de Cálculo</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2016/3.456-2015-LDO/anexo18.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo XVIII - Nota</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2015 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed fs-4 text-soft" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2015" aria-expanded="false" aria-controls="collapse2015">
                        2015 - Lei Nº 3.327/2014
                    </button>
                </h2>
                <div id="collapse2015" class="accordion-collapse collapse" data-bs-parent="#accordionLDO">
                    <div class="accordion-body">
                        <div class="row g-2">
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2015/LDO_Lei n 3.327_2014_LDO 2015.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-success">
                                    <span><i class="fas fa-file-pdf text-success me-2"></i>Lei 3.327/2014</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                        </div>

                        <h5 class="mt-4 mb-3">Anexos</h5>
                        <div class="row g-2">
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2015/LDO_01 - Anexo I - LDO METAS.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo I - Demonstrativo de Programas e Ações</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2015/LDO_02 - Anexo II - Demonstrativo de Riscos Fiscais.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo II - Demonstrativo de Riscos Fiscais</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2015/LDO_03 - Anexo III.zip" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo III - Demonstrativos das Metas Fiscais</span>
                                    <span class="badge bg-softGray text-green">ZIP</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2014 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed fs-4 text-soft" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2014" aria-expanded="false" aria-controls="collapse2014">
                        2014 - Lei Nº 3.164/2013
                    </button>
                </h2>
                <div id="collapse2014" class="accordion-collapse collapse" data-bs-parent="#accordionLDO">
                    <div class="accordion-body">
                        <div class="row g-2">
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2013/LOA_3164/Lei_3.164-2013.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-success">
                                    <span><i class="fas fa-file-pdf text-success me-2"></i>Lei 3.164/2013</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                        </div>

                        <h5 class="mt-4 mb-3">Anexos</h5>
                        <div class="row g-2">
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2013/LOA_3164/Anexo_I_LDO_Fisico_e_Financeiro.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo I - Físico e Financeiro</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2013/LOA_3164/Anexo_II_Demonstrativo_Riscos_Fiscais_2014.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo II - Demonstrativos de Riscos Fiscais</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2013/LOA_3164/Anexo_III_Demonstrativo_das_Metas_Fiscais_2014.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo III - Demonstrativos das Metas Fiscais</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2013 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed fs-4 text-soft" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2013" aria-expanded="false" aria-controls="collapse2013">
                        2013 - Lei Nº 2.971/2012
                    </button>
                </h2>
                <div id="collapse2013" class="accordion-collapse collapse" data-bs-parent="#accordionLDO">
                    <div class="accordion-body">
                        <div class="row g-2">
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2013/LDO_2971/Lei2971-2012.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-success">
                                    <span><i class="fas fa-file-pdf text-success me-2"></i>Lei 2.971/2012</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                        </div>

                        <h5 class="mt-4 mb-3">Anexos</h5>
                        <div class="row g-2">
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2013/LDO_2971/ANEXO I.PDF" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo I</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2013/LDO_2971/Lei n&ordm; 2.971 - Anexo II - Demonstrativo de Riscos Fiscais.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo II - Demonstrativo de riscos fiscais</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2013/LDO_2971/Lei n&ordm; 2.971 - Anexo III - Demonstrativo das Metas Fiscais.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo II.2 - Demonstrativo de metas fiscais</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2013/LDO_2971/Lei n&ordm; 2.971 - Anexo III - Demonstrativo das Metas Fiscais Planilhas.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-primary">
                                    <span>Anexo VI - Planilhas de demonstrativos</span>
                                    <span class="badge bg-softGray text-green">PDF</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection