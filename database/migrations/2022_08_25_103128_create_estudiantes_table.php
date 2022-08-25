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
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('tipoDoc');
            $table->integer('numDoc');
            $table->string('docIdent');
            $table->date('fechaExp');
            $table->unsignedBigInteger('idMuniciExp');
            $table->text('nombres');
            $table->text('primerApellido');
            $table->text('segundoApellido');
            $table->text('genero');
            $table->unsignedBigInteger('idmunNacim');
            $table->unsignedBigInteger('idCurso');
            $table->integer('estrato');

            $table->foreign('idMuniciExp')->references('id')->on('Municipios')->onDelete('cascade')->onUpdate('cacade');;
            $table->foreign('idmunNacim')->references('id')->on('Municipios')->onDelete('cascade')->onUpdate('cacade');;
            $table->foreign('idCurso')->references('id')->on('Cursos')->onDelete('cascade')->onUpdate('cacade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estudiantes');
    }
};
