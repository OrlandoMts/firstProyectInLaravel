<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->increments('idStudent');
            $table->string('email',100)->unique();
            $table->string('password');
            $table->string('name', 70)->nullable(false);
            $table->string('lastName', 70)->nullable(false);
            $table->string('motherLastName', 70)->nullable(false);
            $table->string('phone', 12)->nullable(false);
            $table->enum('role', ['student', 'teacher']);
            $table->enum('isActive', [1, 0])->nullable(false)->default(1);
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
        Schema::dropIfExists('students');
    }
}
