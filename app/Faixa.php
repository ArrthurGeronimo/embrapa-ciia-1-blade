<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Faixa extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'faixas';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['experimento_id', 'quantidade_faixas', 'area_faixa', 'repeticoes'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function experimento()
    {
        return $this->belongsTo(Experimento::class);
    }

    public function tratamentosfaixa()
    {
        return $this->hasMany(Tratamentofaixa::class);
    }

}
