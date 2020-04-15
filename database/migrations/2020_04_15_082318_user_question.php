<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserQuestion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_question', function (Blueprint $table) {
            $table->bigInteger('iduser')->unsigned()->nullable();
            $table->bigInteger('idquestion')->unsigned()->nullable();
            $table->integer('sum_answer_right');
            $table->integer('sum_answer_false');
            $table->integer('sum_people_right');
            $table->integer('sum_people_false');
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
        Schema::dropIfExists('user_question');
    }
}
