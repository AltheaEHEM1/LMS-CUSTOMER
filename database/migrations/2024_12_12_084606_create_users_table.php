<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            // Personal Information
            $table->string('firstName');
            $table->string('middleInitial')->nullable();
            $table->string('lastName');
            $table->string('dobMonth');
            $table->string('dobDay');
            $table->string('dobYear');
            $table->string('gender');
            
            // Address Information
            $table->string('addressHouse');
            $table->string('addressStreet');
            $table->string('addressBarangay');
            $table->string('addressCity');
            $table->string('addressProvince');
            $table->string('addressZip');
            
            // Account Information
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
};