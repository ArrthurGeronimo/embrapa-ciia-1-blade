<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInteiramentecasualizadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('inteiramentecasualizados', function(Blueprint $table) {
                $table->increments('id');
                $table->string('experimento_id');
$table->string('quantidade_tratamentos');
$table->string('quantidade_repeticoes');
$table->boolean('juntos');

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
        Schema::drop('inteiramentecasualizados');
    }

}
