<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCercadadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('cercadados', function(Blueprint $table) {
                $table->increments('id');
                $table->integer('piquete_id');
$table->integer('sensor_id');
$table->date('data');
$table->string('hora');
$table->string('voltagem');
$table->string('quebrada');

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
        Schema::drop('cercadados');
    }

}
