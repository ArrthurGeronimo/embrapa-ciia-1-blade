<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Amostrapasto extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'amostrapastos';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['data_amostra', 'altura', 'visual', 'peso_parcela', 'peso_amostra', 'ca', 'p', 'pb', 'ee', 'fb', 'mm', 'fda', 'fdn', 'ndt', 'enn', 'eb', 'piquete_id', 'area', 'identificacao'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

     public function piquete()
    {
        return $this->belongsTo(Piquete::class);
    }

}
