<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diagnosticos', function (Blueprint $table) {

            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->date('fechaDiagnostico');
            $table->string('observaciones');
            $table->string('marca');
            $table->string('modelo');
            $table->string('numSerie');
            $table->string('motherboard');
            $table->string('ram');
            $table->string('unidadAlmacenamiento');
            $table->string('cpu');
            $table->string('gpu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       
    }
};
