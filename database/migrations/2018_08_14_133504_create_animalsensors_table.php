<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAnimalsensorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('animalsensors', function(Blueprint $table) {
                $table->increments('id');
                $table->integer('animal_id');
$table->integer('sensor_id');
$table->date('data');
$table->string('hora');
$table->string('temperatural');
$table->string('localizacao');

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
        Schema::drop('animalsensors');
    }

}
