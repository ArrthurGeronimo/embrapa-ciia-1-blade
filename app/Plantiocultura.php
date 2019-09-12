<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Plantiocultura extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'plantioculturas';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['piquete_id', 'data', 'peso_parcela', 'peso_amostra', 'quantidade_espigas', 'identificacao', 'area'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function piquete()
    {
        return $this->belongsTo(Piquete::class);
    }

}
