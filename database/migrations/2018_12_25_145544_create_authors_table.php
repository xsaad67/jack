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
            $table->string('image')->nullable();
            $table->string("source")->nullable();
            $table->timestamps();
        });
    }


    //select SUBSTRING(name, 1, 1) as alpha, name from ( select SUBSTRING(name, 1, 1) as alpha, name, (@rn:=if(@prev = SUBSTRING(name, 1, 1), @rn +1, 1)) as rownumb, @prev:= SUBSTRING(name, 1, 1) from ( select SUBSTRING(name, 1, 1) as alpha, name from authors order by alpha, name ) as sortedlist JOIN (select @prev:=NULL, @rn :=0) as vars ) as groupedlist where rownumb<=10 order by 'alpha', 'name';
    //SELECT SUBSTRING(name, 1, 1) as alpha, name from authors GROUP BY SUBSTRING(name, 0, 2), name order by 'alpha', 'name'


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
