<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Test extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nametest');
            $table->binary('image');
            $table->text('content');
            $table->bigInteger('idcatalog')->unsigned()->nullable();;
            $table->bigInteger('idlevel')->unsigned()->nullable();;
            $table->text('content_tiengviet');
            $table->timestamps();

            $table->foreign('idcatalog')
                ->references('id')
                ->on('catagory');


            $table->foreign('idlevel')
                ->references('id')
                ->on('level');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('test');
    }
}
