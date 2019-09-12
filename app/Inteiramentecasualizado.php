<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Inteiramentecasualizado extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'inteiramentecasualizados';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['experimento_id', 'quantidade_tratamentos', 'quantidade_repeticoes', 'juntos'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

}
