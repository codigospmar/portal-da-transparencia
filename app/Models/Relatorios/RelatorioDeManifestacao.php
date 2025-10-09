<?php

namespace App\Models\Relatorios;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Str;
use DateTimeInterface;


class RelatorioDeManifestacao extends Model
{
    use HasApiTokens,
        HasFactory,
        Notifiable;

    protected $connection = 'mysql';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $table = 'relatorio_de_manifestacoes';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $fillable = [
        'id',
        'created_at',
        'updated_at',
        'situacao',
        'nup',
        'dataDeCadastro',
        'prazoDeAtendimento',
        'orgao',
        'anexoManifestacao',
        'situacaoResposta',
        'dataResposta',
        'especificacao',
        'responsavelResposta',
        'destinatario',
        'prazoRecurso',
        'anexoResposta',
        'situacaoRecurso',
        'pessoa',
        'escolaridade',
        'profissao',
        'genero',
        'municipio',
        'estado',
        'status',
    ];

    public static function boot() {
        parent::boot();
        static::creating(function ($model) {
            $model->id = Str::uuid();
        });
    }

    protected function serializeDate(DateTimeInterface $date) {
        return $date->format('Y-m-d H:i:s');
    }
}
