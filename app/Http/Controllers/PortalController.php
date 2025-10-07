<?php

namespace App\Http\Controllers;

use App\Models\DividaAtiva\DividaAtivaRegistro;
use App\Models\DividaAtiva\DividaAtiva;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Unidade;
use App\Models\Endereco;

class PortalController extends Controller {

    public function dividaAtiva(Request $request) {

        $paginate = 20;

        if ($request->filled('q')) {
            $request->validate([
                'q' => 'nullable|string|max:255',
            ]);
            
            $q = trim($request->q);
            $valorReal = $this->__preparaValorReal($q);
            $qLimpo = $this->clearCpfCnpj($q);

            $registros = DividaAtivaRegistro::select("id")
                    ->where(function ($query) use ($q, $valorReal, $qLimpo) {
                        $query->where('numInscricao', 'like', "%{$q}%")
                        ->orWhere('numImovel', 'like', "%{$q}%")
                        ->orWhere('cpf', 'like', "%{$qLimpo}%")
                        ->orWhere('cnpj', 'like', "%{$qLimpo}%")
                        ->orWhere('dividaValorTotal', 'like', "%{$valorReal}%")
                        ->orWhere('nome', 'like', "%{$q}%");
                    })
                    ->pluck('id')
                    ->toArray();


            $dividaAtiva = DividaAtiva::where(function ($query) use ($registros) {
                        $query->whereIn('divida_ativa_registro_id', $registros);
                    })
                    ->orderByDesc('created_at')
                    ->paginate($paginate);
        } else {
            $dividaAtiva = DividaAtiva::orderByDesc('created_at')
                    ->paginate($paginate);
        }

        return view('pages.divida-ativa', [
            'dividas' => $dividaAtiva
        ]);
    }

    public function unidadesSaude(Request $request) {

        $paginate = 20;
        if (isset($request->q)) {
            $request->validate([
                'q' => 'nullable|string|max:255',
            ]);
            $unidadesSaude = Unidade::select('unidades_saude.*')
                    ->join('enderecos', 'enderecos.owner_id', '=', 'unidades_saude.id')
                    ->where(function ($query) use ($request) {
                        $q = trim($request->q);
                        $query->where('unidades_saude.nome', 'like', "%{$q}%")
                        ->orWhere('unidades_saude.telefone', 'like', "%{$q}%")
                        ->orWhere('unidades_saude.email', 'like', "%{$q}%")
                        ->orWhere('enderecos.cep', 'like', "%{$q}%")
                        ->orWhere('enderecos.logradouro', 'like', "%{$q}%")
                        ->orWhere('enderecos.complemento', 'like', "%{$q}%")
                        ->orWhere('enderecos.bairro', 'like', "%{$q}%");
                    })
                    ->orderBy('unidades_saude.nome')
                    ->orderBy('enderecos.bairro')
                    ->paginate($paginate);
        } else {
            $unidadesSaude = Unidade::select('unidades_saude.*')
                    ->join('enderecos', 'enderecos.owner_id', '=', 'unidades_saude.id')
                    ->where(function ($query) use ($request) {
                        $q = trim($request->q);
                        $query->where('unidades_saude.nome', '!=', "")
                        ->orWhere('enderecos.bairro', '!=', "");
                    })
                    ->orderBy('unidades_saude.nome')
                    ->orderBy('enderecos.bairro')
                    ->paginate($paginate);
        }

        return view("pages.unidades-de-saude", [
            "unidadesSaude" => $unidadesSaude,
        ]);
    }
}
