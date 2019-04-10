<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrawlLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crawl_links', function (Blueprint $table) {

            $table->increments('id');
            $table->string("link")->unique();
            $table->string("website")->nullable();
            $table->string("type")->nullable();
            $table->boolean("isCrawled")->default(0);
            $table->string('pageNo')->nullable();
            $table->string('occupation')->nullable();
            $table->string('born')->nullable();
            $table->string('death')->nullable();
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
        Schema::dropIfExists('crawl_links');
    }
}
