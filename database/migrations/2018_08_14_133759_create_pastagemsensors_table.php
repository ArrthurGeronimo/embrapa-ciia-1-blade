<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePastagemsensorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('pastagemsensors', function(Blueprint $table) {
                $table->increments('id');
                $table->integer('piquete_id');
$table->integer('sensor_id');
$table->date('data');
$table->string('hora');
$table->string('responsavel');
$table->string('coordenadas');
$table->string('altura');

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
        Schema::drop('pastagemsensors');
    }

}
