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
            $table->foreignId('idPaisExp');
            $table->foreignId('idDepExp');
            $table->date('fechaExp');
            $table->foreignId('idMuniExp');
            $table->text('nombres');
            $table->text('primerApellido');
            $table->text('segundoApellido');
            $table->text('genero');
            $table->date('fechaNacim');
            $table->foreignId('idPaisNacim');
            $table->foreignId('idDepNacim');
            $table->foreignId('idMuniNacim');
            $table->foreignId('idCurso');
            $table->integer('estrato');

            $table->foreign('idPaisExp')->references('id')->on('paises')->onDelete('cascade')->onUpdate('cascade');;
            $table->foreign('idPaisNacim')->references('id')->on('paises')->onDelete('cascade')->onUpdate('cascade');;
            $table->foreign('idDepExp')->references('id')->on('departamentos')->onDelete('cascade')->onUpdate('cascade');;
            $table->foreign('idDepNacim')->references('id')->on('departamentos')->onDelete('cascade')->onUpdate('cascade');;
            $table->foreign('idMuniExp')->references('id')->on('municipios')->onDelete('cascade')->onUpdate('cascade');;
            $table->foreign('idMuniNacim')->references('id')->on('municipios')->onDelete('cascade')->onUpdate('cascade');;
            $table->foreign('idCurso')->references('id')->on('cursos')->onDelete('cascade')->onUpdate('cascade');;
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
