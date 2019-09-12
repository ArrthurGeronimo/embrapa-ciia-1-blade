<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Talhao extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'talhaos';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fazenda_id', 'nome', 'area', 'quantidade_piquetes', 'capim'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function fazenda()
    {
        return $this->belongsTo(Fazenda::class);
    }
    public function piquetes()
    {
        return $this->hasMany(Piquete::class);
    }
    public function estacoes()
    {
        return $this->hasMany(Estacao::class);
    }

}
