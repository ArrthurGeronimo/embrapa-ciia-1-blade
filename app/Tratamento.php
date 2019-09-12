<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tratamento extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tratamentos';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['descricao', 'sigla', 'posicao_linha', 'posicao_coluna'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function faixa()
    {
        return $this->belongsToMany(Faixa::class);
    }

}
