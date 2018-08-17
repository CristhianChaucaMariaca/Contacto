<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people_tag', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('people_id')->unsigned();
            $table->integer('tag_id')->unsigned();

            $table->timestamps();

            //Relations

            $table->foreign('people_id')->references('id')->on('people')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('tag_id')->references('id')->on('tags')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('people_tag');
    }
}
