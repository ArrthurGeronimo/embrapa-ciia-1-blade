<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Clima extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'climas';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['estacao_id', 'sensor_id', 'data', 'hora', 'precipitacao', 'temperatura', 'umidade_ar', 'vento', 'radiacao', 'pressao', 'insolacao'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

}
