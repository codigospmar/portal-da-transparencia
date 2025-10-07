<?php

namespace App\Models\DividaAtiva;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Str;
use DateTimeInterface;

class DividaAtivaRegistro extends Model {

    use HasApiTokens,
        HasFactory,
        Notifiable;

    protected $connection = 'mysql_divida_ativa';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $table = 'registros';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $appends = [
        'cpf_anonimizado',
        'cnpj_anonimizado',
        'nome_anonimizado',
    ];
    protected $fillable = [
        'id',
        'created_at',
        'updated_at',
        'owner_id',
        'numInscricao',
        'numImovel',
        'cpf',
        'cnpj',
        'nome',
        'origemDivida',
        'exercicio',
        'dividaData',
        'numCertidao',
        'dividaStatus',
        'dividaParcelado',
        'dividaProtestado',
        'dividaAjuizado',
        'isPJ',
        'dividaValorTotal',
        'informacoes',
        'status',
    ];

    public function dividas() {
        return $this->hasMany(DividaAtiva::class, 'divida_ativa_registro_id', 'id');
    }

    public function getDividaValorTotalAttribute($value) {
        if ($value === null) {
            return null;
        }
        return 'R$ ' . number_format($value, 2, ',', '.');
    }

    public static function boot() {
        parent::boot();
        static::creating(function ($model) {
            $model->id = Str::uuid();
        });
    }

    protected function serializeDate(DateTimeInterface $date) {
        return $date->format('Y-m-d H:i:s');
    }

    public function getCpfAttribute($value) {
        if (!empty($value) && strlen($value) === 11) {
            return substr($value, 0, 3) . '.' .
                    substr($value, 3, 3) . '.' .
                    substr($value, 6, 3) . '-' .
                    substr($value, 9, 2);
        }

        return $value;
    }

    public function setCpfAttribute($value) {
        $this->attributes['cpf'] = $value ? preg_replace('/\D/', '', $value) : null;
    }

    public function getCnpjAttribute($value) {
        if (!empty($value) && strlen($value) === 14) {
            return substr($value, 0, 2) . '.' .
                    substr($value, 2, 3) . '.' .
                    substr($value, 5, 3) . '/' .
                    substr($value, 8, 4) . '-' .
                    substr($value, 12, 2);
        }

        return $value;
    }

    public function setCnpjAttribute($value) {
        $this->attributes['cnpj'] = $value ? preg_replace('/\D/', '', $value) : null;
    }

    public function getCpfAnonimizadoAttribute() {
        $cpf = $this->attributes['cpf'] ?? null;

        if (!$cpf || strlen($cpf) !== 11) {
            return $cpf;
        }

        $iniciais = substr($cpf, 0, 3);
        $meioMascarado = str_repeat('*', 5);
        $ultimos = substr($cpf, 9, 2);

        return $iniciais . '.' . $meioMascarado . '-' . $ultimos;
    }

    public function getCnpjAnonimizadoAttribute() {
        $cnpj = $this->attributes['cnpj'] ?? null; 

        if (!$cnpj || strlen($cnpj) !== 14) {
            return $cnpj;
        }

        $iniciais = substr($cnpj, 0, 2);
        $mascara = str_repeat('*', 6);
        $aposBarra = substr($cnpj, 8); 
        
        return $iniciais . '.' . $mascara . '/' . $aposBarra;
    }

    public function getNomeAnonimizadoAttribute() {
        $nome = $this->attributes['nome'] ?? null;

        if (!$nome) {
            return null;
        }

        // Exemplo: "Maria da Silva" → "M**** ** S****"
        $partes = explode(' ', $nome);
        $anonimizadas = array_map(function ($parte) {
            if (mb_strlen($parte) <= 2) {
                return $parte; // mantém preposições curtas (de, da, do, etc.)
            }
            return mb_substr($parte, 0, 1) . str_repeat('*', mb_strlen($parte) - 1);
        }, $partes);

        return implode(' ', $anonimizadas);
    }
}
