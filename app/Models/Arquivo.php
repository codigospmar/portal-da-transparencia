<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Str;
use DateTimeInterface;

class Arquivo extends Model {

    use HasApiTokens,
        HasFactory,
        Notifiable;

    protected $connection = 'mysql';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $table = 'arquivos';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $fillable = [
        'id',
        'created_at',
        'updated_at',
        'user_id',
        'owner_id',
        'tipo',
        'nome',
        'link',
        'evento_at',
        'descricao',
        'indexado',
        'status',
    ];

    public function conselho() {
        return $this->belongsTo(Conselho::class, 'owner_id', 'id');
    }
    
    public function parque() {
        return $this->belongsTo(Parque::class, 'owner_id', 'id');
    }
    
    public function corredor() {
        return $this->belongsTo(\App\Models\VisiteAngra\Corredor::class, 'owner_id', 'id');
    }
    
    public function ponto() {
        return $this->belongsTo(\App\Models\VisiteAngra\Ponto::class, 'owner_id', 'id');
    }
    
    public function atrativo() {
        return $this->belongsTo(\App\Models\VisiteAngra\Atrativo::class, 'owner_id', 'id');
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
