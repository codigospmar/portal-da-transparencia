<div class="row mb-5">
    <div class="col-12">
        <div class="d-flex flex-wrap gap-2 justify-content-center">
           @php $currentRouteName = Route::currentRouteName(); @endphp
            <a href="https://falabr.cgu.gov.br/publico/RJ/AngradosReis/Manifestacao/RegistrarManifestacao" target="_blank" class="btn btn-outline-success border-0 shadow p-3 rounded-4">
                <i class="fas fa-comment-dots me-2"></i> {{ __("Cadastro de Manifestação") }}
            </a>
            <a href="{{ $currentRouteName == "pages.ouvidoria-perguntas-frequentes" ? "javascript:void" : route('pages.ouvidoria-perguntas-frequentes') }}" 
               class="btn {{ $currentRouteName == "pages.ouvidoria-perguntas-frequentes" ? "btn-success" : "btn-outline-success" }} border-0 shadow p-3 rounded-4" 
               {{ $currentRouteName == "pages.ouvidoria-perguntas-frequentes" ? "disabled" : "" }}>
                <i class="fas fa-question-circle me-2"></i> {{ __("Perguntas Frequentes") }}
            </a>
            <a href="{{ $currentRouteName == "pages.ouvidoria-sobre" ? "javascript:void" : route('pages.ouvidoria-sobre')}}" 
               class="btn {{ $currentRouteName == "pages.ouvidoria-sobre" ? "btn-success" : "btn-outline-success" }} border-0 shadow p-3 rounded-4" 
                {{ $currentRouteName == "pages.ouvidoria-sobre" ? "disabled" : "" }}>
                <i class="fas fa-info-circle me-2"></i> {{ __("Sobre o Canal de Ouvidoria") }}
            </a>
            <a href="{{ $currentRouteName == "pages.ouvidoria-informacoes-classificadas" ? "javascript:void" : route('pages.ouvidoria-informacoes-classificadas') }}" 
               class="btn {{$currentRouteName == "pages.ouvidoria-informacoes-classificadas" ? "btn-success" : "btn-outline-success" }} border-0 shadow p-3 rounded-4" 
                {{$currentRouteName == "pages.ouvidoria-informacoes-classificadas" ? "disabled" : "" }}>
                <i class="fas fa-lock me-2"></i> {{ __("Informações Classificadas") }}
            </a>
            <a href="{{ $currentRouteName == "pages.ouvidoria-relatorio-de-manifestacoes" ? "javascript:void" : route("pages.ouvidoria-relatorio-de-manifestacoes") }}" 
               class="btn  {{ $currentRouteName == "pages.ouvidoria-relatorio-de-manifestacoes" ? "btn-success" : "btn-outline-success" }} border-0 shadow p-3 rounded-4" 
               {{ $currentRouteName == "pages.ouvidoria-relatorio-de-manifestacoes" ? "disabled" : "" }}>
                <i class="fas fa-chart-bar me-2"></i> {{ __("Relatórios de Manifestações") }}
            </a>
        </div>
    </div>
</div>