<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Animaldado extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'animaldados';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['animal_id', 'data', 'nome_dado', 'unidade', 'peso'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function animal()
    {
        return $this->belongsTo(Animal::class);
    }

}
