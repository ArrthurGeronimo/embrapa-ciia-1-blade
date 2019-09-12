<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSensorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('sensors', function(Blueprint $table) {
                $table->increments('id');
                $table->string('piquete_id');
$table->string('estacao_id');
$table->string('nome');
$table->string('marca');
$table->string('modelo');
$table->string('data_fabricacao');
$table->string('data_instalacao');
$table->string('unidade');

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
        Schema::drop('sensors');
    }

}
