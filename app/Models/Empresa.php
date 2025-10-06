<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Str;
use DateTimeInterface;

class Empresa extends Model {

    use HasApiTokens,
        HasFactory,
        Notifiable;

    protected $connection = 'mysql';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $table = 'empresas';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $fillable = [
        'id',
        'created_at',
        'updated_at',
        'razaoSocial',
        'nomeFantasia',
        'numeroInscricaoMunicipal',
        'cnpj',
        'anoAbertura',
        'principalAtividade',
        'owner_id',
        'endereco_id',
        'responsavel_id',
        'preposto_id',
        'telefone',
        'celular',
        'email',
        'site',
        'contratoSocial',
        'cartaoCNPJ',
        'registroJuntaComercial',
        'alvaraDeFuncionamento',
        'inscricaoEstadual',
        'inscricaoMunicipal',
        'status',
    ];

    public function user() {
        return $this->belongsTo(User::class, 'owner_id', 'id');
    }

    public function responsavel() {
        return $this->belongsTo(User::class, 'responsavel_id', 'id');
    }

    public function preposto() {
        return $this->belongsTo(User::class, 'preposto_id', 'id');
    }

    public function endereco() {
        return $this->belongsTo(Endereco::class, 'endereco_id', 'id');
    }

    public static function boot() {
        parent::boot();
        static::creating(function ($model) {
            $model->id = Str::uuid();
        });
    }

    public function getCnpjAttribute($value) {
        if (strlen($value) === 14) {
            return substr($value, 0, 2) . '.' .
                    substr($value, 2, 3) . '.' .
                    substr($value, 5, 3) . '/' .
                    substr($value, 8, 4) . '-' .
                    substr($value, 12, 2);
        }

        return $value;
    }

    public function setCnpjAttribute($value) {
        $this->attributes['cnpj'] = preg_replace('/\D/', '', $value);
    }

    protected function serializeDate(DateTimeInterface $date) {
        return $date->format('Y-m-d H:i:s');
    }
}
