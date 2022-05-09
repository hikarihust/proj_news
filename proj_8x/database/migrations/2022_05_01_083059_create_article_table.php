<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id');
            $table->string('name', 255);
            $table->text('content')->nullable();
            $table->text('status')->nullable();
            $table->text('thumb')->nullable();
            $table->timestamp('created')->useCurrent();
            $table->string('created_by', 255)->nullable();
            $table->timestamp('modified')->useCurrent();
            $table->string('modified_by', 255)->nullable();
            $table->date('publish_at', 255)->nullable();
            $table->string('type', 255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article');
    }
}
