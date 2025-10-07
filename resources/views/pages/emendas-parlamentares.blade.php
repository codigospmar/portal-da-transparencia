@extends('theme')
@section("title", "Portal da Transparência - Angra dos Reis :: Emendas Parlamentares")
@section('content')
<section>
    <div class="container my-5">

        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('index') }}">Página Inicial</a></li>
                <li class="breadcrumb-item active">Emendas Parlamentares</li>
            </ol>
        </nav>

        <!-- Título Principal -->
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h1 class="display-5 fw-bold text-soft">Emendas Parlamentares</h1>
            </div>
        </div>

        <!-- Cards de Download -->
        <div class="row mb-5">
            <div class="col-12">
                <h2 class="text-center mb-4">Download</h2>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 mx-auto">
                <div class="card border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="bg-green bg-opacity-10 p-3 rounded-3 d-inline-flex mb-4 text-white">
                            <i class="fa-solid fa-file-excel text-white fs-2"></i>
                        </div>
                        <h3 class="card-title text-dark mb-3">Planilhas</h3>
                        <p class="text-muted mb-4">Baixe os dados em formato Excel ou CSV</p>
                        <div class="d-grid gap-2">
                            <a href="https://angra.rj.gov.br/downloads/Transparencia/Tabela-Emendas-Ago.xls" target="_blank" class="btn btn-success">
                                <i class="fas fa-download me-2"></i> Formato XLS
                            </a>
                            <a href="https://portal.angra.rj.gov.br/downloads/Transparencia/Tabela-Emendas-Ago.csv" target="_blank" class="btn btn-outline-success">
                                <i class="fas fa-download me-2"></i> Formato CSV
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tabela de Emendas -->
        <div class="row">
            <div class="col-12">
                <div class="card border-0 shadow-sm">
                    <div class="card-header bg-soft text-dark">
                        <h3 class="card-title mb-0">Lista de Emendas Parlamentares</h3>
                    </div>
                    <div class="card-body p-0">

                        <div class="table-responsive">
                            <table class="table table-striped table-hover mb-0">
                                <thead class="table-dark">
                                    <tr >
                                        <th class="text-dark">Autor</th>
                                        <th class="text-dark">Nº Emenda</th>
                                        <th class="text-dark">Ano Emenda</th>
                                        <th class="text-dark">Nº Convênio</th>
                                        <th class="text-dark">Situação do Convênio</th>
                                        <th class="text-dark">Objeto</th>
                                        <th class="text-dark">Função de Governo</th>
                                        <th class="text-dark">Modalidade</th>
                                        <th class="text-dark text-end">Valor Previsto</th>
                                        <th class="text-dark text-end">Valor Realizado</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>BANCADA DO RIO DE JANEIRO</td>
                                        <td>71200018</td>
                                        <td>2021</td>
                                        <td>914347</td>
                                        <td><span class="badge bg-warning">Em execução</span></td>
                                        <td>Construção de Infraestrutura na Orla da Monsuaba no Município de Angra dos Reis/RJ.</td>
                                        <td>Obras e Investimentos</td>
                                        <td>CONTRATO DE REPASSE</td>
                                        <td class="text-end">R$ 5.253.452,00</td>
                                        <td class="text-end">R$ 0,00</td>
                                    </tr>
                                    <tr>
                                        <td>BANCADA DO RIO DE JANEIRO</td>
                                        <td>71200010</td>
                                        <td>2023</td>
                                        <td>941592</td>
                                        <td><span class="badge bg-warning">Em execução</span></td>
                                        <td>Construção de Centro de Qualificação Profissional Gastronômica, Hoteleira e de Turismo no Município de Angra dos Reis/RJ</td>
                                        <td>Obras e Investimentos</td>
                                        <td>CONTRATO DE REPASSE</td>
                                        <td class="text-end">R$ 5.552.203,00</td>
                                        <td class="text-end">R$ 0,00</td>
                                    </tr>
                                    <tr>
                                        <td>CELSO JACOB</td>
                                        <td>35510019</td>
                                        <td>2017</td>
                                        <td>846928</td>
                                        <td><span class="badge bg-danger">Convênio Anulado</span></td>
                                        <td>Construção do Portal no Município de Angra dos Reis-RJ.</td>
                                        <td>Obras e Investimentos</td>
                                        <td>CONTRATO DE REPASSE</td>
                                        <td class="text-end">R$ 243.750,00</td>
                                        <td class="text-end">R$ 0,00</td>
                                    </tr>
                                    <tr>
                                        <td>DELEY</td>
                                        <td>14730001</td>
                                        <td>2017</td>
                                        <td>843789</td>
                                        <td><span class="badge bg-danger">Convênio Anulado</span></td>
                                        <td>Implantação e Modernização de Infraestrutura Esportiva</td>
                                        <td>Esportes e Cultura</td>
                                        <td>CONTRATO DE REPASSE</td>
                                        <td class="text-end">R$ 975.000,00</td>
                                        <td class="text-end">R$ 0,00</td>
                                    </tr>
                                    <tr>
                                        <td>DELEY</td>
                                        <td>14730002</td>
                                        <td>2018</td>
                                        <td>877735</td>
                                        <td><span class="badge bg-softGray text-green">Prestação de Contas Concluída</span></td>
                                        <td>Implantação de academia ao ar livre.</td>
                                        <td>Esportes e Cultura</td>
                                        <td>CONTRATO DE REPASSE</td>
                                        <td class="text-end">R$ 255.525,66</td>
                                        <td class="text-end">R$ 255.525,66</td>
                                    </tr>
                                    <tr>
                                        <td>FERNANDO JORDAO</td>
                                        <td>29230005</td>
                                        <td>2016</td>
                                        <td>831366</td>
                                        <td><span class="badge bg-danger">Convênio Anulado</span></td>
                                        <td>Implantação e Modernização de Infraestrutura Esportiva</td>
                                        <td>Esportes e Cultura</td>
                                        <td>CONTRATO DE REPASSE</td>
                                        <td class="text-end">R$ 780.000,00</td>
                                        <td class="text-end">R$ 0,00</td>
                                    </tr>
                                    <tr>
                                        <td>FERNANDO JORDAO</td>
                                        <td>29230008</td>
                                        <td>2016</td>
                                        <td>828210</td>
                                        <td><span class="badge bg-danger">Convênio Anulado</span></td>
                                        <td>Construção de reservatório de água potável no bairro do Bracuí</td>
                                        <td>Obras e Investimentos</td>
                                        <td>CONVENIO</td>
                                        <td class="text-end">R$ 790.491,23</td>
                                        <td class="text-end">R$ 0,00</td>
                                    </tr>
                                    <tr>
                                        <td>FERNANDO JORDAO</td>
                                        <td>29230004</td>
                                        <td>2017</td>
                                        <td>843569</td>
                                        <td><span class="badge bg-danger">Convênio Anulado</span></td>
                                        <td>Implantação e Modernização de Infraestrutura Esportiva</td>
                                        <td>Esportes e Cultura</td>
                                        <td>CONTRATO DE REPASSE</td>
                                        <td class="text-end">R$ 975.000,00</td>
                                        <td class="text-end">R$ 0,00</td>
                                    </tr>
                                    <tr>
                                        <td>FERNANDO JORDAO</td>
                                        <td>29230005</td>
                                        <td>2017</td>
                                        <td>843572</td>
                                        <td><span class="badge bg-danger">Convênio Anulado</span></td>
                                        <td>Implantação e Modernização de Infraestrutura Esportiva</td>
                                        <td>Esportes e Cultura</td>
                                        <td>CONTRATO DE REPASSE</td>
                                        <td class="text-end">R$ 1.033.500,00</td>
                                        <td class="text-end">R$ 0,00</td>
                                    </tr>
                                    <tr>
                                        <td>FERNANDO JORDAO</td>
                                        <td>29230011</td>
                                        <td>2017</td>
                                        <td>847008</td>
                                        <td><span class="badge bg-danger">Convênio Anulado</span></td>
                                        <td>Reforma do Terminal Marítimo no Município de Angra dos Reis-RJ.</td>
                                        <td>Obras e Investimentos</td>
                                        <td>CONTRATO DE REPASSE</td>
                                        <td class="text-end">R$ 1.560.000,00</td>
                                        <td class="text-end">R$ 0,00</td>
                                    </tr>
                                    <tr>
                                        <td>FERNANDO JORDAO</td>
                                        <td>29230007</td>
                                        <td>2017</td>
                                        <td>851088</td>
                                        <td><span class="badge bg-danger">Convênio Anulado</span></td>
                                        <td>Implantação do Programa Esporte e Lazer na Cidade - PELC (Povos e Comunidades Tradicionais) no Município Angra dos Reis/RJ.</td>
                                        <td>Esportes e Cultura</td>
                                        <td>CONVENIO</td>
                                        <td class="text-end">R$ 262.610,44</td>
                                        <td class="text-end">R$ 0,00</td>
                                    </tr>
                                    <tr>
                                        <td>FERNANDO JORDAO</td>
                                        <td>29230008</td>
                                        <td>2017</td>
                                        <td>851034</td>
                                        <td><span class="badge bg-danger">Convênio Anulado</span></td>
                                        <td>Implantação do Programa Luta pela Cidadania-PLC no Município de Angra dos Reis/RJ.</td>
                                        <td>Assistência Social</td>
                                        <td>CONVENIO</td>
                                        <td class="text-end">R$ 311.000,00</td>
                                        <td class="text-end">R$ 0,00</td>
                                    </tr>
                                    <tr>
                                        <td>FERNANDO JORDAO</td>
                                        <td>29230009</td>
                                        <td>2017</td>
                                        <td>851089</td>
                                        <td><span class="badge bg-danger">Convênio Anulado</span></td>
                                        <td>Implantação do Programa Vida Saudável no Município de Angra dos Reis/RJ.</td>
                                        <td>Saúde</td>
                                        <td>CONVENIO</td>
                                        <td class="text-end">R$ 351.913,68</td>
                                        <td class="text-end">R$ 0,00</td>
                                    </tr>
                                    <tr>
                                        <td>HUGO LEAL</td>
                                        <td>23970008</td>
                                        <td>2018</td>
                                        <td>877778</td>
                                        <td><span class="badge bg-softGray text-green">Prestação de Contas Concluída</span></td>
                                        <td>Aquisição e instalação de equipamentos - Academia ao ar livre.</td>
                                        <td>Esportes e Cultura</td>
                                        <td>CONTRATO DE REPASSE</td>
                                        <td class="text-end">R$ 88.062,62</td>
                                        <td class="text-end">R$ 88.062,62</td>
                                    </tr>
                                    <tr>
                                        <td>JANDIRA FEGHALI</td>
                                        <td>17750025</td>
                                        <td>2020</td>
                                        <td>903728</td>
                                        <td><span class="badge bg-softGray text-green">Prestação de Contas Concluída</span></td>
                                        <td>Aquisição de veículo adaptado para o Conselho Municipal dos Direitos da Pessoa com Deficiência.</td>
                                        <td>Assistência Social</td>
                                        <td>CONVENIO</td>
                                        <td class="text-end">R$ 100.000,00</td>
                                        <td class="text-end">R$ 100.000,00</td>
                                    </tr>
                                    <tr>
                                        <td>JULIO LOPES</td>
                                        <td>15040001</td>
                                        <td>2018</td>
                                        <td>880197</td>
                                        <td><span class="badge bg-warning">Em execução</span></td>
                                        <td>Aquisição de veículos e equipamentos para apoio às ações de Assistência Técnica e Extensão Rural</td>
                                        <td>Agricultura e Desenvolvimento Rural</td>
                                        <td>CONTRATO DE REPASSE</td>
                                        <td class="text-end">R$ 393.900,17</td>
                                        <td class="text-end">R$ 393.900,17</td>
                                    </tr>
                                    <tr>
                                        <td>LAURA CARNEIRO</td>
                                        <td>32680001</td>
                                        <td>2017</td>
                                        <td>862539</td>
                                        <td><span class="badge bg-danger">Convênio Anulado</span></td>
                                        <td>Reforma do Terminal Marítimo Abraão no Município de Angra dos Reis-RJ.</td>
                                        <td>Obras e Investimentos</td>
                                        <td>CONTRATO DE REPASSE</td>
                                        <td class="text-end">R$ 284.374,35</td>
                                        <td class="text-end">R$ 0,00</td>
                                    </tr>
                                    <tr>
                                        <td>LUIZ ANTONIO CORREA</td>
                                        <td>41140003</td>
                                        <td>2020</td>
                                        <td>899444</td>
                                        <td><span class="badge bg-danger">Convênio Anulado</span></td>
                                        <td>Ampliação e reforma de quadra de esporte no bairro Village no Município de Angra dos Reis.</td>
                                        <td>Obras e Investimentos</td>
                                        <td>CONTRATO DE REPASSE</td>
                                        <td class="text-end">R$ 286.500,00</td>
                                        <td class="text-end">R$ 0,00</td>
                                    </tr>
                                    <tr>
                                        <td>RELATOR GERAL</td>
                                        <td>81000785</td>
                                        <td>2021</td>
                                        <td>924223</td>
                                        <td><span class="badge bg-warning">Em execução</span></td>
                                        <td>Reforma e Modernização de Quadra Poliesportiva no município de Angra dos Reis/RJ.</td>
                                        <td>Obras e Investimentos</td>
                                        <td>CONTRATO DE REPASSE</td>
                                        <td class="text-end">R$ 955.000,00</td>
                                        <td class="text-end">R$ 0,00</td>
                                    </tr>
                                    <tr>
                                        <td>SERGIO ZVEITER</td>
                                        <td>27890005</td>
                                        <td>2018</td>
                                        <td>875069</td>
                                        <td><span class="badge bg-softGray text-green">Prestação de Contas Concluída</span></td>
                                        <td>Ampliação da praça Vereador Carlos Alberto Tavares para aquisição e instalação de Academia ao ar livre.</td>
                                        <td>Obras e Investimentos</td>
                                        <td>CONTRATO DE REPASSE</td>
                                        <td class="text-end">R$ 256.870,48</td>
                                        <td class="text-end">R$ 256.870,48</td>
                                    </tr>
                                    <tr>
                                        <td>SORAYA SANTOS</td>
                                        <td>37650001</td>
                                        <td>2017</td>
                                        <td>844707</td>
                                        <td><span class="badge bg-danger">Convênio Anulado</span></td>
                                        <td>Complementação da Urbanização da Praça Oscar Schimith</td>
                                        <td>Obras e Investimentos</td>
                                        <td>CONTRATO DE REPASSE</td>
                                        <td class="text-end">R$ 493.100,00</td>
                                        <td class="text-end">R$ 0,00</td>
                                    </tr>
                                    <tr>
                                        <td>WALNEY ROCHA</td>
                                        <td>27930019</td>
                                        <td>2017</td>
                                        <td>852202</td>
                                        <td><span class="badge bg-danger">Convênio Anulado</span></td>
                                        <td>Recapeamento na Estrada do Contorno acesso à Praia do Tanguá no município de Angra dos Reis-RJ</td>
                                        <td>Obras e Investimentos</td>
                                        <td>CONTRATO DE REPASSE</td>
                                        <td class="text-end">R$ 975.000,00</td>
                                        <td class="text-end">R$ 0,00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>


                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection