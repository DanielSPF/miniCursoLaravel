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
            $table->bigIncrements('id');
            $table->string('first_name', 20);
            $table->string('last_name', 100);
            $table->string('email')->unique();
            $table->string('address')->default('');
            $table->string('city', 30)->default('');
            $table->string('state', 2)->default('');
            $table->string('about_me', 200)->nullable();
            $table->boolean('is_admin')->default(false);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('menu_back_color', 7)->default('white');
            $table->string('menu_active_color', 7)->default('danger');
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
