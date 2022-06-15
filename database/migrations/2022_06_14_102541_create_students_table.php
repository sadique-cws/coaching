<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string("father_name");
            $table->string("mother_name");
            $table->string("dob");
            $table->string("address");
            $table->string("education");
            $table->string("gender");
            $table->timestamps();
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('students');
    }
};
