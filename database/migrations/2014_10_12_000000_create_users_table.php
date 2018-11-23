<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('skills')->nullable();
            $table->string('education')->nullable();
            $table->string('location')->nullable();
            $table->mediumText('bio')->nullable();
            $table->mediumText('notes')->nullable();
            $table->string('type')->default('user');
            $table->string('job')->nullable();
            $table->string('photo')->default('user-green.png');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
