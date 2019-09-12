<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bebedourodado extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'bebedourodados';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['piquete_id', 'sensor_id', 'data', 'hora', 'nivel', 'consumo', 'limpeza'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

}
