<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('vacancy');
            $table->integer('salary');
            $table->string('experience');
            $table->text('details');
            $table->string('qualifications');
            $table->string('location');           
            $table->unsignedBigInteger('company_id');
            $table->unsignedBigInteger('category_id');
            $table->date('enddate');
            $table->timestamps();

            
            $table->foreign('company_id')->references('id')->on('users');
            $table->foreign('category_id')->references('id')->on('categories');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}
