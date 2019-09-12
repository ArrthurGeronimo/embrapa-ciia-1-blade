<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAmostrasolosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('amostrasolos', function(Blueprint $table) {
                $table->increments('id');
                $table->integer('piquete_id');
$table->string('data');
$table->string('profundidade');
$table->string('ph');
$table->string('mo');
$table->string('p');
$table->string('k');
$table->string('ca');
$table->string('mg');
$table->string('hplusai');
$table->string('ai');
$table->string('s');
$table->string('cu');
$table->string('fe');
$table->string('zn');
$table->string('mn');
$table->string('b');
$table->string('identificacao');

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
        Schema::drop('amostrasolos');
    }

}
