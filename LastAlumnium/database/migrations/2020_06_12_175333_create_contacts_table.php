<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('no')->nullable();     
            $table->string('mname')->nullable();     
            $table->string('name')->nullable();
            $table->string('nrc')->nullable();
            $table->string('degree')->nullable();
            $table->string('major')->nullable();
            $table->string('training')->nullable();
            $table->string('course')->nullable();
            $table->string('phonenumber')->nullable();
            $table->string('gmail')->nullable();
            $table->string('address')->nullable();
            $table->string('university')->nullable();
            $table->string('staff')->nullable();
            $table->string('jobposition')->nullable();
            $table->string('joblocation')->nullable();         
            $table->string('slary')->default('0');
            $table->string('state')->nullable();           
            $table->string('password')->default('password');
            $table->string('image')->default('avatar.png');
            $table->string('status')->default('0');
            $table->string('sentto')->default('0');
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
        Schema::dropIfExists('contacts');
    }
}
