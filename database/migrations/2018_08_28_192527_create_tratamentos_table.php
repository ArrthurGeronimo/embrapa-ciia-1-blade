<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTratamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('tratamentos', function(Blueprint $table) {
                $table->increments('id');
                $table->string('descricao');
                $table->string('sigla');
                $table->string('posicao_linha');
                $table->string('posicao_coluna');

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
        Schema::drop('tratamentos');
    }

}
