<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('authors', function (Blueprint $table) {
            $table->increments('id');
            $table->string("name");
            $table->string("profession")->nullable();
            $table->string("born")->nullable();
            $table->string("nationality")->nullable();
            $table->string("death")->nullable();
            $table->string("formatBorn")->nullable();
            $table->string("formatDeath")->nullable();
            $table->string("link")->nullable();
            $table->string("source")->nullable();
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
        Schema::dropIfExists('authors');
    }
}
