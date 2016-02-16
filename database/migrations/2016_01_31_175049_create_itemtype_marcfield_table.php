<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemtypeMarcfieldTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itemtype_marcfield', function(Blueprint $table)
        {
            $table->integer('itemtype_id')->unsigned()->index();
            $table->foreign('itemtype_id')->references('id')->on('itemtypes')->onDelete('cascade');
            $table->integer('marcfield_id')->unsigned()->index();
            $table->foreign('marcfield_id')->references('id')->on('marcfields')->onDelete('cascade');
            $table->integer('order')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('itemtype_marcfield');
    }
}
