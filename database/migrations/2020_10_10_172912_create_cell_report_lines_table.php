<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCellReportLinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cell_report_line', function (Blueprint $table) {
            $table->integer('cell_report_id');
            $table->integer('line_no');
            $table->string('person_type');
            $table->integer('person_id');
            $table->string('name');
            $table->string('surname');
            $table->boolean('new_visitor');
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
        Schema::dropIfExists('cell_report_line');
    }
}
