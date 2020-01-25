<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyectoEmpresarialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyecto_empresarials', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nombre',60);
            $table->text('descripcion');
             $table->uuid('etapa_id')->foreign('etapa_id')->references('id')->on('etapa_proyectos')->onDelete('cascade');
            $table->string('fecha_inicio')->nullable();
             $table->uuid('actividad_economica')->nullable()->foreign('actividad_economica')->references('id')->on('actividad_economicas')->onDelete('cascade');
           
             $table->integer('cantidad_empleados')->nullable();
             $table->integer('facturacion_mensual_aprox')->nullable();
              $table->string('productos',1000)->nullable();
              $table->string('servicios',1000)->nullable();
               $table->string('tipo_mercado',5)->nullable();
               $table->integer('numero_integrantes')->nullable();
               $table->uuid('persona_contacto_id')->foreign('persona_contacto_id')->references('id')->on('persona_contactos')->onDelete('cascade');

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
        Schema::dropIfExists('proyecto_empresarials');
    }
}
