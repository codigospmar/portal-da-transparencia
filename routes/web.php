<?php

use App\Http\Controllers\{
    PortalController,
};
use Illuminate\Support\Facades\Route;

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register web routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | contains the "web" middleware group. Now create something great!
  |
 */

Route::view("", 'index')->name("index");

Route::group(["as" => "pages."], function () {

    Route::view("renuncias-de-receitas", 'pages.renunciaDeReceita')->name("renunciaDeReceita");
    Route::view("qdd", 'pages.qdd')->name('qdd');
    Route::view("renuncias-de-receitas", 'pages.renuncias-de-receitas')->name('renuncias-de-receitas');
    Route::view("beneficiarios-desoneracoes-tributarias", 'pages.beneficiarios-desoneracoes-tributarias')->name('beneficiarios-desoneracoes-tributarias');
    Route::view("incentivos-culturais", 'pages.incentivos-culturais')->name('incentivos-culturais');
    Route::view("emendas-impositivas", 'pages.emendas-impositivas')->name('emendas-impositivas');
    Route::view("emendas-parlamentares", 'pages.emendas-parlamentares')->name('emendas-parlamentares');
    Route::view("balancos-contabeis", 'pages.balancos-contabeis')->name('balancos-contabeis');
    Route::view("plano-plurianual", 'pages.ppa')->name('ppa');
    Route::view("lei-de-diretrizes-orcamentarias", 'pages.ldo')->name('ldo');
    Route::view("lei-orcamentaria-anual", 'pages.loa')->name('loa');
    Route::view("responsabilidade-fiscal", 'pages.responsabilidade-fiscal')->name('responsabilidade-fiscal');
    Route::view("rreo", 'pages.rreo')->name('rreo');
    Route::view("rgf", 'pages.rgf')->name('rgf');
    Route::view("parecer-previo-tcerj", 'pages.parecer-previo-tcerj')->name('parecer-previo-tcerj');
    Route::view("julgamento-das-contas-do-executivo-pelo-legislativo", 'pages.julgamento-contas')->name('julgamento-contas');
    Route::view("atas-das-audiencias-publicas", 'pages.atas')->name('atas');
    Route::view("notas-fiscais", 'pages.metas-fiscais')->name('metas-fiscais');
    Route::view("leis-orcamentarias", 'pages.leis-orcamentarias')->name('leis-orcamentarias');
    Route::get("divida-ativa", [PortalController::class, "dividaAtiva"])->name('divida-ativa');
    Route::view("estrutura-organizacional", 'pages.estrutura-organizacional')->name('estrutura-organizacional');

    Route::view("relatorio-de-estoques-de-medicamentos", 'pages.estoques-de-medicamentos')->name('estoques-de-medicamentos');
    Route::get("unidades-de-saude", [PortalController::class, "unidadesSaude"])->name('unidades-de-saude');
    Route::view("oficinas-e-exposicoes-culturais", 'pages.oficinas-e-exposicoes-culturais')->name('oficinas-e-exposicoes-culturais');
    Route::view("pareceres-fundeb", 'pages.pareceres-fundeb')->name('pareceres-fundeb');
    Route::view("parecer-rag-saude", 'pages.parecer-rag-saude')->name('parecer-rag-saude');
    Route::view("plano-de-contratacao-anual", 'pages.plano-de-contratacao-anual')->name('plano-de-contratacao-anual');
    Route::view("lgpd", 'pages.lgpd')->name('lgpd');
    Route::view("tabela-de-valores-de-diarias", 'pages.tabela-de-valores-de-diarias')->name('tabela-de-valores-de-diarias');
    Route::view("concursos", 'pages.concursos')->name('concursos');

    Route::view('/ouvidoria', 'pages.ouvidoria')->name("ouvidoria");
    Route::view("ouvidoria/perguntas-frequentes", 'pages.ouvidoria-perguntas-frequentes')->name('ouvidoria-perguntas-frequentes');
    Route::view("ouvidoria/sobre", 'pages.ouvidoria-sobre')->name('ouvidoria-sobre');
    Route::get("ouvidoria/relatorio-de-manifestacoes", [PortalController::class, "relatoriosDeManifestacoes"])->name('ouvidoria-relatorio-de-manifestacoes');
    Route::view("ouvidoria/informacoes-classificadas", 'pages.ouvidoria-informacoes-classificadas')->name('ouvidoria-informacoes-classificadas');
});

