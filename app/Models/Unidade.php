<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Str;
use DateTimeInterface;

class Unidade extends Model {

    use HasApiTokens,
        HasFactory,
        Notifiable;

    public $incrementing = false;
    protected $connection = 'mysql';
    protected $keyType = 'string';
    protected $table = 'unidades_saude';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $fillable = [
        'id',
        'structure_id',
        'endereco_id',
        'created_at',
        'updated_at',
        'foto',
        'nome',
        'telefone',
        'email',
        'tipoUnidadeSaude',
        'informacoes',
        'status',
    ];

    public function endereco() {
        return $this->hasOne(Endereco::class, 'owner_id', 'id')
                        ->latest('created_at');
    }

    public function pertence() {
        return $this->belongsTo(Structure::class, 'structure_id');
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
}
