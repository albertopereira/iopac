<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarcsubfieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marcsubfields', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tagfield')->unsigned()->index();
            $table->foreign('tagfield')->references('id')->on('marcfields')->onDelete('cascade');
            $table->string('tagsubfield', 3)->nullable;
            $table->string('description');
            $table->tinyInteger('repeatable')->nullable()->default(0);
            $table->tinyInteger('mandatory')->nullable()->default(0);
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
        Schema::drop('marcsubfields');
    }
}
