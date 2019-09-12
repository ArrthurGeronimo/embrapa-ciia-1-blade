<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTalhaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('talhaos', function(Blueprint $table) {
                $table->increments('id');
                $table->integer('fazenda_id');
$table->string('nome');
$table->string('area');
$table->integer('quantidade_piquetes');
$table->string('capim');

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
        Schema::drop('talhaos');
    }

}
