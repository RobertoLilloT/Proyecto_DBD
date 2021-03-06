<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('cantidad_personas');
            $table->date('fecha_resevacion');
            $table->string('rut_cliente');
            $table->string('nombre_cliente');
            $table->string('apellido_cliente');
            $table->boolean('estado');
            
            $table->bigInteger('id_usuario');
            $table->bigInteger('id_horario_mesa');

            /*Llave foranea de usuario en reserva, por tener 1 * m */
            $table->foreign('id_usuario')
                ->references('id')
                ->on('usuarios')
                ->onDelete('cascade');

            /*Llave foranea de horario_mesa en reserva, por tener 1 * m */
            $table->foreign('id_horario_mesa')
                ->references('id')
                ->on('horarios_mesas')
                ->onDelete('cascade');

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
        Schema::dropIfExists('reservas');
    }
}
