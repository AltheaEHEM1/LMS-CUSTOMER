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
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->unsignedBigInteger('user_id')->nullable()->index(); // Generic user ID
            $table->string('user_type')->nullable(); // Specifies the type: 'App\Models\User' or 'App\Models\Employee'
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
};