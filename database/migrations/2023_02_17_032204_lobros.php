<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Lobros extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libros', function(Blueprint $table){
            $table->engine="InnoDB"; // engine  InnoDB nos permite la eliminación en cascada
            $table->bigIncrements('id');
            $table->bigInteger('categoria_id')->unsigned(); // relacion entre table categorias y libros
            $table->string('nombre');
            $table->timestamps();
            //primero indicamos el campo que vamos arelacionar-> segudo del campo de la otra table-> y le indicamos la table
            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
