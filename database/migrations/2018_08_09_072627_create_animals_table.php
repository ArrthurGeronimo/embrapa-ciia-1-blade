<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('animals', function(Blueprint $table) {
                $table->increments('id');
                $table->integer('loteanimal_id');
$table->string('talhao_id');
$table->string('numero_fazenda');
$table->string('pai');
$table->string('mae');
$table->string('nascimento');
$table->string('data_saida');

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
        Schema::drop('animals');
    }

}
