<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAnimaldadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('animaldados', function(Blueprint $table) {
                $table->increments('id');
                $table->integer('animal_id');
$table->string('data');
$table->string('nome_dado');
$table->string('unidade');
$table->string('peso');

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
        Schema::drop('animaldados');
    }

}
