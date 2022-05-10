<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRssTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rss', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255);
            $table->text('status');
            $table->string('link', 255)->nullable();
            $table->integer('ordering')->default(0);;
            $table->string('source', 45)->nullable();
            $table->timestamp('created')->useCurrent();
            $table->string('created_by', 255)->nullable();
            $table->timestamp('modified')->useCurrent();
            $table->string('modified_by', 255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rss');
    }
}
