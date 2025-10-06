<?php

namespace App\Http\Controllers;

use App\Models\DividaAtiva\DividaAtivaRegistro;
use App\Models\DividaAtiva\DividaAtiva;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PortalController extends Controller {

    public function dividaAtiva(Request $request) {
        
        $paginate = 20;

        if ($request->filled('q')) {
            $request->validate([
                'q' => 'nullable|string|max:255',
            ]);

            $q = trim($request->q);

            $registros = DividaAtivaRegistro::select('id')
                    ->where(function ($query) use ($q) {
                        $query->where('nome', 'like', "%{$q}%")
                        ->orWhere('numImovel', 'like', "%{$q}%")
                        ->orWhere('cpf', 'like', "%" . $this->clearCpfCnpj($q) . "%")
                        ->orWhere('cnpj', 'like', "%" . $this->clearCpfCnpj($q) . "%")
                        ->orWhere('dividaValorTotal', 'like', "%" . $this->__preparaValorReal($q) . "%")
                        ->orWhere('numInscricao', 'like', "%{$q}%");
                    })
                    ->pluck('id')
                    ->toArray();

            $dividaAtiva = DividaAtiva::whereIn('divida_ativa_registro_id', $registros)
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
}
