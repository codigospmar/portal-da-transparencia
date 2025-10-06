<div class="container my-2" id="mainInfo">
    <div class="row justify-content-center">
        <div class="col-12 sectionTitle">
            <div class=" border-0 rounded-3 mb-4">
                <div class="card-body p-3">
                    <p class="fs-5 mb-4">
                        <i class="fas fa-eye text-success me-2"></i>
                        {!! __("O <strong class='text-tertiary'>Portal da Transparência</strong> é uma ferramenta desenvolvida para permitir que a sociedade acompanhe o uso dos recursos públicos e tenha uma participação ativa na discussão das políticas públicas e no uso do dinheiro público.") !!}
                    </p>

                    <p class="fs-5 mb-4">
                        <i class="fas fa-chart-line text-success me-2"></i>
                        {!! __("Com o objetivo de dar plena transparência aos dados do <strong class='text-tertiary'>Poder Executivo</strong>, disponibilizamos à sociedade uma ferramenta prática e intuitiva, atendendo as recomendações dos órgãos de controle.") !!}
                    </p>

                    <p class="fs-5 mb-0">
                        <i class="fas fa-info-circle text-success me-2"></i>
                        @php
                            $ouvidoria = route('pages.ouvidoria');
                            $falabr = "https://falabr.cgu.gov.br/web/home?modoOuvidoria=1&ouvidoriaInterna=false";
                            $mensagem = "Caso não encontre a informação que está buscando, entre em contato conosco através de nossos canais de <a href='{$ouvidoria}' class='text-secondary text-decoration-none fw-bold'>Ouvidoria</a> e do <a href='{$falabr}' target='_blank' class='text-secondary text-decoration-none fw-bold'>Serviço de Informação ao Cidadão</a>."
                        @endphp
                        {!! __($mensagem) !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>