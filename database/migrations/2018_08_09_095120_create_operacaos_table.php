<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOperacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('operacaos', function(Blueprint $table) {
                $table->increments('id');
                $table->integer('piquete_id');
$table->integer('servico_id');
$table->integer('insumo_id');
$table->string('data');
$table->string('unidade');
$table->string('quantidade');
$table->string('valor_unitario');

                $table->timestamps();
                $table->softDeletes();
            });
            
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('operacaos');
    }

}
