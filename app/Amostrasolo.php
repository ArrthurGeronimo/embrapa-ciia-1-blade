<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Amostrasolo extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'amostrasolos';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['piquete_id', 'data', 'profundidade', 'ph', 'mo', 'p', 'k', 'ca', 'mg', 'hplusai', 'ai', 's', 'cu', 'fe', 'zn', 'mn', 'b' ,'identificacao'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function piquete()
    {
        return $this->belongsTo(Piquete::class);
    }

}
