<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFazendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('fazendas', function(Blueprint $table) {
                $table->increments('id');
                $table->integer('user_id');
$table->string('nome');
$table->string('endereco');
$table->string('latitude');
$table->string('longitude');
$table->string('estado');
$table->string('municipio');
$table->string('responsavel');
$table->string('celular_responsavel');

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
        Schema::drop('fazendas');
    }

}
