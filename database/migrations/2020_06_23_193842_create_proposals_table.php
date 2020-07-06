<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProposalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proposals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('area_id')->unsigned();
            $table->integer('citizen_id')->unsigned();
            $table->integer('user_id')->unsigned()->nullable();
            $table->string('titulo', 64);
            $table->string('slug', 64);
            $table->longText('descripcion');
            $table->longText('propuesta')->nullable();
            $table->longText('acciones')->nullable();
            $table->longText('involucrados')->nullable();
            $table->longText('presupuesto')->nullable();
            $table->longText('documentacion')->nullable();

            $table->mediumText('eval_tecnica')->nullable();
            $table->mediumText('eval_social')->nullable();
            $table->mediumText('eval_economica')->nullable();
            $table->mediumText('eval_politica')->nullable();

            $table->enum('estado', ['RECHAZADO', 'ACEPTADO', 'EN ANALISIS'])->default('EN ANALISIS');
            $table->integer('votos');
            $table->timestamps();

            // Relations
            $table->foreign('area_id')->references('id')->on('areas')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('citizen_id')->references('id')->on('citizens')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proposals');
    }
}
