<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('biblio')->unsigned()->index();
            $table->foreign('biblio')->references('id')->on('biblios')->onDelete('cascade');
            $table->integer('itemtype')->unsigned()->index();
            $table->foreign('itemtype')->references('id')->on('itemtypes')->onDelete('cascade');
            $table->tinyInteger('hidden')->nullable()->default(0);
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
        Schema::drop('records');
    }
}
