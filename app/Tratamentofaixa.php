<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tratamentofaixa extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tratamentofaixas';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['faixa_id', 'descricao', 'sigla', 'posicao_linha', 'posicao_coluna'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function faixa()
    {
        return $this->belongsTo(Faixa::class);
    }

}
