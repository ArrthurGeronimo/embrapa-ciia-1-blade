<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Animal extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'animals';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['loteanimal_id', 'talhao_id', 'numero_fazenda', 'pai', 'mae', 'nascimento', 'data_saida'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function loteanimal()
    {
        return $this->belongsTo(Loteanimal::class);
    }
    public function manejos()
    {
        return $this->hasMany(Manejoanimal::class);
    }
    public function animaldados()
    {
        return $this->hasMany(Animaldado::class);
    }

}
