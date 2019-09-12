<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Parcela extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'parcelas';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['bloco_id', 'nome', 'area'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function bloco()
    {
        return $this->belongsTo(Bloco::class);
    }
    public function experimentopragas()
    {
        return $this->hasMany(Experimentopraga::class);
    }
    public function experimentoplantioculturas()
    {
        return $this->hasMany(Experimentoplantiocultura::class);
    }
    public function experimentoamostrapastos()
    {
        return $this->hasMany(Experimentoamostrapasto::class);
    }
    public function experimentoamostrasolos()
    {
        return $this->hasMany(Experimentoamostrasolo::class);
    }

}
