@extends('theme')
@section("title", "Portal da Transparência - Angra dos Reis :: Dívida Ativa")
@section('content')
<main class="main py-4">
    <div class="container">

        <div class="row">
            <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('index') }}">Página Inicial</a></li>
                <li class="breadcrumb-item active">Unidades de Saúde</li>
            </ol>
        </nav>

            <div id="conteudo" class="col-12">
                <section class="mb-4">

                    <!-- Título Principal -->
                    <div class="row mb-5">
                        <div class="col-12 text-center">
                            <h1 class="display-5 fw-bold text-soft">Relatório de Inscritos na Dívida Ativa</h1>
                        </div>
                    </div>

                    <article>
                        <div class="table-responsive">
                            <table class="table table-striped table-hover mt-3">
                                <thead class="table-light">
                                    <tr>
                                        <th width="22%">Unidade de Saúde</th>
                                        <th>Endereço</th>
                                        <th>Telefone</th>
                                        <th>Atendimento</th>
                                        <th width="18%">Profissional Responsável</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>ESF Sapinhatuba I</td>
                                        <td>Rua 05, s/n, Sapinhatuba I CEP: 23910-000</td>
                                        <td>(24) 3364-4028</td>
                                        <td>&nbsp;</td>
                                        <td>Mariella Luiza Rodrigues</td>
                                    </tr>
                                    <tr>
                                        <td>ESF Sapinhatuba II</td>
                                        <td>Rua 15, s/n, Sapinhatuba II CEP: 23910-310</td>
                                        <td>(24) 3377-5915</td>
                                        <td>&nbsp;</td>
                                        <td>Mariella Luiza Rodrigues</td>
                                    </tr>
                                    <tr>
                                        <td>ESF Sapinhatuba III</td>
                                        <td>Rua da Esperança, s/n Sapinhatuba II CEP: 23910-310</td>
                                        <td>(24) 3367-3193</td>
                                        <td>&nbsp;</td>
                                        <td>Amanda de Lucas Xavier Martins</td>
                                    </tr>
                                    <tr>
                                        <td>ESF Marinas</td>
                                        <td>Estrada do Marinas, n° 226, Marinas CEP: 23907-900</td>
                                        <td>(24) 3377-8799</td>
                                        <td>&nbsp;</td>
                                        <td>Kelly Nunes de Araújo</td>
                                    </tr>
                                    <tr>
                                        <td>ESF Morro do Peres e Glória</td>
                                        <td>Rua: A n°01, Morro da Glória CEP: 23904-600</td>
                                        <td>(24) 3368-7337</td>
                                        <td>&nbsp;</td>
                                        <td>Grazielle Torres Mandeli Bedaque; Raquel Tayko Matos</td>
                                    </tr>
                                    <tr>
                                        <td>ESF Balneário</td>
                                        <td>Rua Comandante Silvio Trilho, s/n, Balneário CEP: 23906-220</td>
                                        <td>(24) 3365-6357</td>
                                        <td>&nbsp;</td>
                                        <td>Viviane Gonçalves</td>
                                    </tr>
                                    <tr>
                                        <td>ESF Morro da Cruz</td>
                                        <td>Rua Comandante Silvio Trilho, s/n, Balneário CEP: 23906-220</td>
                                        <td>(24) 3368-7080</td>
                                        <td>&nbsp;</td>
                                        <td>Adriana Costa Martins Porto</td>
                                    </tr>
                                    <tr>
                                        <td>Clínica da Família - Centro</td>
                                        <td>Rua: Moacir de Paula Lobo, 151 CEP: 23900-370</td>
                                        <td>(24) 3365-5589</td>
                                        <td>&nbsp;</td>
                                        <td>Jordelina Martins Silva</td>
                                    </tr>
                                    <tr>
                                        <td>ESF Contorno/Bonfim</td>
                                        <td>Estrada Vereador Benedito Adelino, n°1698, Bonfim CEP: 23909-070</td>
                                        <td>(24) 3377-6827</td>
                                        <td>&nbsp;</td>
                                        <td>Beatriz de Lima Bessa Ballesteros</td>
                                    </tr>
                                    <tr>
                                        <td>ESF Praia do Anil</td>
                                        <td>Rua Leandro José Figueiredo, 38, Praia do Anil CEP: 23904-100</td>
                                        <td>(24) 3367-2585</td>
                                        <td>&nbsp;</td>
                                        <td>Katia Magalhães Nascimento Diniz</td>
                                    </tr>
                                    <tr>
                                        <td>ESF Campo Belo I</td>
                                        <td>Vila Campo Belo - Rua 5, n°445 CEP: 23932-5</td>
                                        <td>(24) 3365-90778</td>
                                        <td>&nbsp;</td>
                                        <td>Nubia Grazielle Moreira Matias Alves</td>
                                    </tr>
                                    <tr>
                                        <td>ESF Campo Belo II e ESF Areal</td>
                                        <td>Rua: Angra dos Reis, s/n CEP:23932-030</td>
                                        <td>(24) 3377-6340</td>
                                        <td>&nbsp;</td>
                                        <td>Luciana dos Santos Guerra; Diego de Almeida Serafim</td>
                                    </tr>
                                    <tr>
                                        <td>ESF Banqueta</td>
                                        <td>Rua: Estrada da Banqueta, n° 81 CEP: 23933-600</td>
                                        <td>(24) 3368-5458</td>
                                        <td>&nbsp;</td>
                                        <td>Flavia Leone da Silva</td>
                                    </tr>
                                    <tr>
                                        <td>ESF Vale da Banqueta</td>
                                        <td>Rua: Estrada da Banqueta, n° 2150. Condomínio CEP: 23933-600</td>
                                        <td>(24) 3377-6206</td>
                                        <td>&nbsp;</td>
                                        <td>Miriene Borges Pinto</td>
                                    </tr>
                                    <tr>
                                        <td>ESF Encruzo da Enseada</td>
                                        <td>Rua: Ivair Garcia de Oliveira, n° 06 CEP: 23931-400</td>
                                        <td>(24) 3377-5102</td>
                                        <td>&nbsp;</td>
                                        <td>Patricia Correa da Silva</td>
                                    </tr>
                                    <tr>
                                        <td>ESF Belem I e II</td>
                                        <td>Avenida São Joaquim, n° 345 CEP: 23935-050</td>
                                        <td>(24) 3377-7760</td>
                                        <td>&nbsp;</td>
                                        <td>Eduardo Ramos da Silva Leão; Jayce de Carvalho Pezzana</td>
                                    </tr>
                                    <tr>
                                        <td>ESF Pontal</td>
                                        <td>Alameda dos Sabias, s/n CEP: 23942-345</td>
                                        <td>sem telefone</td>
                                        <td>&nbsp;</td>
                                        <td>Ligia Carvalho Botelho</td>
                                    </tr>
                                    <tr>
                                        <td>ESF Gamboa</td>
                                        <td>Rua: Costa do Sol, sn - Gamboa CEP: 23936-200</td>
                                        <td>(24) 3368-4492</td>
                                        <td>&nbsp;</td>
                                        <td>Jacy Florêncio Pinto</td>
                                    </tr>
                                    <tr>
                                        <td>ESF Nova Angra I</td>
                                        <td>Rua: Silvia Jardim, n°309 CEP: 23933-235</td>
                                        <td>(24) 3369-6557</td>
                                        <td>&nbsp;</td>
                                        <td>Victória Agna Alves Nascimento da Silva</td>
                                    </tr>
                                    <tr>
                                        <td>ESF Nova Angra II</td>
                                        <td>Rua: Vinicius de Morais, n° 309 CEP: 23933-090</td>
                                        <td>(24) 3365-1975</td>
                                        <td>&nbsp;</td>
                                        <td>Aline Menezes Carreira</td>
                                    </tr>
                                    <tr>
                                        <td>ESF Serra D'água</td>
                                        <td>Rodovia Saturnino Braga, s/n CEP: 23938-000</td>
                                        <td>(24) 3367-7316</td>
                                        <td>&nbsp;</td>
                                        <td>Kelly Cristina Ribeiro dos Santos</td>
                                    </tr>
                                    <tr>
                                        <td>ESF Japuíba I</td>
                                        <td>Rua Estrada Angra Getulandia s/n° CEP: 23934-005</td>
                                        <td>(24)3377-5028</td>
                                        <td>&nbsp;</td>
                                        <td>Maria Aparecida Carrara</td>
                                    </tr>
                                    <tr>
                                        <td>ESF Japuíba II e III</td>
                                        <td>Rua Cabo Frio, n° 193, Japuíba CEP: 23934-585</td>
                                        <td>(24) 3377-1280</td>
                                        <td>&nbsp;</td>
                                        <td>Maria Aparecida de Almeida Assis; Ligia carvalho Botelho</td>
                                    </tr>
                                    <tr>
                                        <td>ESF Camorim Grande Módulo I e II</td>
                                        <td>Rua Irmã Irene, s/n, Camorim Grande CEP: 24912-425</td>
                                        <td>(24) 3377-9298</td>
                                        <td>&nbsp;</td>
                                        <td>Ana Beatriz Santos; Karine Souza D Azevedo</td>
                                    </tr>
                                    <tr>
                                        <td>ESF Camorim Pequeno</td>
                                        <td>Rua Chico Mendes, sem número. CEP: 23912-070</td>
                                        <td>(24) 3368-8413</td>
                                        <td>&nbsp;</td>
                                        <td>Débora Teixeira A. De Azevedo</td>
                                    </tr>
                                    <tr>
                                        <td>ESF Jacuecanga Módulo I, II e III e IV</td>
                                        <td>Avenida Conde Maurício Nassau, 400 CEP: 23914-460</td>
                                        <td>(24) 3361-1195</td>
                                        <td>&nbsp;</td>
                                        <td>Carla Freitas Maio; Caroline Alessandra Terra; Fernanda Mesquita de Oliveira; Geovane Cesar dos Santos</td>
                                    </tr>
                                    <tr>
                                        <td>ESF Portogalo</td>
                                        <td>Gleba G, s/n - Condomínio Portogalo - Rodovia Rio Santo-KM 60 CEP: 23917-010</td>
                                        <td>(24) 3377-8792</td>
                                        <td>&nbsp;</td>
                                        <td>Gracilene Maria Pereira da Silva</td>
                                    </tr>
                                    <tr>
                                        <td>ESF Caputera</td>
                                        <td>Estrada da Caputera, n° 16 CEP: 23915-700</td>
                                        <td>(24) 3361-2341</td>
                                        <td>&nbsp;</td>
                                        <td>Georgia Novaes da Silva Lucas</td>
                                    </tr>
                                    <tr>
                                        <td>ESF Cantagalo</td>
                                        <td>Estrada do Cantagalo, n° 01</td>
                                        <td>(24) 3368-2341</td>
                                        <td>&nbsp;</td>
                                        <td>Victor da Silva Lucas</td>
                                    </tr>
                                    <tr>
                                        <td>ESF Petrobrás</td>
                                        <td>Rua EAP, n°01, Vila da Petrobrás CEP: 23915-010</td>
                                        <td>(24) 3361-3336</td>
                                        <td>&nbsp;</td>
                                        <td>Gracilene Maria Pereira da Silva</td>
                                    </tr>
                                    <tr>
                                        <td>ESF Monsuaba I,II</td>
                                        <td>Rua Santinho Marques, n°186 CEP: 23916-060</td>
                                        <td>(24) 3366-1015</td>
                                        <td>&nbsp;</td>
                                        <td>Carla Ferreira Parente</td>
                                    </tr>
                                    <tr>
                                        <td>ESF Bracuy I, II, III, IV</td>
                                        <td>Estrada Rio Santos, KM 115, s/n CEP: 23943-000</td>
                                        <td>(24) 3363-1841</td>
                                        <td>&nbsp;</td>
                                        <td>Maria José Ribeiro</td>
                                    </tr>
                                    <tr>
                                        <td>ESF Aldeia Indígena</td>
                                        <td>Rua Barão de Mambucaba, n° 36 - Bracuhy CEP: 23943-000</td>
                                        <td>(24) 3362-1777</td>
                                        <td>&nbsp;</td>
                                        <td>Cleber dos Santos</td>
                                    </tr>
                                    <tr>
                                        <td>Clínica da Família - Frade</td>
                                        <td>Rua Boa Esperança, s/n - FradeCEP: 23946-130</td>
                                        <td>(24) 3369-3394</td>
                                        <td>&nbsp;</td>
                                        <td>Andresa Fernandes de Oliveira</td>
                                    </tr>
                                    <tr>
                                        <td>ESF Frade Constância</td>
                                        <td>Rua da Constância, n° 278 - Frade CEP: 23946-480</td>
                                        <td>(24) 3369-3962</td>
                                        <td>&nbsp;</td>
                                        <td>Joelma Peixoto</td>
                                    </tr>
                                    <tr>
                                        <td>ESF Vila Histórica</td>
                                        <td>Rua das Flores, n° 420, Vila Histórica de Mambucaba CEP: 23951-310</td>
                                        <td>(24) 3362-2312</td>
                                        <td>&nbsp;</td>
                                        <td>Karine Costa Dividorio Faria</td>
                                    </tr>
                                    <tr>
                                        <td>ESF Boa Vista</td>
                                        <td>Rua Julio de Carvalho N° 25 Fds CEP 23952030</td>
                                        <td>(24)3366.6273</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>Clinica da Família Parque Mambucaba Cirene de Almeida França</td>
                                        <td>Avenida Francisco Magalhães de Castro, n° 1083- Parque MambucabaCEP: 23954-210</td>
                                        <td>(24) 3362-5891</td>
                                        <td>&nbsp;</td>
                                        <td>Murilo Reder Nogueira</td>
                                    </tr>
                                    <tr>
                                        <td>ESF Abraão</td>
                                        <td>Rua Getulio Vargas, sn,. Abraão CEP: 23968-970</td>
                                        <td>(24) 3361-5523</td>
                                        <td>&nbsp;</td>
                                        <td>Juliana Fernandes Leone</td>
                                    </tr>
                                    <tr>
                                        <td>ESF Marítima</td>
                                        <td>Praia do Matariz CEP: 23968-970</td>
                                        <td>(24) 99995-8326</td>
                                        <td>&nbsp;</td>
                                        <td>Marryelle Almeida Pessoa</td>
                                    </tr>
                                    <tr>
                                        <td>ESF Enseada das Estrelas</td>
                                        <td>Praia do Saco do Céu</td>
                                        <td>(24)99827-6287</td>
                                        <td>&nbsp;</td>
                                        <td>Rosangela Marques de Carvalho</td>
                                    </tr>
                                    <tr>
                                        <td>ESF Araçatiba</td>
                                        <td>Praia Grande de Araçatiba CEP: 23968-970</td>
                                        <td>(24)99827-6287</td>
                                        <td>&nbsp;</td>
                                        <td>Rosangela Marques de Carvalho</td>
                                    </tr>
                                    <tr>
                                        <td>ESF Provetá</td>
                                        <td>Praia de Provetá CEP: 23968-970</td>
                                        <td>(24) 3374-1999</td>
                                        <td>&nbsp;</td>
                                        <td>Raika da Silva Monção</td>
                                    </tr>
                                    <tr>
                                        <td>Sala Lilás</td>
                                        <td>Rua Japoranga, n° 1970-2° andar, Sala 203 -Japuiba</td>
                                        <td>(24) 3365-7824</td>
                                        <td>&nbsp;</td>
                                        <td>Vanessa Fonseca Pires</td>
                                    </tr>
                                    <tr>
                                        <td>NASF I</td>
                                        <td>Bica da Carioca Rua José Riegert, n° 40 -Centro CEP 23900000</td>
                                        <td>Não possui</td>
                                        <td>&nbsp;</td>
                                        <td>Flávia da Silveira Ferreira</td>
                                    </tr>
                                    <tr>
                                        <td>NASF II</td>
                                        <td>Rua Japoranga, n° 1970-2° andar, Sala 203 -Japuiba</td>
                                        <td>(24)99266-5675</td>
                                        <td>&nbsp;</td>
                                        <td>Flávia da Silveira Ferreira</td>
                                    </tr>
                                    <tr>
                                        <td>NASF III</td>
                                        <td>Rua Dois Vilage Imperial, n° 153-Parque Mambucaba</td>
                                        <td>(24)3362-5864</td>
                                        <td>&nbsp;</td>
                                        <td>Flávia da Silveira Ferreira</td>
                                    </tr>
                                    <tr>
                                        <td>NASF IV</td>
                                        <td>Rua Boa Esperança s/n° -Frade</td>
                                        <td>(24)3377-8511 ramal 1937</td>
                                        <td>&nbsp;</td>
                                        <td>Flávia da Silveira Ferreira</td>
                                    </tr>
                                    <tr>
                                        <td>SPA Parque Mambucaba</td>
                                        <td>Travessa Ivan Nunes, S/N. CEP: 23954-060</td>
                                        <td>3362-3513<br>3362-3881</td>
                                        <td>Unidade 24 hrs</td>
                                        <td>Jussara</td>
                                    </tr>
                                    <tr>
                                        <td>SPA Frade</td>
                                        <td>Rua Boa Esperança, S/N. CEP:23946-130</td>
                                        <td>3369-3394</td>
                                        <td>Unidade 24 hrs</td>
                                        <td>Celso</td>
                                    </tr>
                                    <tr>
                                        <td>SPA Jacuecanga</td>
                                        <td>Rua Doce Angra, S/N. CEP:23914-340</td>
                                        <td>3361-1197</td>
                                        <td>Unidade 24 hrs</td>
                                        <td>Marceli</td>
                                    </tr>
                                    <tr>
                                        <td>SSA.ASGPA.AB</td>
                                        <td>Rua Getúlio Vargas, S/N</td>
                                        <td>3361-5523</td>
                                        <td>Unidade 24 hrs</td>
                                        <td>Deyrdre</td>
                                    </tr>
                                    <tr>
                                        <td>SPA Centro</td>
                                        <td>Avenida Júlio Maria, 100. CEP: 23900-502</td>
                                        <td>3369-6138</td>
                                        <td>Unidade 24 hrs</td>
                                        <td>Henrique</td>
                                    </tr>
                                    <tr>
                                        <td>CEM Japuíba</td>
                                        <td>Rua Prefeito João Gregório Galindo, S/N. CEP: 23934-695</td>
                                        <td>3377-8850<br>3366-7043</td>
                                        <td>Seg à sex, de 07h às 18h/ sáb, de 08h às 17h</td>
                                        <td>Tatiane</td>
                                    </tr>
                                    <tr>
                                        <td>CEM Centro</td>
                                        <td>Praça General Osório, 36. CEP: 23900-600</td>
                                        <td>3368-7262<br>3368-7111</td>
                                        <td>Seg à sex, de 07h às 18h/ sáb, de 08h às 17h</td>
                                        <td>Tatiane</td>
                                    </tr>
                                    <tr>
                                        <td>CEM Parque Mambucaba</td>
                                        <td>Travessa Ivan Nunes, S/N. CEP: 23954-060</td>
                                        <td>3362-3513<br>3362-3881</td>
                                        <td>Seg à sex, de 07h às 18h/ sáb, de 08h às 17h</td>
                                        <td>Tatiane</td>
                                    </tr>
                                    <tr>
                                        <td>CEM Jacuecanga</td>
                                        <td>Praça Doce Angra, S/N. CEP: 23614-340</td>
                                        <td>3366-7043</td>
                                        <td>Seg à sex, de 07h às 18h/ sáb, de 08h às 17h</td>
                                        <td>Tatiane</td>
                                    </tr>
                                    <tr>
                                        <td>Hospital Geral da Japuíba</td>
                                        <td>Rua Japoranga, 1.700. Japuíba. CEP: 23834-050</td>
                                        <td>3369-6133<br>3368-5875</td>
                                        <td>Seg à sex, de 08h às 16:30h</td>
                                        <td>Nathália</td>
                                    </tr>
                                    <tr>
                                        <td>SAMU</td>
                                        <td>Rua Francelino Alves de Lima, S/N. Japuíba</td>
                                        <td>ADM<br>3377-4605 / 3367-1090<br>TIPO A<br>3368-7082</td>
                                        <td>Unidade 24 hrs</td>
                                        <td>Kátia</td>
                                    </tr>
                                    <tr>
                                        <td>COVSA</td>
                                        <td>Rua Almirante Machado Portela, 85, Balneário. CEP 23906-190</td>
                                        <td>33772742<br>33779801</td>
                                        <td>Seg à sex, de 08:30h às 17h</td>
                                        <td>Ana Paula</td>
                                    </tr>
                                    <tr>
                                        <td>CVEPI</td>
                                        <td>Rua Almirante Machado Portela, 85, Balneário. CEP 23906-190</td>
                                        <td>33777849</td>
                                        <td>Seg à sex, de 08:30h às 17h</td>
                                        <td>Jéssica</td>
                                    </tr>
                                    <tr>
                                        <td>IMUNIZAÇÃO</td>
                                        <td>UPA - Rua Francelino Alves de Lima, S/N. Japuíba</td>
                                        <td>33776741</td>
                                        <td>Seg à sex, de 08:30h às 17h</td>
                                        <td>Jéssica</td>
                                    </tr>
                                    <tr>
                                        <td>Programa Melhor em Casa</td>
                                        <td>Rua Almirante Machado Portela, 85, Balneário. CEP 23906-190</td>
                                        <td>33653917</td>
                                        <td>Seg à sex, de 08:30h às 17h</td>
                                        <td>Carol</td>
                                    </tr>
                                    <tr>
                                        <td>UPA Infantil</td>
                                        <td>Rua Francelino Alves de Lima, S/N. Japuíba</td>
                                        <td>3367-1667<br>3367-6000</td>
                                        <td>Unidade 24 hrs</td>
                                        <td>Vanessa</td>
                                    </tr>
                                    <tr>
                                        <td>CEREST BIG</td>
                                        <td>Rua Almirante Machado Portela, 85, Balneário. CEP 23906-190</td>
                                        <td>3377-8391</td>
                                        <td>Seg à sex, de 08:30h às 17h</td>
                                        <td>Maria José</td>
                                    </tr>
                                    <tr>
                                        <td>Centro de Reabilitação</td>
                                        <td>Rua Doutor Orlando Gonçalves, 215. Parque das Palmeiras. CEP: 23906-445</td>
                                        <td>3365-1396</td>
                                        <td>Seg à sex, de 08:30h às 17h</td>
                                        <td>Ana Karina</td>
                                    </tr>
                                    <tr>
                                        <td>Vigilância Ambiental</td>
                                        <td>Rua Almirante Machado Portela, 85 Sala 101, Balneário. CEP 23906-190</td>
                                        <td>3377-1594</td>
                                        <td>Seg à sex, de 08:30h às 17h</td>
                                        <td>Romário</td>
                                    </tr>
                                    <tr>
                                        <td>Coordenação de Centro Odontológico</td>
                                        <td>Rua Almirante Machado Portela, 85 Sala 204, Balneário. CEP 23906-190</td>
                                        <td>3377-2502</td>
                                        <td>Seg à sex, de 08:30h às 17h</td>
                                        <td>Elzi</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </article>
                </section>
            </div>
        </div>
    </div>
</main>
@endsection