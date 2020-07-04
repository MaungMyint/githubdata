<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventdetails', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('potential_cost');
            $table->String('amount_paid');
            $table->String('extra_paid');
            $table->String('voucherno');
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
        Schema::dropIfExists('eventdetails');
    }
}
