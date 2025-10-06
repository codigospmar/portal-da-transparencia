<?php

namespace App\Models\DividaAtiva;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Str;
use DateTimeInterface;

class DividaAtivaPlanilha extends Model {

    use HasApiTokens,
        HasFactory,
        Notifiable;

    protected $connection = 'mysql_divida_ativa';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $table = 'planilhas';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $fillable = [
        'id',
        'created_at',
        'updated_at',
        'owner_id',
        'tipo',
        'nome',
        'link',
        'importada',
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
