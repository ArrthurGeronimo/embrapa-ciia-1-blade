<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Animalsensor extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'animalsensors';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['animal_id', 'sensor_id', 'data', 'hora', 'temperatural', 'localizacao'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

}
