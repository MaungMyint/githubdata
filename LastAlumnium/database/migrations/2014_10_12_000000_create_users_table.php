<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('cid')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('password')->nullable();            
            $table->string('nrc')->nullable();
            $table->string('degree')->nullable();
            $table->string('major')->nullable();
            $table->string('training')->nullable();
            $table->string('course')->nullable();
            $table->string('phonenumber')->nullable();
            $table->string('address')->nullable();
            $table->string('university')->nullable();
            $table->string('staff')->nullable();
            $table->string('jobposition')->nullable();
            $table->string('joblocation')->nullable();         
            $table->string('slary')->nullable();
            $table->string('state')->nullable();           
            $table->string('image')->default('avatar.png');
            $table->string('role')->default('author');
            $table->string('pass')->nullable();            
            $table->string('status')->default('0');
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
        Schema::dropIfExists('users');
    }
}
