<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Piquete extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'piquetes';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['talhao_id', 'area', 'capim'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function talhao()
    {
        return $this->belongsTo(Talhao::class);
    }
    public function amostraspasto()
    {
        return $this->hasMany(AmostraPasto::class);
    }
    public function amostrassolo()
    {
        return $this->hasMany(Amostrasolo::class);
    }
    public function pragas()
    {
        return $this->hasMany(Praga::class);
    }
    public function plantioscultura()
    {
        return $this->hasMany(Plantiocultura::class);
    }
    public function operacoes()
    {
        return $this->hasMany(Operacao::class);
    }
    public function experimentos()
    {
        return $this->hasMany(Experimento::class);
    }
}
