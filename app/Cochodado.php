<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cochodado extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cochodados';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['piquete_id', 'sensor_id', 'data', 'hora', 'nivel', 'limpeza'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

}
