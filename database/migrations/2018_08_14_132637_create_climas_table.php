<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClimasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('climas', function(Blueprint $table) {
                $table->increments('id');
                $table->integer('estacao_id');
$table->integer('sensor_id');
$table->date('data');
$table->string('hora');
$table->string('precipitacao');
$table->string('temperatura');
$table->string('umidade_ar');
$table->string('vento');
$table->string('radiacao');
$table->string('pressao');
$table->string('insolacao');

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
        Schema::drop('climas');
    }

}
