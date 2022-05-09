<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('username', 255)->unique();
            $table->string('email', 255)->unique();
            $table->string('fullname', 255)->nullable();
            $table->string('password', 255);
            $table->string('avatar', 255)->nullable();
            $table->string('level', 10)->nullable();
            $table->timestamp('created')->useCurrent();
            $table->string('created_by', 255)->nullable();
            $table->timestamp('modified')->useCurrent();
            $table->string('modified_by', 255)->nullable();
            $table->text('status')->nullable();
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
