<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255);
            $table->text('status')->nullable();
            $table->timestamp('created')->useCurrent();
            $table->string('created_by', 255)->nullable();
            $table->timestamp('modified')->useCurrent();
            $table->string('modified_by', 255)->nullable();
            $table->text('is_home')->nullable();
            $table->string('display', 255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category');
    }
}
