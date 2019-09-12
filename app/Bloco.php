<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bloco extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'blocos';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['experimento_id', 'quantidade_blocos', 'quantidade_tratamentos'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function tratamentosbloco()
    {
        return $this->hasMany(Tratamentobloco::class);
    }

}
