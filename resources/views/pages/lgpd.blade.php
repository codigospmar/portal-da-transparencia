@extends('theme')
@section("title", "Portal da Transparência - Angra dos Reis :: Proteção de Dados e Segurança da Informação")
@section('content')
<section>
    <div class="container my-5">

        <!-- Breadcrumb -->
        @php
            $breadcrumbs = [
                [
                    'route' => route('index'),
                    'title' => __("Página Inicial"),
                ],
                [
                    'currentPage' => "page",
                    'title' => __("Proteção de Dados e Segurança da Informação"),
                ],
            ];
        @endphp
        
        @include('components._breadcrumb', $breadcrumbs)

        <!-- Título Principal -->
        @include('components._titleMain', [
            "title" => __("Proteção de Dados e Segurança da Informação"),
            "summary" => __("Garantindo a segurança e privacidade das informações"),
        ])

        <!-- Conteúdo Principal -->
        <div class="row justify-content-center">
            <div class="col-lg-10">

                <!-- Introdução -->
                <div class="card border-0 shadow-sm mb-5">
                    <div class="card-body p-5">
                        <p class="fs-6 mb-0">
                            A segurança de dados é crucial para organizações com informações sensíveis. A Prefeitura de Angra tem acesso a dados pessoais e deve garantir a proteção desses dados. Esta página fornece informações sobre medidas de segurança adotadas e orientações para cidadãos manterem suas informações seguras.
                        </p>
                    </div>
                </div>

                <!-- Seção LGPD -->
                <div class="card border-0 shadow-sm mb-5">
                    <div class="card-body p-5">
                        <h3 class="fw-bold text-soft mb-4">LGPD</h3>
                        <p class="fs-6 mb-3">
                            A Lei Geral de Proteção de Dados (LGPD) é uma legislação brasileira que entrou em vigor em setembro de 2020 e estabelece regras para o tratamento de dados pessoais por empresas e órgãos públicos. A Prefeitura Municipal de Angra dos Reis está em conformidade com essa lei para garantir a segurança e privacidade das informações de seus cidadãos.
                        </p>
                        <p class="fs-6 mb-4">
                            A LGPD estabelece que dados pessoais são informações que permitem a identificação de uma pessoa física, como nome, endereço, CPF, entre outros. Além disso, a lei determina que esses dados devem ser tratados de forma transparente, com consentimento do titular, e apenas para finalidades específicas e legítimas.
                        </p>

                        <!-- Documento LGPD -->
                        <div class="card border-0 bg-light h-100 p-4 d-flex">
                            <div class="card-body text-center p-4">
                                <h4 class="card-title text-soft mb-3">Decreto Nº 13.134, de 11 de agosto de 2023</h4>
                                <p class="text-muted mb-3">Regulamenta a Lei Federal Nº 13.709, de 14 de agosto de 2018, Lei Geral de Proteção de Dados Pessoais (LGPD), no âmbito da administração pública municipal direta e indireta, e dá outras providências.</p>
                            </div>
                            <div class="mt-auto col-6 mx-auto">
                                <a download="Decreto-13134-2023_LGPD-AngraDosReis.pdf" href="https://angra.rj.gov.br/downloads/LGPD/Decreto-13134-2023_RegulamentaLGPDMunicipioAngraDosReis.pdf" target="_blank" class="btn border-0 shadow-sm btn-outline-success ">
                                    <i class="fas fa-download me-2"></i> Baixar Decreto
                                </a>
                            </div>
                        </div>

                        <!-- Encarregado de Dados -->
                        <div class="alert alert-info border-0 mt-4">
                            <h5 class="alert-heading fw-bold">Encarregado de Tratamento de Dados</h5>
                            <p class="mb-2"><strong>Renan de Andrade Leone</strong></p>
                            <p class="mb-2">Ouvidor Municipal - Responsável pela Ouvidoria Externa do Município</p>
                            <p class="mb-1"><strong>Telefone:</strong> 156</p>
                            <p class="mb-0"><strong>E-mail:</strong> ouvidoria@angra.rj.gov.br</p>
                        </div>
                    </div>
                </div>

                <!-- Seção Política de Privacidade -->
                <div class="card border-0 shadow-sm mb-5">
                    <div class="card-body p-5">
                        <h3 class="fw-bold text-soft mb-4">Política de Privacidade</h3>
                        <p class="fs-6 mb-4">
                            A política de privacidade é um documento que explica como a Prefeitura de Angra coleta, usa e protege as informações pessoais dos usuários, garantindo transparência e segurança no tratamento desses dados.
                        </p>

                        <!-- Links Política de Privacidade -->
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="card border-0 bg-light h-100 p-4 d-flex">
                                    <div class="card-body text-center p-4">
                                        <h5 class="card-title text-soft mb-3">Política de Privacidade Online</h5>
                                    </div>
                                    <div class="mt-auto col-6 mx-auto">
                                        <a href="https://angra.rj.gov.br/politica-de-privacidade" target="_blank" class="btn border-0 shadow-sm btn-outline-success">
                                            <i class="fas fa-external-link-alt me-2"></i> Acessar Online
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card border-0 bg-light h-100 p-4 d-flex">
                                    <div class="card-body text-center p-4">
                                        <h5 class="card-title text-soft mb-3">Download da Política</h5>
                                        <p class="text-muted small mb-3">Tamanho: 117KB</p>
                                    </div>
                                    <div class="mt-auto col-6 mx-auto">
                                        <a download="politica-de-privacidade-v1.pdf" href="https://angra.rj.gov.br/downloads/LGPD/politica-de-privacidade-v1.pdf" class="btn border-0 shadow-sm btn-outline-success" target="_blank">
                                            <i class="fas fa-download me-2"></i> Baixar PDF
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Seção Política de Segurança -->
                <div class="card border-0 shadow-sm mb-5">
                    <div class="card-body p-5">
                        <h3 class="fw-bold text-soft mb-4">Política de Segurança da Informação e Comunicação</h3>
                        <p class="fs-6 mb-3">
                            Na Política de Segurança da Informação e Comunicação estão contidos um conjunto de padrões, normas e diretrizes estabelecendo princípios, compromissos, valores, requisitos e orientações a fim de mitigar riscos para os dados armazenados em nossos ambientes computacionais.
                        </p>
                        <p class="fs-6 mb-4">
                            Esta PSIC também estabelece regras sobre a gestão de senhas, acesso a dados, backup de dados, gerenciamento de dispositivos móveis e uma camada adicional de proteção para os dados sensíveis existentes em nossa base de dados, informações confidenciais, como informações financeiras, informações de saúde ou dados de pessoa natural, dentre outras questões correlatas.
                        </p>

                        <!-- Links Política de Segurança -->
                        <div class="row g-4 mb-4">
                            <div class="col-md-6">
                                <div class="card border-0 bg-light h-100 p-4 d-flex">
                                    <div class="card-body text-center p-4">
                                        <h5 class="card-title text-soft mb-3">Política de Segurança Online</h5>
                                    </div>
                                    <div class="mt-auto col-6 mx-auto">
                                        <a href="https://angra.rj.gov.br/politica-de-seguranca" target="_blank" class="btn border-0 shadow-sm btn-outline-success">
                                            <i class="fas fa-external-link-alt me-2"></i> Acessar Online
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card border-0 bg-light h-100 p-4 d-flex">
                                    <div class="card-body text-center p-4">
                                        <h5 class="card-title text-soft mb-3">Decreto de Estabelecimento</h5>
                                        <p class="text-muted small mb-3">Decreto Nº 13.042, de 13 de junho de 2023</p>
                                    </div>
                                    <div class="mt-auto col-6 mx-auto">
                                        <a download="Decreto-13042-2023_PoliticaDeSeguracaDaInformacao.pdf" href="https://angra.rj.gov.br/downloads/LGPD/Decreto-13042-2023_PoliticaDeSeguracaDaInformacao.pdf" target="_blank" class="btn border-0 shadow-sm btn-outline-success">
                                            <i class="fas fa-download me-2"></i> Baixar Decreto
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Seção Cartilha -->
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-5">
                        <h3 class="fw-bold text-soft mb-4">Cartilha de Medidas e Boas Práticas da Segurança da Informação</h3>
                        <p class="fs-6 mb-4">
                            Esta cartilha é um conjunto de recomendações e orientações para conscientizar os usuários sobre a importância da segurança da informação e ajudá-los a adotar práticas seguras no uso de tecnologias e manipulação de dados.
                        </p>

                        <!-- Cartilha Download -->
                        <div class="card border-0 bg-light h-100 p-4 d-flex">
                            <div class="card-body text-center p-4">
                                <h4 class="card-title text-soft mb-3">Cartilha de Boas Práticas</h4>
                                <p class="text-muted mb-3">Tamanho: 21.3MB</p>
                            </div>
                            <div class="mt-auto col-6 mx-auto">
                                <a target="_blank" download="cartilha-de-boas-praticas-de-seguranca-da-informacao-v1.pdf" href="https://angra.rj.gov.br/downloads/LGPD/cartilha-de-boas-praticas-de-seguranca-da-informacao-v1.pdf" class="btn border-0 shadow-sm btn-outline-success  ">
                                    <i class="fas fa-download me-2"></i> Baixar Cartilha
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