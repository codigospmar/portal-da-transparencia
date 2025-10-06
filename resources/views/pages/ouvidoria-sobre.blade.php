@extends('theme')
@section("title", "Portal da Transparência - Angra dos Reis :: Assessoria de Ouvidoria Externa")
@section('content')
<main class="main py-4">

    <div class="container">
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb" class="mb-3">
            <ol class="breadcrumb small">
                <li class="breadcrumb-item"><a href="{{ env("PORTAL_ANGRA") }}">Página Inicial</a></li>
                <li class="breadcrumb-item"><a href="{{ route('index') }}">Portal da Transparência</a></li>
                <li class="breadcrumb-item active" aria-current="page">Assessoria de Ouvidoria Externa</li>
            </ol>
        </nav>


        <!-- Título Principal -->
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h1 class="display-5 fw-bold text-soft">Assessoria de Ouvidoria Externa</h1>
            </div>
        </div>

        <div class="container my-5">
            <article class="article-main">
                <div class="mb-4">
                    <p class="mb-3">
                        A <strong>Assessoria de Ouvidoria Externa</strong> é a unidade responsável por acolher as manifestações do
                        público da Prefeitura de Angra dos Reis e de seus diversos órgãos e secretarias. Prestamos atendimento,
                        acompanhamento e resposta às manifestações dos usuários externos.
                    </p>
                    <p class="mb-3">
                        As <strong>manifestações</strong> podem se tratar de reclamações, denúncias, comunicações de
                        irregularidades (reclamações e denúncias anônimas), sugestões, elogios, solicitações de providências,
                        solicitações de simplificação e pedidos de acesso à informação.
                    </p>
                    <p class="mb-3">
                        A Ouvidoria é o espaço estratégico e democrático de comunicação entre toda a organização e seu
                        público, visando fortalecer os mecanismos de cidadania e qualificar a gestão a partir dos princípios da
                        legalidade, impessoalidade, moralidade, publicidade, eficiência e razoabilidade.
                    </p>
                    <p class="mb-3">
                        A Assessoria de Ouvidoria Externa também é responsável pelas ações do <strong>Serviço de Informação ao
                            Cidadão – SIC</strong>.
                    </p>
                    <p class="mb-3">
                        <strong>E-mail:</strong> ouvidoria@angra.rj.gov.br <br>
                        <strong>Telefone:</strong> (24) 3365-1234, de segunda a sexta-feira, de 14:00 às 17:00
                    </p>
                </div>

                <div class="mb-4">
                    <h3 class="h4 mb-3">Público</h3>
                    <p>
                        Qualquer pessoa, natural (física) ou (jurídica), pode registrar uma manifestação.
                    </p>
                </div>

                <div class="mb-4">
                    <h3 class="h4 mb-3">Identidade do Manifestante</h3>
                    <p class="mb-2">
                        <strong>Identificado:</strong> Quando o manifestante informa à Assessoria de Ouvidoria Externa seu nome e
                        meios de contato (e-mail, telefone, endereço etc.).
                    </p>
                    <p class="mb-2">
                        <strong>Sigiloso:</strong> Quando o manifestante informa para a Assessoria de Ouvidoria Externa seu nome e
                        meios de contato (e-mail, telefone, endereço, etc.) mas solicita que o sigilo da sua identidade seja
                        preservado nas demais instâncias. A Assessoria de Ouvidoria Externa manterá o sigilo da fonte e a proteção
                        do manifestante, em obediência ao que preceitua o direito individual dos cidadãos e a
                        inviolabilidade de sua intimidade, sempre que julgar necessário, independentemente de solicitação do manifestante.
                    </p>
                    <p class="mb-2">
                        <strong>Anônimo:</strong> Quando o manifestante NÃO informa para a Ouvidoria seu nome e meios de contato
                        (e-mail, telefone, endereço, etc.). As denúncias e reclamações anônimas serão classificadas como
                        comunicações de irregularidades. Para as manifestações anônimas será adotada medida de análise preliminar de
                        elementos mínimos acerca da autoria e materialidade da reclamação/denúncia. Por não gerar número de
                        protocolo, a opção de registro anônimo não dá o direito de resposta ao manifestante.
                    </p>
                </div>

                <div class="mb-4">
                    <h3 class="h4 mb-3">Prazo de Respostas</h3>
                    <p class="mb-2">
                        <strong>Pedido de Acesso à Informação:</strong> (esclarecimentos de dúvidas, pedido de cópias de
                        documentos ou acesso a dados e informações em geral): 20 dias, que pode ser prorrogado por mais 10 dias, se a
                        Ouvidoria justificar a necessidade.
                    </p>
                    <p class="mb-2">
                        <strong>Demais Manifestações de Ouvidoria:</strong> (reclamações, elogios, denúncias, solicitações e
                        sugestão - Exceto manifestações anônimas, que não recebem respostas): 30 dias, que pode ser prorrogado por
                        outros 30 dias, caso o órgão ou setor responsável justificar a necessidade.
                    </p>
                </div>

                <div class="mb-4">
                    <h3 class="h4 mb-3">Serviço de Informação ao Cidadão - SIC</h3>

                    <p class="mb-3">
                        O Serviço de Informações ao Cidadão (SIC) é a unidade física existente em todos os órgãos e
                        entidades do poder público, em local identificado e de fácil acesso, para atender o cidadão que deseja
                        solicitar o acesso à informação pública. Os SICs têm como objetivos:
                    </p>
                    <ul class="mb-3">
                        <li>Atender e orientar o público quanto ao acesso a informações</li>
                        <li>Conceder o acesso imediato à informação disponível</li>
                        <li>Informar sobre a tramitação de documentos nas suas respectivas unidades</li>
                        <li>Protocolizar documentos e requerimentos de acesso a informações</li>
                    </ul>
                    <p class="mb-3">
                        <strong>Endereço:</strong> Praça Nilo Peçanha, n.º 186 - Centro - Angra dos Reis, RJ. Cep: 23900-901<br>
                        <strong>Horário de Funcionamento:</strong> 9h30 às 16h.<br>
                        <strong>Regulamentação:</strong> <a href="downloads/Transparencia/SIC/Decreto9.151-2014-LAI.pdf" class="text-decoration-none">Decreto Nº 9.151, de 03 de janeiro de 2014</a>
                    </p>
                    <p class="mb-2">
                        <strong>Autoridade do Órgão responsável pelo monitoramento da LAI:</strong><br>
                        Roberto Peixoto Medeiros da Silva Servidor<br>
                        Controlador-Geral do Município
                    </p>
                    <p class="mb-2">
                        <strong>Reponsável pelo monitoramento da LAI:</strong><br>
                        Nilson Júdice de Moraes<br>
                        Coordenador Técnico de Governança e Transparência
                    </p>
                    <p class="mb-2">
                        <strong>Responsável pela Ouvidoria Externa do Município:</strong><br>
                        Renan de Andrade Leone
                    </p>
                    <p class="mb-2">
                        <strong>Telefone:</strong> (24) 3379-9966<br>
                        <strong>Fale Conosco:</strong> <a href="mailto:ouvidoria@angra.rj.gov.br" class="text-decoration-none">ouvidoria@angra.rj.gov.br</a>
                    </p>
                    <p class="mb-2">
                        <strong>Obs:</strong> este e-mail não deve ser usado para encaminhar pedidos de informações com base na Lei de Acesso à Informação. Os pedidos devem ser feitos pessoalmente, no SIC físico da Prefeitura de Angra dos Reis, ou de forma eletrônica, por meio FALA.BR (Plataforma Integrada de Ouvidoria e Acesso à Informação)
                    </p>
                </div>
            </article>
        </div>

    </div>
</main>
@endsection