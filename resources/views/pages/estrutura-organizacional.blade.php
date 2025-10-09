@extends('theme')
@section("title", "Portal da Transparência - Angra dos Reis :: Estrutura Organizacional")
@section('content')
<main class="main py-4">

    <div class="container py-4">
        <!-- Breadcrumb -->
        @php
            $breadcrumbs = [
                [
                    'route' => route('index'),
                    'title' => __("Página Inicial"),
                ],
                [
                    'currentPage' => "page",
                    'title' => __("Estrutura Organizacional"),
                ],
            ];
        @endphp
        
        @include('components._breadcrumb', $breadcrumbs)

        <!-- Título Principal -->
        @include('components._titleMain', [
            "title" => __("Estrutura Organizacional"),
            "summary" => __(""),
        ])

        <!-- Botões de Acesso Rápido -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="d-flex justify-content-center gap-2">
                    <a href="https://angra.rj.gov.br/downloads/sgri/cargos_e_siglas.pdf" target="_blank" class="btn btn-outline-success fs-6 border-0 shadow rounded-3 p-3 btn-sm">
                        <i class="fas fa-file-pdf me-1"></i> Cargos e Siglas
                    </a>
                    <a href="https://angra.rj.gov.br/downloads/Nova_Lista_Telefonica.pdf" target="_blank" class="btn btn-outline-success fs-6 border-0 shadow rounded-3 p-3 btn-sm">
                        <i class="fas fa-phone me-1"></i> Lista Telefônica
                    </a>
                    <a href="https://www.canva.com/design/DAFnNE4WjuY/tCXJal3yhq8ZwVj-qggO6w/view?website#2:prefeito" target="_blank" class="btn btn-outline-success fs-6 border-0 shadow rounded-3 p-3 btn-sm">
                        <i class="fas fa-sitemap me-1"></i> Organograma
                    </a>
                </div>
            </div>
        </div>

        <!-- Loading -->
        <div id="loading" class="text-center">
            <div class="spinner-border text-success" role="status">
                <span class="visually-hidden">Carregando...</span>
            </div>
            <p class="mt-2">Carregando estrutura organizacional...</p>
        </div>

        <!-- Secretarias -->
        <div id="secretarias-section" style="display: none;">
            <h3 class="mb-3"><strong>Secretarias</strong></h3>
            <div class="accordion mb-4" id="accordionSecretarias">
                <!-- Conteúdo carregado via JavaScript -->
            </div>
        </div>

        <!-- Fundações/Autarquias -->
        <div id="fundacoes-section" style="display: none;">
            <h3 class="mb-3 mt-5"><strong>Fundações/Autarquias</strong></h3>
            <div class="accordion mb-4" id="accordionFundacoes">
                <!-- Conteúdo carregado via JavaScript -->
            </div>
        </div>

    </div>

</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    carregarEstruturaOrganizacional();
});

async function carregarEstruturaOrganizacional() {
    try {
        console.log('Iniciando carregamento...');
        const response = await fetch('https://angra.rj.gov.br/secretarias_dados');
        const secretarias = await response.json();
        
        console.log('Dados brutos recebidos:', secretarias);
        
        // Filtrar apenas os registros com status "ATIVADO"
        const secretariasAtivas = secretarias.filter(secretaria => {
            const status = secretaria.status ? secretaria.status.toUpperCase() : '';
            return status === 'ATIVADO';
        });
        
        console.log('Secretarias ativas:', secretariasAtivas);
        
        // Organizar dados por tipo
        const organizadas = {};
        secretariasAtivas.forEach(secretaria => {
            if (!organizadas[secretaria.type]) {
                organizadas[secretaria.type] = [];
            }
            organizadas[secretaria.type].push(secretaria);
        });

        console.log('Dados organizados:', organizadas);

        // Ordenar por ordem alfabética do nome
        Object.keys(organizadas).forEach(tipo => {
            organizadas[tipo].sort((a, b) => {
                const nomeA = a.name ? a.name.toUpperCase() : '';
                const nomeB = b.name ? b.name.toUpperCase() : '';
                return nomeA.localeCompare(nomeB);
            });
        });

        // Carregar Secretarias
        carregarSecretarias(organizadas);
        
        // Carregar Fundações/Autarquias
        carregarFundacoes(organizadas);
        
        // Esconder loading
        document.getElementById('loading').style.display = 'none';
        
        // Mostrar seções apenas se houver conteúdo
        if (organizadas.SECRETARIA && organizadas.SECRETARIA.length > 0) {
            document.getElementById('secretarias-section').style.display = 'block';
            console.log('Secretarias carregadas:', organizadas.SECRETARIA.length);
        } else {
            document.getElementById('secretarias-section').innerHTML = 
                '<div class="alert alert-warning">Nenhuma secretaria ativa encontrada.</div>';
            document.getElementById('secretarias-section').style.display = 'block';
        }
        
        const fundacoesAutarquias = [
            ...(organizadas.FUNDACAO || []),
            ...(organizadas.AUTARQUIA || [])
        ];
        
        if (fundacoesAutarquias.length > 0) {
            document.getElementById('fundacoes-section').style.display = 'block';
            console.log('Fundações/Autarquias carregadas:', fundacoesAutarquias.length);
        } else {
            document.getElementById('fundacoes-section').innerHTML = 
                '<div class="alert alert-warning">Nenhuma fundação ou autarquia ativa encontrada.</div>';
            document.getElementById('fundacoes-section').style.display = 'block';
        }
        
    } catch (error) {
        console.error('Erro ao carregar dados:', error);
        document.getElementById('loading').innerHTML = 
            '<div class="alert alert-danger">Erro ao carregar a estrutura organizacional. Tente novamente mais tarde.</div>';
    }
}

function carregarSecretarias(dados) {
    const accordion = document.getElementById('accordionSecretarias');
    const secretarias = dados.SECRETARIA || [];
    
    console.log('Carregando secretarias:', secretarias);
    
    if (secretarias.length === 0) {
        accordion.innerHTML = '<div class="text-center p-3">Nenhuma secretaria ativa encontrada.</div>';
        return;
    }
    
    let html = '';
    
    secretarias.forEach((secretaria, index) => {
        console.log('Processando secretaria:', secretaria.name);
        
        // Filtrar subsecretarias ativas que pertencem a esta secretaria
        const subsecretarias = (dados.SECRETARIA_EXECUTIVA || [])
            .filter(sub => {
                const pertence = sub.abbreviation && 
                               secretaria.abbreviation && 
                               sub.abbreviation.startsWith(secretaria.abbreviation + '.');
                const ativa = sub.status && sub.status.toUpperCase() === 'ATIVADO';
                return pertence && ativa;
            })
            // Ordenar subsecretarias alfabeticamente
            .sort((a, b) => {
                const nomeA = a.name ? a.name.toUpperCase() : '';
                const nomeB = b.name ? b.name.toUpperCase() : '';
                return nomeA.localeCompare(nomeB);
            });
        
        console.log(`Subsecretarias encontradas para ${secretaria.name}:`, subsecretarias.length);
        
        html += `
            <div class="accordion-item shadow-sm border-0">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" 
                            data-bs-toggle="collapse" 
                            data-bs-target="#collapse${limparId(secretaria.abbreviation)}">
                        ${secretaria.name || 'Secretaria não nomeada'}
                    </button>
                </h2>
                <div id="collapse${limparId(secretaria.abbreviation)}" 
                     class="accordion-collapse collapse" 
                     data-bs-parent="#accordionSecretarias">
                    <div class="accordion-body">
                        ${gerarInformacoesSecretaria(secretaria)}
                        ${subsecretarias.length > 0 ? gerarSubsecretarias(secretaria, subsecretarias) : ''}
                    </div>
                </div>
            </div>
            ${index < secretarias.length - 1 ? '<hr>' : ''}
        `;
    });
    
    accordion.innerHTML = html;
    console.log('HTML das secretarias gerado');
}

function carregarFundacoes(dados) {
    const accordion = document.getElementById('accordionFundacoes');
    
    // Filtrar apenas fundações e autarquias ativas
    const fundacoesAtivas = (dados.FUNDACAO || []).filter(f => 
        f.status && f.status.toUpperCase() === 'ATIVADO'
    );
    const autarquiasAtivas = (dados.AUTARQUIA || []).filter(a => 
        a.status && a.status.toUpperCase() === 'ATIVADO'
    );
    
    const fundacoes = fundacoesAtivas.concat(autarquiasAtivas)
        // Ordenar fundações/autarquias alfabeticamente
        .sort((a, b) => {
            const nomeA = a.name ? a.name.toUpperCase() : '';
            const nomeB = b.name ? b.name.toUpperCase() : '';
            return nomeA.localeCompare(nomeB);
        });
    
    console.log('Carregando fundações/autarquias:', fundacoes);
    
    if (fundacoes.length === 0) {
        accordion.innerHTML = '<div class="text-center p-3">Nenhuma fundação ou autarquia ativa encontrada.</div>';
        return;
    }
    
    let html = '';
    
    fundacoes.forEach((fundacao, index) => {
        html += `
            <div class="accordion-item shadow-sm border-0">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" 
                            data-bs-toggle="collapse" 
                            data-bs-target="#collapse${limparId(fundacao.abbreviation)}">
                        ${fundacao.name || 'Entidade não nomeada'}
                    </button>
                </h2>
                <div id="collapse${limparId(fundacao.abbreviation)}" 
                     class="accordion-collapse collapse" 
                     data-bs-parent="#accordionFundacoes">
                    <div class="accordion-body">
                        ${gerarInformacoesFundacao(fundacao)}
                    </div>
                </div>
            </div>
            ${index < fundacoes.length - 1 ? '<hr>' : ''}
        `;
    });
    
    accordion.innerHTML = html;
}

function gerarInformacoesSecretaria(secretaria) {
    const pronome = secretaria.pronunciation === 'SECRETARIO' ? 'O Secretário' : 
                   secretaria.pronunciation === 'SECRETARIA' ? 'A Secretária' : 'Responsável';
    
    return `
        <p><strong>${pronome}:</strong> ${secretaria.manager || 'Não informado'}</p>
        <p><strong>Endereço:</strong> ${secretaria.address || 'Não informado'}</p>
        <p><strong>Horário de atendimento ao público:</strong> ${secretaria.serviceHours || 'Não informado'}</p>
        <p><strong>Telefone:</strong> ${secretaria.phoneNumber || 'Não informado'}</p>
        <p><strong>E-mail:</strong> ${secretaria.email1 || 'Não informado'}</p>
        ${secretaria.skills ? `
            <a href="https://angra.rj.gov.br/secretario/competencias-e-atribuicoes/${secretaria.slug || ''}" 
               class="d-block mb-2">
                <strong>Competências e Atribuições</strong>
            </a>
        ` : ''}
        <a href="https://angra.rj.gov.br/secretarias/${secretaria.slug || ''}" 
           class="fw-bold text-primary d-inline-block mb-2">
            + Mais informações
        </a>
    `;
}

function gerarInformacoesFundacao(fundacao) {
    return `
        <p><strong>Responsável:</strong> ${fundacao.manager || 'Não informado'}</p>
        <p><strong>Endereço:</strong> ${fundacao.address || 'Não informado'}</p>
        <p><strong>Horário de atendimento ao público:</strong> ${fundacao.serviceHours || 'Não informado'}</p>
        <p><strong>Telefone:</strong> ${fundacao.phoneNumber || 'Não informado'}</p>
        <p><strong>E-mail:</strong> ${fundacao.email1 || 'Não informado'}</p>
        ${fundacao.skills ? `
            <a href="https://angra.rj.gov.br/secretario/competencias-e-atribuicoes/${fundacao.slug || ''}" 
               class="d-block mb-2">
                <strong>Competências e Atribuições</strong>
            </a>
        ` : ''}
        <a href="https://angra.rj.gov.br/secretarias/${fundacao.slug || ''}" 
           class="fw-bold text-primary d-inline-block mb-2">
            + Mais informações
        </a>
    `;
}

function gerarSubsecretarias(secretaria, subsecretarias) {
    let html = `
        <div class="accordion mt-3 sub-accordion" id="accordion${limparId(secretaria.abbreviation)}-Sub">
    `;
    
    subsecretarias.forEach((subsecretaria, index) => {
        const pronomeSub = subsecretaria.pronunciation === 'SECRETARIO_EXECUTIVO' ? 'O Secretário' : 
                          subsecretaria.pronunciation === 'SECRETARIA_EXECUTIVA' ? 'A Secretária' : 'Responsável';
        
        html += `
            <div class="accordion-item shadow-sm border-0">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" 
                            data-bs-toggle="collapse" 
                            data-bs-target="#collapse${limparId(subsecretaria.abbreviation)}">
                        ${subsecretaria.name || 'Subsecretaria não nomeada'}
                    </button>
                </h2>
                <div id="collapse${limparId(subsecretaria.abbreviation)}" 
                     class="accordion-collapse collapse" 
                     data-bs-parent="#accordion${limparId(secretaria.abbreviation)}-Sub">
                    <div class="accordion-body">
                        <p><strong>${pronomeSub}:</strong> ${subsecretaria.manager || 'Não informado'}</p>
                        <p><strong>Endereço:</strong> ${subsecretaria.address || 'Não informado'}</p>
                        <p><strong>Horário de atendimento ao público:</strong> ${subsecretaria.serviceHours || 'Não informado'}</p>
                        <p><strong>Telefone:</strong> ${subsecretaria.phoneNumber || 'Não informado'}</p>
                        <p><strong>E-mail:</strong> ${subsecretaria.email1 || 'Não informado'}</p>
                        ${subsecretaria.skills ? `
                            <a href="https://angra.rj.gov.br/secretario/competencias-e-atribuicoes/${subsecretaria.slug || ''}" 
                               class="d-block mb-2">
                                <strong>Competências e Atribuições</strong>
                            </a>
                        ` : ''}
                        <a href="https://angra.rj.gov.br/secretarias/${subsecretaria.slug || ''}" 
                           class="fw-bold text-primary d-inline-block mb-2">
                            + Mais informações
                        </a>
                    </div>
                </div>
            </div>
            ${index < subsecretarias.length - 1 ? '<hr>' : ''}
        `;
    });
    
    html += '</div>';
    return html;
}

function limparId(texto) {
    // Remove caracteres especiais para criar IDs válidos
    return texto ? texto.replace(/[^a-zA-Z0-9]/g, '_') : 'sem_id';
}
</script>
@endsection