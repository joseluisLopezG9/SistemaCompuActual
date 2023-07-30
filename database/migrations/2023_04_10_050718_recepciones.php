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
        Schema::create('recepciones', function (Blueprint $table) {{}

            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->string('marca');
            $table->string('modelo');
            $table->string('numSerie');
            $table->string('caracteristicasFisicas');
            $table->string('caracteristicasInternas');
            $table->string('accesorios');
            $table->string('claveAcceso');
            $table->string('servicio');
            $table->string('name');
            $table->string('telefono');
            $table->string('estado_notificacion')->default('PENDIENTE DE ENVIAR');
            $table->string('fcm_token')->nullable();
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
