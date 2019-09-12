<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Manejoanimal extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'manejoanimals';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['servicoanimal_id', 'insumoanimal_id', 'movimentacaoanimal_id', 'animal_id', 'loteanimal_id', 'data', 'unidade', 'quantidade', 'valor_unitario'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function animal()
    {
        return $this->belongsTo(Animal::class);
    }
    
}
