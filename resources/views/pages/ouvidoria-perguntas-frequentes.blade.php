@extends('theme')
@section("title", "Portal da Transparência - Angra dos Reis :: Perguntas Frequentes")
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
                    'route' => route('pages.ouvidoria'),
                    'title' => __("Ouvidoria"),
                ],
                [
                    'currentPage' => "page",
                    'title' => __("Perguntas Frequentes"),
                ],
            ];
        @endphp
            
        @include('components._breadcrumb', $breadcrumbs)
        
        <!-- Título Principal -->
        @include('components._titleMain', [
            "title" => __("Perguntas Frequentes"),
            "summary" => __("Encontre respostas para as dúvidas mais comuns."),
        ])
        
        @include('components._bottunsNavOuvidoria')
        
        <!-- Accordion de Perguntas Frequentes -->
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="accordion" id="faqAccordion">
                    
                    <!-- Pergunta 1 -->
                    <div class="accordion-item border-0 shadow-sm mb-3">
                        <h2 class="accordion-header" id="heading1">
                            <button class="accordion-button collapsed fs-5 fw-bold text-soft bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                Como faço para reclamar sobre o atendimento e/ou o serviço de um profissional da Prefeitura?
                            </button>
                        </h2>
                        <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <p class="mb-0">
                                    É recomendável que o usuário leve sua reclamação diretamente ao órgão ou, se julgar necessário, encaminhá-la à Ouvidoria por meio dos canais de atendimento disponíveis:<br>
                                    E-mail: ouvidoria@angra.rj.gov.br<br>
                                    Site: <a href="/ouvidoria" class="text-success fw-bold">angra.rj.gov.br/ouvidoria</a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Pergunta 2 -->
                    <div class="accordion-item border-0 shadow-sm mb-3">
                        <h2 class="accordion-header" id="heading2">
                            <button class="accordion-button collapsed fs-5 fw-bold text-soft bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                Gostaria de solicitar um serviço e receber informações. É possível fazer contato por telefone com as secretarias? Onde encontro os números?
                            </button>
                        </h2>
                        <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <p class="mb-0">
                                    Sim. No site da Prefeitura de Angra dos Reis cada secretaria possui uma página dedicada com informações relevantes sobre sua área de atuação. O acesso pode ser pelo menu "Estrutura Organizacional". E na seção de cada página das Secretarias ou Autarquia, estão disponíveis os contatos.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Pergunta 3 -->
                    <div class="accordion-item border-0 shadow-sm mb-3">
                        <h2 class="accordion-header" id="heading3">
                            <button class="accordion-button collapsed fs-5 fw-bold text-soft bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                Em minha rua apareceu um buraco e gostaria de solicitar o reparo. Como proceder?
                            </button>
                        </h2>
                        <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <p class="mb-0">
                                    É necessário abrir uma solicitação na Secretaria Executiva de Serviço Público pelo telefone (24) 3368-4402 ou ainda através do e-mail: servicopublico@angra.rj.gov.br.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Pergunta 4 -->
                    <div class="accordion-item border-0 shadow-sm mb-3">
                        <h2 class="accordion-header" id="heading4">
                            <button class="accordion-button collapsed fs-5 fw-bold text-soft bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                Preciso entrar em contato com o SAAE (Serviço Autônomo de Água e Esgoto). Como fazer?
                            </button>
                        </h2>
                        <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <p class="mb-0">
                                    Entrar em contato pelo telefone (24) 3377-6551 ou através do e-mail atendimento@saaeangra.com.br.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Pergunta 5 -->
                    <div class="accordion-item border-0 shadow-sm mb-3">
                        <h2 class="accordion-header" id="heading5">
                            <button class="accordion-button collapsed fs-5 fw-bold text-soft bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                Onde encontro as leis municipais no portal da prefeitura?
                            </button>
                        </h2>
                        <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <p class="mb-0">
                                    No site da Prefeitura, na página do Portal da Transparência, menu "Legislação Municipal", ou através do link: <a href="https://angra.rj.gov.br/legislacao" class="text-success fw-bold">angra.rj.gov.br/legislacao</a>.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Pergunta 6 -->
                    <div class="accordion-item border-0 shadow-sm mb-3">
                        <h2 class="accordion-header" id="heading6">
                            <button class="accordion-button collapsed fs-5 fw-bold text-soft bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                Gostaria de consultar um processo aberto. Como posso fazê-lo?
                            </button>
                        </h2>
                        <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <p class="mb-0">
                                    Você pode ir pessoalmente ao setor de Protocolo no prédio da Prefeitura Municipal, de segunda à sexta-feira das 9:30h às 16h solicitando o processo que deseja consultar, ou consultar digitalmente através do link <a href="https://angra.rj.gov.br/sad-consulta-processo.asp?IndexSigla=SAD" class="text-success fw-bold">angra.rj.gov.br/sad-consulta-processo.asp?IndexSigla=SAD</a>.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Pergunta 7 -->
                    <div class="accordion-item border-0 shadow-sm mb-3">
                        <h2 class="accordion-header" id="heading7">
                            <button class="accordion-button collapsed fs-5 fw-bold text-soft bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                Quem é o responsável pela instalação de postes de iluminação, reparos e trocas de lâmpadas nas vias públicas? Como posso fazer contato para solicitar um serviço?
                            </button>
                        </h2>
                        <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="heading7" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <p class="mb-0">
                                    É necessário abrir uma solicitação na Secretaria de Obras pelo telefone (24) 3367-1736.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Pergunta 8 -->
                    <div class="accordion-item border-0 shadow-sm mb-3">
                        <h2 class="accordion-header" id="heading8">
                            <button class="accordion-button collapsed fs-5 fw-bold text-soft bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                                Em minha rua existe uma árvore que precisa ser podada. Como aciono este serviço?
                            </button>
                        </h2>
                        <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="heading8" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <p class="mb-0">
                                    Se estiver em rua pública, o requerente deve abrir um processo administrativo no setor de Protocolo no prédio da Prefeitura, solicitando à Secretaria de Urbanização, Parques e Jardins para vistoriar e agendar a execução da poda.<br>
                                    Em caso de risco eminente, o requerimento se dirige à Secretaria de Defesa Civil, pessoalmente no endereço: Av. Júlio César de Noronha, 271 ou através do telefone 199.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Pergunta 9 -->
                    <div class="accordion-item border-0 shadow-sm mb-3">
                        <h2 class="accordion-header" id="heading9">
                            <button class="accordion-button collapsed fs-5 fw-bold text-soft bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
                                Vi alguns carros estacionados em local proibido. Gostaria de reclamar disto junto à Prefeitura de Angra dos Reis. Como proceder?
                            </button>
                        </h2>
                        <div id="collapse9" class="accordion-collapse collapse" aria-labelledby="heading9" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <p class="mb-0">
                                    Entrar em contato com a Secretaria de Ordem Pública e Mobilidade Urbana, no departamento de Trânsito, através do telefone (24) 3365-7216.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Pergunta 10 -->
                    <div class="accordion-item border-0 shadow-sm mb-3">
                        <h2 class="accordion-header" id="heading10">
                            <button class="accordion-button collapsed fs-5 fw-bold text-soft bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
                                Como posso solicitar a fiscalização em uma área com aparente risco de deslizamento de terra?
                            </button>
                        </h2>
                        <div id="collapse10" class="accordion-collapse collapse" aria-labelledby="heading10" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <p class="mb-0">
                                    Entrar em contato com a Defesa Civil pelo telefone 199.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Pergunta 11 -->
                    <div class="accordion-item border-0 shadow-sm mb-3">
                        <h2 class="accordion-header" id="heading11">
                            <button class="accordion-button collapsed fs-5 fw-bold text-soft bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapse11" aria-expanded="false" aria-controls="collapse11">
                                Como faço para apontar uma crítica à informação divulgada pelo site da prefeitura?
                            </button>
                        </h2>
                        <div id="collapse11" class="accordion-collapse collapse" aria-labelledby="heading11" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <p class="mb-0">
                                    As críticas devem ser encaminhadas à Ouvidoria da prefeitura.<br>
                                    E-mail: ouvidoria@angra.rj.gov.br<br>
                                    Site: <a href="/ouvidoria" class="text-success fw-bold">angra.rj.gov.br/ouvidoria</a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Pergunta 12 -->
                    <div class="accordion-item border-0 shadow-sm mb-3">
                        <h2 class="accordion-header" id="heading12">
                            <button class="accordion-button collapsed fs-5 fw-bold text-soft bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapse12" aria-expanded="false" aria-controls="collapse12">
                                Quem pode receber demandas acerca de problemas relacionados à limpeza (lixo, terreno baldio e entulho)?
                            </button>
                        </h2>
                        <div id="collapse12" class="accordion-collapse collapse" aria-labelledby="heading12" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <p class="mb-0">
                                    A Secretaria de Serviços Públicos, pessoalmente no endereço: Av. Ayrton Senna da Silva, 580, Praia do Anil, ou pelo telefone (24) 3377-4229.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Pergunta 13 -->
                    <div class="accordion-item border-0 shadow-sm mb-3">
                        <h2 class="accordion-header" id="heading13">
                            <button class="accordion-button collapsed fs-5 fw-bold text-soft bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapse13" aria-expanded="false" aria-controls="collapse13">
                                Questões relativas a concursos públicos podem ser direcionadas a qual secretaria? Como faço para acioná-las?
                            </button>
                        </h2>
                        <div id="collapse13" class="accordion-collapse collapse" aria-labelledby="heading13" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <p class="mb-0">
                                    O órgão responsável por concursos públicos na esfera municipal é a Secretaria de Administração. Você poderá entrar em contato com o Recurso Humano através do telefone (24) 3365-5391, através do <a href="https://portaldoservidor.angra.rj.gov.br" class="text-success fw-bold">portaldoservidor.angra.rj.gov.br</a> ou através do e-mail adpe@angra.rj.gov.br.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection