<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCellDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cell_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cell_id');
            $table->integer('person_id');
            $table->string('person_type');
            $table->timestamps();
            $table->index(['cell_id','id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cell_details');
    }
}
