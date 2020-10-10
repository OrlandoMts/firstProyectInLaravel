<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exams', function (Blueprint $table) {
            $table->increments('idExam');
            $table->enum('subject', ['Cálculo', 'Química', 'Programación', 'Física', 'Administración']);
            $table->string('question', 100);
            $table->string('answer', 100);
            $table->enum('qualification', ['Excelente: 90', 'Bien: 80', 'Regular: 70', 'Repetir'])->nullable(false);
            $table->enum('isActive', [1, 0])->nullable(false)->default(1);
            $table->unsignedBigInteger('idStudent');
            $table->timestamps();

            $table->foreign('idStudent')->references('idStudent')->on('students');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exams');
    }
}
