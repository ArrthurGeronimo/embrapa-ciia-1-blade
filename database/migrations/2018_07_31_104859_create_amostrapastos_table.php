<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAmostrapastosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('amostrapastos', function(Blueprint $table) {
                $table->increments('id');
                $table->date('data_amostra');
$table->string('altura');
$table->string('visual');
$table->string('peso_parcela');
$table->string('peso_amostra');
$table->string('ca');
$table->string('p');
$table->string('pb');
$table->string('ee');
$table->string('fb');
$table->string('mm');
$table->string('fda');
$table->string('fdn');
$table->string('ndt');
$table->string('enn');
$table->string('eb');
$table->string('piquete_id');
$table->string('area');
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
        Schema::drop('amostrapastos');
    }

}
