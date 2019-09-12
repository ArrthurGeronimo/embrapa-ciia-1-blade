<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDronesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('drones', function(Blueprint $table) {
                $table->increments('id');
                $table->integer('piquete_id');
$table->integer('sensor_id');
$table->date('data');
$table->string('hora');
$table->string('tipo_imagem');
$table->string('nome_mosaico');

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
        Schema::drop('drones');
    }

}
