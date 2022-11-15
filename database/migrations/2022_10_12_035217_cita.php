<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Cita extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cita', function(Blueprint $table){
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('numero');
            $table->date('fecha');
            $table->timestamp('hora');
            $table->string('barberia');
            $table->string('empleado');
        });   
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cita');
    }
}
