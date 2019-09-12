<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLoteanimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('loteanimals', function(Blueprint $table) {
                $table->increments('id');
                $table->integer('fazenda_id');
$table->string('identificacao');
$table->string('procedencia');
$table->integer('data_entrada');
$table->string('pai');

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
        Schema::drop('loteanimals');
    }

}
