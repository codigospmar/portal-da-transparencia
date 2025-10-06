@extends('theme')
@section("title", "Portal da Transparência - Angra dos Reis :: Oficinas e Exposições Culturais")
@section('content')
<main class="main py-4">


    <div class="container py-4">
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ env("PORTAL_ANGRA") }}">Página Inicial</a></li>
                <li class="breadcrumb-item"><a href="{{ route('index') }}">Portal da Transparência</a></li>
                <li class="breadcrumb-item active">Oficinas e Exposições Culturais</li>
            </ol>
        </nav>

        <!-- Título Principal -->
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h1 class="display-5 fw-bold text-soft">Oficinas e Exposições Culturais</h1>
                <p class="lead">Informações sobre as oficinas culturais oferecidas e exposições em andamento</p>
            </div>
        </div>

        <!-- Botões de Acesso Rápido -->
        <div class="row mb-5">
            <div class="col-12 text-center">
                <div class="d-flex flex-wrap justify-content-center gap-3">
                    <a href="https://portal.angra.rj.gov.br/noticia.asp?IndexSigla=SCP&vid_noticia=54876" target="_blank" class="btn btn-outline-success shadow border-0">
                        <i class="bi bi-file-text me-2"></i>Lei de Incentivo à Cultura
                    </a>
                    <a href="https://portal.angra.rj.gov.br/secup-fundo-municipal-cultura.asp?IndexSigla=SCP" target="_blank" class="btn btn-outline-success shadow border-0">
                        <i class="bi bi-cash-coin me-2"></i>Fundo Municipal de Cultura
                    </a>
                </div>
            </div>
        </div>

        <!-- Seção de Oficinas -->
        <section class="mb-5">
            <div class="d-flex align-items-center mb-4">
                <i class="bi bi-palette-fill text-success fs-3 me-3"></i>
                <h2 class="mb-0">Oficinas Culturais</h2>
            </div>

            <div class="accordion" id="oficinasAccordion">
                <!-- Oficina 1 - Flauta e violão -->
                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flautaViolao">
                            <i class="bi bi-music-note-beamed me-2"></i>Flauta e violão
                        </button>
                    </h3>
                    <div id="flautaViolao" class="accordion-collapse collapse" data-bs-parent="#oficinasAccordion">
                        <div class="accordion-body">
                            <div class="card workshop-card border-0">
                                <div class="card-body">
                                    <ul class="list-unstyled">
                                        <li class="mb-2"><strong>Local:</strong> Casa Larangeiras</li>
                                        <li class="mb-2"><strong>Funcionamento:</strong> Presencial, 03 vezes por semana. Quartas, quintas e sextas-feiras.</li>
                                        <li class="mb-2"><strong>Horário:</strong> 09h às 11:20h e das 13:30h às 16:20h</li>
                                        <li class="mb-2"><strong>Requisitos básicos:</strong> Idade mínima de 08 anos. Possuir o instrumento. Não há exigência de grau de escolaridade.</li>
                                        <li class="mb-2"><strong>Instrutor:</strong> Maestro Isaías de Castro</li>
                                        <li class="mb-2"><strong>Tempo de duração:</strong> 01 ano</li>
                                        <li class="mb-2"><strong>Inscrição:</strong> Casa Larangeiras de segunda a sexta-feira, das 09h às 16h.</li>
                                        <li class="mb-2"><strong>Status:</strong> Turmas em andamento com vagas disponíveis.</li>
                                        <li class="mb-2"><strong>Endereço:</strong> Largo do Mercado do Peixe, Praça Zumbi dos Palmares. Centro</li>
                                        <li><strong>Contato:</strong> cultura.adm@angra.rj.gov.br</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Oficina 2 - Canto -->
                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#canto">
                            <i class="bi bi-mic-fill me-2"></i>Canto
                        </button>
                    </h3>
                    <div id="canto" class="accordion-collapse collapse" data-bs-parent="#oficinasAccordion">
                        <div class="accordion-body">
                            <div class="card workshop-card border-0">
                                <div class="card-body">
                                    <ul class="list-unstyled">
                                        <li class="mb-2"><strong>Local:</strong> Casa Larangeiras</li>
                                        <li class="mb-2"><strong>Funcionamento:</strong> Presencial, 01 vez por semana, às segundas-feiras.</li>
                                        <li class="mb-2"><strong>Horário:</strong> 15h às 16:30h</li>
                                        <li class="mb-2"><strong>Requisitos básicos:</strong> Idade mínima de 10 anos. Não necessita de conhecimento musical prévio. Não há exigência de grau de escolaridade.</li>
                                        <li class="mb-2"><strong>Instrutor:</strong> Maestro Moacir Saraiva</li>
                                        <li class="mb-2"><strong>Tempo de duração:</strong> Inderteminado</li>
                                        <li class="mb-2"><strong>Inscrição:</strong> Casa Larangeiras de segunda a sexta-feira, das 09h às 16h.</li>
                                        <li class="mb-2"><strong>Status:</strong> Turma em andamento com vagas disponíveis.</li>
                                        <li class="mb-2"><strong>Endereço:</strong> Largo do Mercado do Peixe, Praça Zumbi dos Palmares. Centro</li>
                                        <li><strong>Contato:</strong> cultura@angra.rj.gov.br</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Oficina 3 - Teatro -->
                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#teatro">
                            <i class="bi bi-person-raised-hand me-2"></i>Teatro
                        </button>
                    </h3>
                    <div id="teatro" class="accordion-collapse collapse" data-bs-parent="#oficinasAccordion">
                        <div class="accordion-body">
                            <div class="card workshop-card border-0">
                                <div class="card-body">
                                    <ul class="list-unstyled">
                                        <li class="mb-2"><strong>Local:</strong> Centro Cultural Theóphilo Massad</li>
                                        <li class="mb-2"><strong>Funcionamento:</strong> Presencial, terças e quintas-feiras</li>
                                        <li class="mb-2"><strong>Horário:</strong> 18h às 20h</li>
                                        <li class="mb-2"><strong>Requisitos básicos:</strong> Idade entre 15 e 29 anos. Não necessita de conhecimento prévio. Não há exigência de grau de escolaridade.</li>
                                        <li class="mb-2"><strong>Oficineiro:</strong> Maykon Renan</li>
                                        <li class="mb-2"><strong>Status:</strong> Turma em andamento, sem vagas disponíveis.</li>
                                        <li class="mb-2"><strong>Tempo de duração:</strong> 03 meses</li>
                                        <li class="mb-2"><strong>Endereço:</strong> Praça Guarda Marinha Greenhalgh, S/N. São Bento</li>
                                        <li><strong>Contato:</strong> teatromunicipal@angra.rj.gov.br</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Oficina 4 - DJ -->
                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#dj">
                            <i class="bi bi-vinyl-fill me-2"></i>DJ
                        </button>
                    </h3>
                    <div id="dj" class="accordion-collapse collapse" data-bs-parent="#oficinasAccordion">
                        <div class="accordion-body">
                            <div class="card workshop-card border-0">
                                <div class="card-body">
                                    <ul class="list-unstyled">
                                        <li class="mb-2"><strong>Local:</strong> Centro Cultural Theóphilo Massad</li>
                                        <li class="mb-2"><strong>Funcionamento:</strong> Presencial, sextas-feira</li>
                                        <li class="mb-2"><strong>Horário:</strong> 18h às 20h e de 20h às 22h</li>
                                        <li class="mb-2"><strong>Requisitos básicos:</strong> Idade entre 15 e 29 anos. Não necessita de conhecimento prévio. Não há exigência de grau de escolaridade.</li>
                                        <li class="mb-2"><strong>Oficineiro:</strong> DJ Ted Troll</li>
                                        <li class="mb-2"><strong>Status:</strong> Turma em andamento, sem vagas disponíveis.</li>
                                        <li class="mb-2"><strong>Tempo de duração:</strong> 03 meses</li>
                                        <li class="mb-2"><strong>Endereço:</strong> Praça Guarda Marinha Greenhalgh, S/N. São Bento.</li>
                                        <li><strong>Contato:</strong> teatromunicipal@angra.rj.gov.br</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Oficina 5 - Ballet -->
                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ballet">
                            <i class="bi bi-person-standing-dress me-2"></i>Ballet
                        </button>
                    </h3>
                    <div id="ballet" class="accordion-collapse collapse" data-bs-parent="#oficinasAccordion">
                        <div class="accordion-body">
                            <div class="card workshop-card border-0">
                                <div class="card-body">
                                    <ul class="list-unstyled">
                                        <li class="mb-2"><strong>Local:</strong> Casa de Cultura Constantino Cokotós - Abraão</li>
                                        <li class="mb-2"><strong>Funcionamento:</strong> Presencial, Segundas-feira</li>
                                        <li class="mb-2"><strong>Faixa etária e horários:</strong></li>
                                        <li class="mb-1 ms-3"><strong>Baby:</strong> 4 a 6 anos (10:30h às 11:30h e 16h30h as 17h30)</li>
                                        <li class="mb-1 ms-3"><strong>Iniciante:</strong> 7 a 12 anos (9h30m às 10h30m e 17h30m às 18h30m)</li>
                                        <li class="mb-1 ms-3"><strong>Juvenil:</strong> a partir de 13 anos (18h30m às 19h30m)</li>
                                        <li class="mb-2 ms-3"><strong>Adultos:</strong> a partir de 18 anos (19h30m às 20h30m)</li>
                                        <li class="mb-2"><strong>Requisitos básicos:</strong> Não há.</li>
                                        <li class="mb-2"><strong>Tempo de duração:</strong> 03 meses.</li>
                                        <li class="mb-2"><strong>Oficineiro:</strong> Amanda - Arte Ilha</li>
                                        <li class="mb-2"><strong>Status:</strong> Sem vagas disponíveis</li>
                                        <li class="mb-2"><strong>Endereço:</strong> Rua da Praia, Vila do Abraão. Ilha Grande</li>
                                        <li><strong>Contato:</strong> culturailhagrande@angra.rj.gov.br</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Oficina 6 - Capoeira -->
                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#capoeira">
                            <i class="bi bi-person-arms-up me-2"></i>Capoeira
                        </button>
                    </h3>
                    <div id="capoeira" class="accordion-collapse collapse" data-bs-parent="#oficinasAccordion">
                        <div class="accordion-body">
                            <div class="card workshop-card border-0">
                                <div class="card-body">
                                    <ul class="list-unstyled">
                                        <li class="mb-2"><strong>Local:</strong> Casa de Cultura Constantino Cokotós - Abraão</li>
                                        <li class="mb-2"><strong>Funcionamento:</strong> Presencial, Quintas-feira</li>
                                        <li class="mb-2"><strong>Faixa etária e horários:</strong></li>
                                        <li class="mb-1 ms-3"><strong>04 a 07 anos:</strong> 18h30m às 19h15m</li>
                                        <li class="mb-1 ms-3"><strong>08 a 12 anos:</strong> 19h15m às 20h</li>
                                        <li class="mb-2 ms-3"><strong>a partir de 13 anos:</strong> 20h30m às 21h30m</li>
                                        <li class="mb-2"><strong>Requisitos básicos:</strong> Não há</li>
                                        <li class="mb-2"><strong>Tempo de duração:</strong> 03 meses.</li>
                                        <li class="mb-2"><strong>Oficineiro:</strong> Alessandro - Contramestre Pinóquio / Grupo Senzala</li>
                                        <li class="mb-2"><strong>Status:</strong> Vagas disponíveis</li>
                                        <li class="mb-2"><strong>Endereço:</strong> Rua da Praia, Vila do Abraão. Ilha Grande</li>
                                        <li><strong>Contato:</strong> culturailhagrande@angra.rj.gov.br</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Oficina 7 - Percussão e Jongo urbano -->
                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#percussao">
                            <i class="fa-solid fa-drum me-2"></i>Percussão e Jongo urbano
                        </button>
                    </h3>
                    <div id="percussao" class="accordion-collapse collapse" data-bs-parent="#oficinasAccordion">
                        <div class="accordion-body">
                            <div class="card workshop-card border-0">
                                <div class="card-body">
                                    <ul class="list-unstyled">
                                        <li class="mb-2"><strong>Local:</strong> Casa de Cultura Constantino Cokotós - Abraão</li>
                                        <li class="mb-2"><strong>Funcionamento:</strong> Presencial, Segundas e quartas-feiras</li>
                                        <li class="mb-2"><strong>Faixa etária:</strong> Jovens e adultos</li>
                                        <li class="mb-2"><strong>Requisitos básicos:</strong> Não há</li>
                                        <li class="mb-2"><strong>Tempo de duração:</strong> 03 meses.</li>
                                        <li class="mb-2"><strong>Oficineiro:</strong> Jamaica das Luas</li>
                                        <li class="mb-2"><strong>Status:</strong> Vagas disponíveis</li>
                                        <li class="mb-2"><strong>Endereço:</strong> Rua da Praia, Vila do Abraão. Ilha Grande</li>
                                        <li><strong>Contato:</strong> culturailhagrande@angra.rj.gov.br</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Oficina 8 - Yogaterapia -->
                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#yogaterapia">
                            <i class="fa-solid fa-heart-pulse me-2"></i>Yogaterapia
                        </button>
                    </h3>
                    <div id="yogaterapia" class="accordion-collapse collapse" data-bs-parent="#oficinasAccordion">
                        <div class="accordion-body">
                            <div class="card workshop-card border-0">
                                <div class="card-body">
                                    <ul class="list-unstyled">
                                        <li class="mb-2"><strong>Local:</strong> Casa de Cultura Constantino Cokotós - Abraão</li>
                                        <li class="mb-2"><strong>Funcionamento:</strong> Presencial, Terças e quintas-feiras</li>
                                        <li class="mb-2"><strong>Horário:</strong> 9h30m às 11h30m</li>
                                        <li class="mb-2"><strong>Faixa etária:</strong> Jovens e adultos</li>
                                        <li class="mb-2"><strong>Requisitos básicos:</strong> Não há</li>
                                        <li class="mb-2"><strong>Tempo de duração:</strong> 03 meses.</li>
                                        <li class="mb-2"><strong>Oficineiro:</strong> Liliana – Ma Jivan Prita</li>
                                        <li class="mb-2"><strong>Status:</strong> Vagas disponíveis</li>
                                        <li class="mb-2"><strong>Endereço:</strong> Rua da Praia, Vila do Abraão. Ilha Grande</li>
                                        <li><strong>Contato:</strong> culturailhagrande@angra.rj.gov.br</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Oficina 9 - Dança (Forró) -->
                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#forro">
                            <i class="bi bi-people-fill me-2"></i>Dança (Forró)
                        </button>
                    </h3>
                    <div id="forro" class="accordion-collapse collapse" data-bs-parent="#oficinasAccordion">
                        <div class="accordion-body">
                            <div class="card workshop-card border-0">
                                <div class="card-body">
                                    <ul class="list-unstyled">
                                        <li class="mb-2"><strong>Local:</strong> Casa de Cultura Constantino Cokotós - Abraão</li>
                                        <li class="mb-2"><strong>Funcionamento:</strong> Presencial, Terças-feira</li>
                                        <li class="mb-2"><strong>Horário:</strong> Iniciantes - 19h30m as 20h30m; Avançado - 20h30 às 21h30</li>
                                        <li class="mb-2"><strong>Faixa etária:</strong> Jovens e adultos</li>
                                        <li class="mb-2"><strong>Requisitos básicos:</strong> Não há</li>
                                        <li class="mb-2"><strong>Tempo de duração:</strong> 03 meses.</li>
                                        <li class="mb-2"><strong>Oficineiro:</strong> Pam e Jeff – Pé de Praia Forró</li>
                                        <li class="mb-2"><strong>Status:</strong> Vagas disponíveis</li>
                                        <li class="mb-2"><strong>Endereço:</strong> Rua da Praia, Vila do Abraão. Ilha Grande</li>
                                        <li><strong>Contato:</strong> culturailhagrande@angra.rj.gov.br</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Oficina 10 - Artes cênicas - Iniciação Teatral -->
                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#artesCenicas">
                            <i class="bi bi-mask me-2"></i>Artes cênicas - Iniciação Teatral
                        </button>
                    </h3>
                    <div id="artesCenicas" class="accordion-collapse collapse" data-bs-parent="#oficinasAccordion">
                        <div class="accordion-body">
                            <div class="card workshop-card border-0">
                                <div class="card-body">
                                    <ul class="list-unstyled">
                                        <li class="mb-2"><strong>Local:</strong> Casa de Cultura Constantino Cokotós - Abraão</li>
                                        <li class="mb-2"><strong>Funcionamento:</strong> Presencial, Quartas-feira</li>
                                        <li class="mb-2"><strong>Horário:</strong> 17h30m às 19h30m</li>
                                        <li class="mb-2"><strong>Faixa etária:</strong> a partir de 14 anos</li>
                                        <li class="mb-2"><strong>Requisitos básicos:</strong> Não há</li>
                                        <li class="mb-2"><strong>Tempo de duração:</strong> 03 meses.</li>
                                        <li class="mb-2"><strong>Oficineiro:</strong> Giglio - Teatro Palco Aberto</li>
                                        <li class="mb-2"><strong>Status:</strong> Vagas disponíveis</li>
                                        <li class="mb-2"><strong>Endereço:</strong> Rua da Praia, Vila do Abraão. Ilha Grande</li>
                                        <li><strong>Contato:</strong> culturailhagrande@angra.rj.gov.br</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Oficina 11 - Educação ambiental -->
                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#educacaoAmbiental">
                            <i class="bi bi-tree-fill me-2"></i>Educação ambiental
                        </button>
                    </h3>
                    <div id="educacaoAmbiental" class="accordion-collapse collapse" data-bs-parent="#oficinasAccordion">
                        <div class="accordion-body">
                            <div class="card workshop-card border-0">
                                <div class="card-body">
                                    <ul class="list-unstyled">
                                        <li class="mb-2"><strong>Local:</strong> Casa de Cultura Constantino Cokotós - Abraão</li>
                                        <li class="mb-2"><strong>Funcionamento:</strong> Presencial, Quintas-feira</li>
                                        <li class="mb-2"><strong>Horário:</strong> 16h30m às 18h30m</li>
                                        <li class="mb-2"><strong>Faixa etária:</strong> Crianças e adultos</li>
                                        <li class="mb-2"><strong>Requisitos básicos:</strong> Não há</li>
                                        <li class="mb-2"><strong>Tempo de duração:</strong> 03 meses.</li>
                                        <li class="mb-2"><strong>Oficineiro:</strong> Alexandra Campos - Nativa da Ilha Grande</li>
                                        <li class="mb-2"><strong>Status:</strong> Vagas disponíveis</li>
                                        <li class="mb-2"><strong>Endereço:</strong> Rua da Praia, Vila do Abraão. Ilha Grande</li>
                                        <li><strong>Contato:</strong> culturailhagrande@angra.rj.gov.br</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Oficina 12 - Violão -->
                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#violao">
                            <i class="bi bi-music-note me-2"></i>Violão
                        </button>
                    </h3>
                    <div id="violao" class="accordion-collapse collapse" data-bs-parent="#oficinasAccordion">
                        <div class="accordion-body">
                            <div class="card workshop-card border-0">
                                <div class="card-body">
                                    <ul class="list-unstyled">
                                        <li class="mb-2"><strong>Local:</strong> Casa de Cultura Constantino Cokotós - Abraão</li>
                                        <li class="mb-2"><strong>Funcionamento:</strong> Presencial, Quartas-feira</li>
                                        <li class="mb-2"><strong>Faixa etária:</strong> Joven e adultos a partir de 13 anos</li>
                                        <li class="mb-2"><strong>Horário:</strong></li>
                                        <li class="mb-1 ms-3"><strong>Iniciante:</strong> 13h30m às 14h30m</li>
                                        <li class="mb-1 ms-3"><strong>Intermediário:</strong> 14h30m às 15h30m</li>
                                        <li class="mb-2 ms-3"><strong>Avançado:</strong> 15h30m às 16h30m</li>
                                        <li class="mb-2"><strong>Requisitos básicos:</strong> Não há</li>
                                        <li class="mb-2"><strong>Tempo de duração:</strong> 03 meses.</li>
                                        <li class="mb-2"><strong>Oficineiro:</strong> Renato Moraes - Acordes da Ilha</li>
                                        <li class="mb-2"><strong>Status:</strong> Vagas disponíveis</li>
                                        <li class="mb-2"><strong>Endereço:</strong> Rua da Praia, Vila do Abraão. Ilha Grande</li>
                                        <li><strong>Contato:</strong> culturailhagrande@angra.rj.gov.br</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Oficina 13 - Fabricação de Instrumentos Musicais -->
                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#instrumentos">
                            <i class="bi bi-tools me-2"></i>Fabricação de Instrumentos Musicais e outros produtos do som com materiais Reciclados
                        </button>
                    </h3>
                    <div id="instrumentos" class="accordion-collapse collapse" data-bs-parent="#oficinasAccordion">
                        <div class="accordion-body">
                            <div class="card workshop-card border-0">
                                <div class="card-body">
                                    <ul class="list-unstyled">
                                        <li class="mb-2"><strong>Local:</strong> Casa de Cultura Constantino Cokotós - Abraão</li>
                                        <li class="mb-2"><strong>Funcionamento:</strong> Presencial, Quartas-feira</li>
                                        <li class="mb-2"><strong>Faixa etária:</strong> Joven e adultos a partir de 13 anos</li>
                                        <li class="mb-2"><strong>Horário:</strong> 16h30m às 18h30m</li>
                                        <li class="mb-2"><strong>Requisitos básicos:</strong> Não há</li>
                                        <li class="mb-2"><strong>Tempo de duração:</strong> 03 meses.</li>
                                        <li class="mb-2"><strong>Oficineiro:</strong> Rodrigo Retonde - Tambores do Abraão</li>
                                        <li class="mb-2"><strong>Status:</strong> Vagas disponíveis</li>
                                        <li class="mb-2"><strong>Endereço:</strong> Rua da Praia, Vila do Abraão. Ilha Grande</li>
                                        <li><strong>Contato:</strong> culturailhagrande@angra.rj.gov.br</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-3 text-center">
                <p class="text-muted">Total de 13 oficinas disponíveis</p>
            </div>
        </section>

        <!-- Seção de Exposições -->
        <section class="mb-5">
            <div class="d-flex align-items-center mb-4">
                <i class="bi bi-images text-success fs-3 me-3"></i>
                <h2 class="mb-0">Exposições em Andamento</h2>
            </div>

            <div class="row g-4">
                <!-- Exposição 1 - Casa Larangeiras -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Casa Larangeiras - Salão de exposição</h5>
                            <p class="card-text">Exposições com temas variados através de agendamento prévio.</p>
                            <br>
                            <ul class="list-unstyled small">
                                <li class="mb-1"><strong>Mostra em andamento:</strong> "Olhar Divino - Sem valores, não tem história." em homenagem a Festa do Divino 2024</li>
                                <li class="mb-1"><strong>Horário de visitação:</strong> De segunda a sexta-feira das 09h às 17h e aos sábados, domingos e feriados das 09h às 13h</li>
                            </ul>
                        </div>
                        <div class="card-footer bg-transparent">
                            <small class="text-muted">
                                <i class="bi bi-geo-alt me-1"></i>Largo do Mercado do Peixe, Praça Zumbi dos Palmares. Centro
                            </small>
                            <br>
                            <small class="text-muted">
                                <i class="bi bi-envelope me-1"></i>cultura.adm@angra.rj.gov.br
                            </small>
                        </div>
                    </div>
                </div>

                <!-- Exposição 2 - Museu de Arte Sacra -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Museu de Arte Sacra</h5>
                            <p class="card-text">O Museu de Arte Sacra funciona na Igreja da Lapa. Exposições com curadoria interna com temas variados explorando o acervo sacro do Museu, sendo 03 mostras anuais.</p>
                            <br>
                            <ul class="list-unstyled small">
                                <li class="mb-1"><strong>Mostra em andamento:</strong> "Santas Mulheres"</li>
                                <li class="mb-1"><strong>Horário de visitação:</strong> De terça à sexta-feira das 09 às 12h e das 14 às 17h e aos sábados, domingos e feriados das 09h às 13h</li>
                            </ul>
                        </div>
                        <div class="card-footer bg-transparent">
                            <small class="text-muted">
                                <i class="bi bi-geo-alt me-1"></i>Rua Dr. Bastos. Centro
                            </small>
                            <br>
                            <small class="text-muted">
                                <i class="bi bi-envelope me-1"></i>cultura.patrimonio@angra.rj.gov.br
                            </small>
                        </div>
                    </div>
                </div>

                <!-- Exposição 3 - Centro Cultural Theóphilo Massad -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Centro Cultural Theóphilo Massad</h5>
                            <p class="card-text">Exposições e mostras no hall de entrada do Centro Cultural. O local também abriga o Teatro Municipal Doutor Câmara Torres com capacidade para 200 lugares e Sala de vídeo com capacitade para 50 pessoas.</p>
                            <br>
                            <ul class="list-unstyled small">
                                <li class="mb-1"><strong>Horário de visitação:</strong> De segunda a terça-feira das 09h às 17h, de quarta à sexta-feira das 09 às 21h e sábados e domingo das 15h às 21h.</li>
                            </ul>
                        </div>
                        <div class="card-footer bg-transparent">
                            <small class="text-muted">
                                <i class="bi bi-geo-alt me-1"></i>Praça Guarda Marinha Greenhalgh, S/N. São Bento
                            </small>
                            <br>
                            <small class="text-muted">
                                <i class="bi bi-envelope me-1"></i>teatromunicipal@angra.rj.gov.br
                            </small>
                        </div>
                    </div>
                </div>

                <!-- Exposição 4 - Casa de Cultura Poeta Brasil dos Reis -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Casa de Cultura Poeta Brasil dos Reis</h5>
                            <p class="card-text">Exposições através de curadoria própria e chamada pública, sendo realizadas 03 exposições anuais com 04 meses de duração e 01 mostra permanente em homenagem ao Poeta Brasil dos Reis.</p>
                            <br>
                            <ul class="list-unstyled small">
                                <li class="mb-1"><strong>Mostras em andamento:</strong> "Angra: Múltiplas Expressões" (artesanato) e "Tekoa Sapukay" (arte indígena)</li>
                                <li class="mb-1"><strong>Horário de visitação:</strong> De segunda a sexta-feira das 10h às 19h e sábados, domingos e feriados das 11h às 16h</li>
                            </ul>
                        </div>
                        <div class="card-footer bg-transparent">
                            <small class="text-muted">
                                <i class="bi bi-geo-alt me-1"></i>Rua do Comércio, 172. Centro
                            </small>
                            <br>
                            <small class="text-muted">
                                <i class="bi bi-envelope me-1"></i>casadecultura@angra.rj.gov.br
                            </small>
                        </div>
                    </div>
                </div>

                <!-- Exposição 5 - Casa de Cultura Constantino Cokotós - Abraão -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Casa de Cultura Constantino Cokotós - Abraão</h5>
                            <p class="card-text">Exposições semestrais através de curadoria e chamada pública.</p>
                            <br>
                            <ul class="list-unstyled small">
                                <li class="mb-1"><strong>Mostras em andamento:</strong> "Patrimônio Mundial, cultura e biodiversidade" e "No ritmo do Mar: Constantino Cokotós, entre o leme e a sanfona"</li>
                                <li class="mb-1"><strong>Horário de visitação:</strong> De segunda a sexta-feira das 09:30h às 21:30h e sábados, domingos e feriados das 10 às 17h</li>
                            </ul>
                        </div>
                        <div class="card-footer bg-transparent">
                            <small class="text-muted">
                                <i class="bi bi-geo-alt me-1"></i>Rua da Praia, Vila do Abraão. Ilha Grande
                            </small>
                            <br>
                            <small class="text-muted">
                                <i class="bi bi-envelope me-1"></i>culturailhagrande@angra.rj.gov.br
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
@endsection