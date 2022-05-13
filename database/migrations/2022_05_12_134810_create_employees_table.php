<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id('emp_id');
            $table->string('first_name',50);
            $table->string('last_name',50);
            $table->integer('age');
            $table->string('gender');
            $table->string('department');
            $table->date('date_of_join');
            $table->integer('salary');
            $table->string('email',50);
            $table->bigInteger('mobile');
            $table->string('password',50);
            $table->string('hobby');
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
        Schema::dropIfExists('employees');
    }
}
