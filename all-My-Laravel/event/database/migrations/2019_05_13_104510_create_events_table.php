<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('codeno');
            $table->unsignedBigInteger('organizer_id');
            $table->unsignedBigInteger('venues_id');
            $table->unsignedBigInteger('service_id');
            $table->String('start_date');
            $table->String('end_date');
            $table->String('amount');
            $table->String('specialrequest');
            $table->String('status');
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
        Schema::dropIfExists('events');
    }
}
