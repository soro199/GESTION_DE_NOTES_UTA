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
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('prenoms');
            $table->date('dateN');
            $table->string('tel')->unique();
            $table->string('adresse');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');

            //foreign 
            $table->bigInteger('id_role')->unsigned();

            //Liaision des tables

            $table->foreign('id_role')->references('id')->on('roles')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            //Parametres
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
