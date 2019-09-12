<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fazenda extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'fazendas';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id', 'nome', 'endereco', 'latitude', 'longitude', 'estado', 'municipio', 'responsavel', 'celular_responsavel'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function usuario()
    {
        return $this->belongsTo(User::class);
    }
    public function lotes()
    {
        return $this->hasMany(Loteanimal::class);
    }
    public function talhoes()
    {
        return $this->hasMany(Talhao::class);
    }

}
