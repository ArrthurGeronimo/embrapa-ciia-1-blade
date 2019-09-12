<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Experimento extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'experimentos';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nome'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function faixas()
    {
        return $this->hasMany(Faixa::class);
    }

}
