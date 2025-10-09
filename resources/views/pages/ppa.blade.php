   @extends('theme')
   @section("title", "Portal da Transparência - Angra dos Reis :: Plano Plurianual - PPA")
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
                        'title' => __("PPA - Plano Plurianual"),
                    ],
                ];
            @endphp

            @include('components._breadcrumb', $breadcrumbs)

            <!-- Título Principal -->
            @include('components._titleMain', [
                "title" => __("Plano Plurianual - PPA"),
                "summary" => __("Instrumento de planejamento governamental de médio prazo que estabelece diretrizes, objetivos e metas da administração pública."),
            ])

           <!-- Accordion de Anos -->
           <div class="accordion" id="accordionPPA">

               <!-- 2024 -->
               <div class="accordion-item">
                   <h2 class="accordion-header">
                       <button class="accordion-button fs-4 text-soft" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2024" aria-expanded="true" aria-controls="collapse2024">
                           2024 - Lei Nº 4.427 - Revisão PPA 2022 a 2025
                       </button>
                   </h2>
                   <div id="collapse2024" class="accordion-collapse collapse show" data-bs-parent="#accordionPPA">
                       <div class="accordion-body">
                           <div class="row g-2">
                               <div class="col-md-6">
                                   <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2025/PPA_Lei-n-4427.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-success">
                                       <span><i class="fas fa-gavel text-success me-2"></i>Lei Nº 4.427</span>
                                       <span class="badge bg-softGray text-green">PDF</span>
                                   </a>
                               </div>
                               <div class="col-md-6">
                                   <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2025/PPA_Revisao-PPA-2022-2025-Exercicios-2025.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-success">
                                       <span><i class="fas fa-chart-bar text-success me-2"></i>Revisão PPA 2022-2025</span>
                                       <span class="badge bg-softGray text-green">PDF</span>
                                   </a>
                               </div>
                               <div class="col-md-6">
                                   <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2025/PPA_2025.csv" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-success">
                                       <span><i class="fas fa-file-csv text-success me-2"></i>Revisão PPA 2022-2025</span>
                                       <span class="badge bg-softGray text-green">CSV</span>
                                   </a>
                               </div>
                               <div class="col-md-6">
                                   <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2025/PPA_Descritivo-Revisao-PPA-2025.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-success">
                                       <span><i class="fas fa-file-alt text-success me-2"></i>Descritivo Revisão PPA 2022-2025</span>
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
                           2023 - Lei Nº 4.269 - Revisão PPA 2022 a 2025
                       </button>
                   </h2>
                   <div id="collapse2023" class="accordion-collapse collapse" data-bs-parent="#accordionPPA">
                       <div class="accordion-body">
                           <div class="row g-2">
                               <div class="col-md-6">
                                   <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2024/PPA-2024_Lei-4269-2023.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-success">
                                       <span><i class="fas fa-gavel text-success me-2"></i>Lei Nº 4.269</span>
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
                           2022 - Lei 4.153 - Revisão PPA 2022 a 2025
                       </button>
                   </h2>
                   <div id="collapse2022" class="accordion-collapse collapse" data-bs-parent="#accordionPPA">
                       <div class="accordion-body">
                           <div class="row g-2">
                               <div class="col-md-6">
                                   <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2023/PPA-Lei-4153-2022/4153-2022 - PPA.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-success">
                                       <span><i class="fas fa-gavel text-success me-2"></i>Lei 4.153</span>
                                       <span class="badge bg-softGray text-green">PDF</span>
                                   </a>
                               </div>
                               <div class="col-md-6">
                                   <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2023/PPA-Lei-4153-2022/REVISAO PPA 2022-2025.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-success">
                                       <span><i class="fas fa-chart-bar text-success me-2"></i>Revisão PPA 2022-2025</span>
                                       <span class="badge bg-softGray text-green">PDF</span>
                                   </a>
                               </div>
                               <div class="col-md-6">
                                   <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2023/PPA-Lei-4153-2022/Descritivo Revisao PPA 2023 - correto.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-success">
                                       <span><i class="fas fa-file-alt text-success me-2"></i>Descritivo Revisão PPA 2023</span>
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
                           2021 - Lei 4.023 - PPA 2022 a 2025
                       </button>
                   </h2>
                   <div id="collapse2021" class="accordion-collapse collapse" data-bs-parent="#accordionPPA">
                       <div class="accordion-body">
                           <div class="row g-2">
                               <div class="col-md-6">
                                   <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/PPA-Lei4023_10-12-2021/1-Lei-N-4023-10122021.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-success">
                                       <span><i class="fas fa-gavel text-success me-2"></i>Lei 4.023</span>
                                       <span class="badge bg-softGray text-green">PDF</span>
                                   </a>
                               </div>
                               <div class="col-md-6">
                                   <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/PPA-Lei4023_10-12-2021/2-Descritivo-PPA-2022-2025.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-success">
                                       <span><i class="fas fa-file-alt text-success me-2"></i>Descritivo I</span>
                                       <span class="badge bg-softGray text-green">PDF</span>
                                   </a>
                               </div>
                               <div class="col-md-6">
                                   <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2022/PPA-Lei4023_10-12-2021/3-ANEXO-PPA-2022-2025.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-success">
                                       <span><i class="fas fa-chart-bar text-success me-2"></i>Plano Plurianual 2022 / 2025</span>
                                       <span class="badge bg-softGray text-green">PDF</span>
                                   </a>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>

               <!-- 2020 -->
               <div class="accordion-item">
                   <h2 class="accordion-header">
                       <button class="accordion-button collapsed fs-4 text-soft" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2020" aria-expanded="false" aria-controls="collapse2020">
                           2020 - Lei nº 3.941 - Revisão PPA 2018 a 2021
                       </button>
                   </h2>
                   <div id="collapse2020" class="accordion-collapse collapse" data-bs-parent="#accordionPPA">
                       <div class="accordion-body">
                           <div class="row g-2">
                               <div class="col-md-6">
                                   <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2021/3941-2020-PPA/0-3.941-2020-PPA.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-success">
                                       <span><i class="fas fa-gavel text-success me-2"></i>Lei nº 3.941</span>
                                       <span class="badge bg-softGray text-green">PDF</span>
                                   </a>
                               </div>
                               <div class="col-md-6">
                                   <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2021/3941-2020-PPA/1-RevisaoPPA2018-2021-Descritivo.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-success">
                                       <span><i class="fas fa-file-alt text-success me-2"></i>Anexo I</span>
                                       <span class="badge bg-softGray text-green">PDF</span>
                                   </a>
                               </div>
                               <div class="col-md-6">
                                   <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2021/3941-2020-PPA/2-PPA2018-2021.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-success">
                                       <span><i class="fas fa-chart-bar text-success me-2"></i>Plano Plurianual 2018 / 2021</span>
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
                           2019 - Lei nº 3.916 - Revisão PPA 2018 a 2021
                       </button>
                   </h2>
                   <div id="collapse2019" class="accordion-collapse collapse" data-bs-parent="#accordionPPA">
                       <div class="accordion-body">
                           <div class="row g-2">
                               <div class="col-md-6">
                                   <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2020/3916-2019-PPA/Lei3916.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-success">
                                       <span><i class="fas fa-gavel text-success me-2"></i>Lei nº 3.916</span>
                                       <span class="badge bg-softGray text-green">PDF</span>
                                   </a>
                               </div>
                               <div class="col-md-6">
                                   <a href="https://angra.rj.gov.br/downloads/cgm/leisorcamentarias/2020/3916-2019-ppa/PPA-Atualizado-Emenda.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-success">
                                       <span><i class="fas fa-file-alt text-success me-2"></i>Anexo I</span>
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
                           2018 - Lei nº 3.819 - Revisão PPA 2018 a 2021
                       </button>
                   </h2>
                   <div id="collapse2018" class="accordion-collapse collapse" data-bs-parent="#accordionPPA">
                       <div class="accordion-body">
                           <div class="row g-2">
                               <div class="col-md-6">
                                   <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2019/3819-2018-PPA/Lei-3819.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-success">
                                       <span><i class="fas fa-gavel text-success me-2"></i>Lei nº 3.819</span>
                                       <span class="badge bg-softGray text-green">PDF</span>
                                   </a>
                               </div>
                               <div class="col-md-6">
                                   <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2019/3819-2018-PPA/Anexo-1.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-success">
                                       <span><i class="fas fa-file-alt text-success me-2"></i>Anexo 1</span>
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
                           2017 - Lei nº 3.715 - PPA 2018 a 2021
                       </button>
                   </h2>
                   <div id="collapse2017" class="accordion-collapse collapse" data-bs-parent="#accordionPPA">
                       <div class="accordion-body">
                           <div class="row g-2">
                               <div class="col-md-6">
                                   <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2018/PPA-3.715-2017/3.715-2017-PPA-Lei.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-success">
                                       <span><i class="fas fa-gavel text-success me-2"></i>Lei nº 3.715</span>
                                       <span class="badge bg-softGray text-green">PDF</span>
                                   </a>
                               </div>
                               <div class="col-md-6">
                                   <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2020/audiencia-publica-ppa-2020.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-success">
                                       <span><i class="fas fa-users text-success me-2"></i>Audiência Pública</span>
                                       <span class="badge bg-softGray text-green">PDF</span>
                                   </a>
                               </div>
                               <div class="col-md-6">
                                   <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2018/PPA-3.715-2017/3.715-2017-PPA-Anexo V.PDF" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-success">
                                       <span><i class="fas fa-file-alt text-success me-2"></i>Anexo I</span>
                                       <span class="badge bg-softGray text-green">PDF</span>
                                   </a>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>

               <!-- Demais anos (2016 a 2013) seguindo o mesmo padrão -->
               <!-- Por questão de espaço, vou mostrar apenas a estrutura para um ano adicional -->

               <!-- 2016 -->
               <div class="accordion-item">
                   <h2 class="accordion-header">
                       <button class="accordion-button collapsed fs-4 text-soft" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2016" aria-expanded="false" aria-controls="collapse2016">
                           2016 - Lei nº 3.613 - Revisão PPA 2014 - 2017
                       </button>
                   </h2>
                   <div id="collapse2016" class="accordion-collapse collapse" data-bs-parent="#accordionPPA">
                       <div class="accordion-body">
                           <div class="row g-2">
                               <div class="col-md-6">
                                   <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2017/3.613-2016-PPA/3.613-2016-Lei.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-success">
                                       <span><i class="fas fa-gavel text-success me-2"></i>Lei nº 3.613</span>
                                       <span class="badge bg-softGray text-green">PDF</span>
                                   </a>
                               </div>
                               <div class="col-md-6">
                                   <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2017/3.613-2016-PPA/CONSOLIDADO-PPA-2017-COM-ALTERACAO-CMAR.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-success">
                                       <span><i class="fas fa-file-alt text-success me-2"></i>Anexo I</span>
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
                           2015 - Lei nº 3.455 - Revisão PPA 2014 a 2017
                       </button>
                   </h2>
                   <div id="collapse2015" class="accordion-collapse collapse" data-bs-parent="#accordionPPA">
                       <div class="accordion-body">
                           <div class="row g-2">
                               <div class="col-md-6">
                                   <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2016/3.455-2015-PPA/3.455-2015-ppa-Lei.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-success">
                                       <span><i class="fas fa-gavel text-success me-2"></i>Lei nº 3.455</span>
                                       <span class="badge bg-softGray text-green">PDF</span>
                                   </a>
                               </div>
                               <div class="col-md-6">
                                   <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2016/3.455-2015-PPA/3.455-2015-ppa-anexo.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-success">
                                       <span><i class="fas fa-file-alt text-success me-2"></i>Anexo I</span>
                                       <span class="badge bg-softGray text-green">PDF</span>
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
                           2014 - Lei nº 3.326 - Revisão PPA 2014 a 2017
                       </button>
                   </h2>
                   <div id="collapse2014" class="accordion-collapse collapse" data-bs-parent="#accordionPPA">
                       <div class="accordion-body">
                           <div class="row g-2">
                               <div class="col-md-6">
                                   <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2015/PPA Lei n 3.326_2014_Revisao do PPA.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-success">
                                       <span><i class="fas fa-gavel text-success me-2"></i>Lei nº 3.326</span>
                                       <span class="badge bg-softGray text-green">PDF</span>
                                   </a>
                               </div>
                               <div class="col-md-6">
                                   <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2015/PPA_2015 - 01-12-2014.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-success">
                                       <span><i class="fas fa-file-alt text-success me-2"></i>Anexo I</span>
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
                           2013 - Lei nº 3.163 - PPA 2014 a 2017
                       </button>
                   </h2>
                   <div id="collapse2013" class="accordion-collapse collapse" data-bs-parent="#accordionPPA">
                       <div class="accordion-body">
                           <div class="row g-2">
                               <div class="col-md-6">
                                   <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2013/PPA_3163/Lei_3.163-2013.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-success">
                                       <span><i class="fas fa-gavel text-success me-2"></i>Lei nº 3.163</span>
                                       <span class="badge bg-softGray text-green">PDF</span>
                                   </a>
                               </div>
                               <div class="col-md-6">
                                   <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2013/PPA_3163/PPA_2014-2017.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-success">
                                       <span><i class="fas fa-file-alt text-success me-2"></i>Anexo I</span>
                                       <span class="badge bg-softGray text-green">PDF</span>
                                   </a>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>

               <!-- 2012 -->
               <div class="accordion-item">
                   <h2 class="accordion-header">
                       <button class="accordion-button collapsed fs-4 text-soft" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2012" aria-expanded="false" aria-controls="collapse2012">
                           2012 - Lei Nº 2.972 - PPA 2010 a 2013
                       </button>
                   </h2>
                   <div id="collapse2012" class="accordion-collapse collapse" data-bs-parent="#accordionPPA">
                       <div class="accordion-body">
                           <div class="row g-2">
                               <div class="col-md-6">
                                   <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2013/PPA_2972/Lei2972-2012.pdf" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-success">
                                       <span><i class="fas fa-gavel text-success me-2"></i>PPA - Plano Plurianual</span>
                                       <span class="badge bg-softGray text-green">PDF</span>
                                   </a>
                               </div>
                               <div class="col-md-6">
                                   <a href="https://angra.rj.gov.br/downloads/CGM/leisorcamentarias/2013/PPA_2972/ANEXO I - DEMONSTRATIVO DE PROGRAMAS E AÇÕES POR ÓRGÃO E UNIDADE.PDF" target="_blank" class="btn btn-outline-success border-0 shadow-sm rounded-3 w-100 text-start d-flex justify-content-between align-items-center border-success">
                                       <span><i class="fas fa-file-alt text-success me-2"></i>Anexo I</span>
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