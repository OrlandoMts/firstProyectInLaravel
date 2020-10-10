<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaboratoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laboratories', function (Blueprint $table) {
            $table->increments('idLaboratory');
            $table->string('namePC',50);
            $table->string('model',30);
            $table->enum('isActive', [1, 0])->nullable(false)->default(1);
            // $table->unsignedBigInteger('idStudent');
            $table->timestamps();

            // $table->foreign('idStudent')->references('idStudent')->on('students');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laboratories');
    }
}
