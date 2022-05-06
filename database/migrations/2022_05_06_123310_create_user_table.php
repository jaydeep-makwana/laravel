<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->text('first_name');
            $table->text('last_name');
            $table->integer('age');
            $table->text('gender');
            $table->string('department');
            $table->date('date_of_join');
            $table->integer('salary');
            $table->string('email');
            $table->string('password');
            $table->text('hobby');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}
