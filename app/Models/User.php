<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\CastracaoAnimal\Tutor;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Str;
use DateTimeInterface;

class User extends Authenticatable {

    use HasApiTokens,
        HasFactory,
        Notifiable;

    protected $connection = 'mysql';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $table = 'users';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public function pertence() {
        return $this->belongsTo(Structure::class, "structure_id");
    }

    protected $fillable = [
        'id',
        'structure_id',
        'firstName',
        'lastName',
        'cpf',
        'matriculation',
        'phoneNumber',
        'email',
        'password',
        'photo',
        'status',
        'permission',
        'papers',
        'isPasswordDefault',
        'isServidorPublico',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function getNameAttribute() {
        return "{$this->firstName} {$this->lastName}";
    }

    public static function boot() {
        parent::boot();
        static::creating(function ($model) {
            $model->id = Str::uuid();
        });
    }

    public function guia() {
        return $this->hasOne(\App\Models\TurismoNautico\Guia::class, 'owner_id', 'id');
    }

    public function fibromialgia() {
        return $this->hasOne(Fibromialgia::class, 'user_id', 'id');
    }

    public function castracao() {
        return $this->hasOne(Tutor::class, 'user_id', 'id');
    }

    public function pessoa() {
        return $this->hasOne(Pessoa::class, 'user_id');
    }

    public function laudosFibromialgia() {
        return $this->hasMany(FibromialgiaLaudo::class, 'user_id');
    }

    public function fibromialgiamensagens() {
        return $this->hasMany(FibromialgiaMensagem::class);
    }

    public function criadoPor() {
        return $this->belongsTo(Endereco::class, 'user_id', 'id');
    }

    public function endereco() {
        return $this->hasOne(Endereco::class, 'owner_id', 'id')
                        ->orderBy('created_at', 'desc');
    }

    public function enderecos() {
        return $this->hasMany(Endereco::class, 'owner_id', 'id');
    }

    public function dono() {
        return $this->belongsTo(User::class, 'owner_id', 'id');
    }

    public function enderecosComoDono() {
        return $this->hasMany(Endereco::class, 'owner_id', 'id');
    }

    public function getCpfAttribute($value) {
        if (strlen($value) === 11) {
            return substr($value, 0, 3) . '.' .
                    substr($value, 3, 3) . '.' .
                    substr($value, 6, 3) . '-' .
                    substr($value, 9, 2);
        }

        return $value;
    }

    public function setCpfAttribute($value) {
        $this->attributes['cpf'] = preg_replace('/[^0-9]/', '', $value);
    }

    protected function serializeDate(DateTimeInterface $date) {
        return $date->format('Y-m-d H:i:s');
    }
}
