<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePlantioculturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('plantioculturas', function(Blueprint $table) {
                $table->increments('id');
                $table->integer('piquete_id');
$table->string('data');
$table->string('peso_parcela');
$table->string('peso_amostra');
$table->string('quantidade_espigas');
$table->string('identificacao');
$table->string('area');

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
        Schema::drop('plantioculturas');
    }

}
