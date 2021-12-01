<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormulariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formularios', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('phone');
            $table->smallInteger('age');
            $table->string('escolaridad');
            $table->string('experiencia')->nullable();
            $table->text('tipo_experiencia')->nullable();
            $table->string('vacante');
            $table->unsignedBigInteger('id_document');
            $table->foreign('id_document')->references('id')->on('documentos');
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
        Schema::dropIfExists('formularios');
    }
}
