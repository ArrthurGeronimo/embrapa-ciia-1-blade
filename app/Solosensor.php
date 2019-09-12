<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Solosensor extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'solosensors';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['piquete_id', 'sensor_id', 'data', 'hora', 'responsavel', 'coordenadas', 'temperatura', 'umidade'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

}
