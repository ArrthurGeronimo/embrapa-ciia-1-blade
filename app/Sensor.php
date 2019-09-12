<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sensor extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'sensors';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['piquete_id', 'estacao_id', 'nome', 'marca', 'modelo', 'data_fabricacao', 'data_instalacao', 'unidade'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

        public function estacao()
    {
        return $this->belongsTo(Estacao::class);
    }

}
