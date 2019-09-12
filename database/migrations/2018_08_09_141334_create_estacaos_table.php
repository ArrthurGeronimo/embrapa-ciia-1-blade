<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEstacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('estacaos', function(Blueprint $table) {
                $table->increments('id');
                $table->string('talhao_id');
$table->string('codigo');
$table->string('nome');
$table->string('responsavel');
$table->string('coordenada');
$table->string('altitude');
$table->string('data_primeira_coleta');

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
        Schema::drop('estacaos');
    }

}
