<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('fN');
            $table->string('lN');
            $table->string('matricule')->unique();
            $table->string('isRegistered');
            $table->string('phone');
            $table->string('prgId');
            $table->string('macAddress');
            $table->unsignedBigInteger('level_id');
            $table->foreign('level_id')->references('id')->on('levels')->onDelete('cascade')->onUpdate('cascade');
        });


    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
