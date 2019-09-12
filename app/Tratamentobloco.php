<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tratamentobloco extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tratamentoblocos';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['bloco_id', 'descricao', 'sigla', 'posicao_linha', 'posicao_coluna'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function bloco()
    {
        return $this->belongsTo(Bloco::class);
    }

}
