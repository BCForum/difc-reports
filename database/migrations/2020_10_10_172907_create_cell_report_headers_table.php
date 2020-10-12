<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCellReportHeadersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cell_report_header', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cell_id');
            $table->integer('sheperd_id');
            $table->string('sheperd_name');
            $table->date('cell_date');
            $table->date('submit_date');
            $table->string('holy_spirit_working');
            $table->string('message_to_snr_pastor');
            $table->string('feedback');
            $table->integer('contact_total');
            $table->integer('member_total');
            $table->integer('salvation_total');
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
        Schema::dropIfExists('cell_report_headers');
    }
}
