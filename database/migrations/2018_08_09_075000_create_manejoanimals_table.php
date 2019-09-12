<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateManejoanimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('manejoanimals', function(Blueprint $table) {
                $table->increments('id');
                $table->integer('servicoanimal_id');
$table->integer('insumoanimal_id');
$table->integer('movimentacaoanimal_id');
$table->integer('animal_id');
$table->integer('loteanimal_id');
$table->string('data');
$table->string('unidade');
$table->string('quantidade');
$table->string('valor_unitario');

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
        Schema::drop('manejoanimals');
    }

}
