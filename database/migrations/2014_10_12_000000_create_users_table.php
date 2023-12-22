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
            $table->string('name');
            $table->string('fname')->default('');
            $table->string('lname')->default('');
            $table->string('address1')->default('');
            $table->string('address2')->default('');
            $table->string('address3')->default('');
            $table->date('B_date')->default(now());
            $table->string("gender", 1)->default('');
            $table->string("Phone")->default('');
            $table->string('email')->unique();
            $table->string('avatar')->default('/images/defult-avatar.png');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('role')->default('user');
            $table->rememberToken();
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
