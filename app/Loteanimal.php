<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Loteanimal extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'loteanimals';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fazenda_id', 'identificacao', 'procedencia', 'data_entrada', 'pai'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function fazenda()
    {
        return $this->belongsTo(Fazenda::class);
    }
    public function animais()
    {
        return $this->hasMany(Animal::class);
    }

}
