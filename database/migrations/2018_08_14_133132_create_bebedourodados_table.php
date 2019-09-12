<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBebedourodadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('bebedourodados', function(Blueprint $table) {
                $table->increments('id');
                $table->integer('piquete_id');
$table->integer('sensor_id');
$table->date('data');
$table->string('hora');
$table->string('nivel');
$table->string('consumo');
$table->string('limpeza');

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
        Schema::drop('bebedourodados');
    }

}
