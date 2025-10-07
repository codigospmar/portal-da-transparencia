<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Str;
use DateTimeInterface;

class Endereco extends Model {

    use HasApiTokens,
        HasFactory,
        Notifiable;

    public $incrementing = false;
    protected $connection = 'mysql';
    protected $keyType = 'string';
    protected $table = 'enderecos';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $fillable = [
        'user_id',
        'owner_id',
        'domicilio',
        'cep',
        'logradouro',
        'complemento',
        'numero',
        'bairro',
        'cidade',
        'uf',
        'latitude',
        'longitude',
        'comprovante',
        'status',
        'map',
        'fixed',
    ];
    protected $casts = [
        'latitude' => 'decimal:8',
        'longitude' => 'decimal:8',
    ];

    public function getAddressAttribute() {
        $endereco = "<address>{$this->logradouro}";
        if ($this->numero !== null) {
            $endereco .= ", {$this->numero}";
        }
        $endereco .= "<br>CEP: {$this->cep}<br>";
        $endereco .= "{$this->bairro} - {$this->cidade}/{$this->uf}";

        if ($this->complemento !== null || $this->complemento !== "") {
            $endereco .= "<br>{$this->complemento}<br>";
        }
        $endereco .= "</address>";

        return $endereco;
    }

    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
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
