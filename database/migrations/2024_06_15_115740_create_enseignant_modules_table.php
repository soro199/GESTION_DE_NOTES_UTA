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
        Schema::create('enseignant_modules', function (Blueprint $table) {
            $table->bigIncrements('id');
         
           

            //foreign 
            $table->bigInteger('id_enseignant')->unsigned();
            $table->bigInteger('id_module')->unsigned();

            //Liaision des tables

            $table->foreign('id_enseignant')->references('id')->on('enseignants')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('id_module')->references('id')->on('modules')
                ->onDelete('cascade')
                ->onUpdate('cascade');
                
            // Parametres
            $table->softDeletes();
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
        Schema::dropIfExists('enseignant_modules');
    }
};
