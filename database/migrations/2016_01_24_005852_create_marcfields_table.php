<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarcfieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marcfields', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tagfield', 3);
            $table->string('description');
            $table->tinyInteger('repeatable')->nullable()->default(0);
            $table->tinyInteger('mandatory')->nullable()->default(0);
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
        Schema::drop('marcfields');
    }
}
