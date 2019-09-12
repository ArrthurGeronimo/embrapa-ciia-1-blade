<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFaixasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('faixas', function(Blueprint $table) {
                $table->increments('id');
                $table->string('experimento_id');
$table->string('quantidade_faixas');
$table->string('area_faixa');
$table->string('repeticoes');

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
        Schema::drop('faixas');
    }

}
