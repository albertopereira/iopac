<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecordsFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('records_fields', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('record_id')->unsigned()->index();
            $table->foreign('record_id')->references('id')->on('records')->onDelete('cascade');
            $table->integer('tagfield')->unsigned();
            $table->integer('tagsubfield')->unsigned();
            $table->text('value')->nullable();
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
        Schema::drop('records_fields');
    }
}
