<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Paidolote extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'paidolotes';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['loteanimal_id', 'nome', 'raca'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

}
