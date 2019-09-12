<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Operacao extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'operacaos';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['piquete_id', 'servico_id', 'insumo_id', 'data', 'unidade', 'quantidade', 'valor_unitario'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function piquete()
    {
        return $this->belongsTo(Piquete::class);
    }

}
