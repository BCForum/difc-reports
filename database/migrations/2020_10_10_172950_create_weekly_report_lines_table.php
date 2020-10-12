<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeeklyReportLinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weekly_report_line', function (Blueprint $table) {
            $table->integer('weekly_report_id');
            $table->integer('line_no');
            $table->string('person_type');
            $table->integer('person_id');
            $table->string('name');
            $table->string('surname');
            $table->boolean('new_visitor_cell');
            $table->boolean('new_visitor_service');
            $table->boolean('cell');
            $table->boolean('service');
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
        Schema::dropIfExists('weekly_report_line');
    }
}
