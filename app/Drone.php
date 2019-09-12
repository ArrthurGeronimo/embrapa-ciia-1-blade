<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Drone extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'drones';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['piquete_id', 'sensor_id', 'data', 'hora', 'tipo_imagem', 'nome_mosaico'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

}
