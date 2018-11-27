<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Animals extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals', function (Blueprint $table){
            $table->increments('id');
            $table->string('nome');
            $table->integer('idade');
            $table->string('especie');
            $table->string('raca');
            $table->string('tamanho');
            $table->integer('users_id')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('users_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animals');
    }
}
