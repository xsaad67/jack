<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->text('body');
            $table->text('title');
            $table->string('slug')->nullable();
            $table->integer('author_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->boolean('isQuote')->default(1);
            $table->text('featuredImage')->nullable();
            $table->text('tags')->nullable();
            $table->string('link')->nullable();
            $table->string('source')->nullable();
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
        Schema::dropIfExists('posts');
    }
}
