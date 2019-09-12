<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Estacao extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'estacaos';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['talhao_id', 'codigo', 'nome', 'responsavel', 'coordenada', 'altitude', 'data_primeira_coleta'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

        public function talhao()
    {
        return $this->belongsTo(Talhao::class);
    }
    public function sensores()
    {
        return $this->hasMany(Sensor::class);
    }
}
