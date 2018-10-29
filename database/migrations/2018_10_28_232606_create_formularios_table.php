<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormulariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { 

        Schema::connection('formulario')->create('formularios', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('marca');
            $table->string('proyecto');
            $table->string('KPI');
            $table->string('inversion');
            $table->date('fecha1');
            $table->date('fecha2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formularios');
    }
}
