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
        Schema::create('notes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('note');
         
           

            //foreign 
            $table->bigInteger('id_enseignant_module')->unsigned();
            $table->bigInteger('id_etudiant')->unsigned();
            $table->bigInteger('id_type_note')->unsigned();

            //Liaision des tables

            $table->foreign('id_enseignant_module')->references('id')->on('enseignant_modules')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('id_type_note')->references('id')->on('type_notes')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('id_etudiant')->references('id')->on('etudiants')
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
        Schema::dropIfExists('notes');
    }
};
