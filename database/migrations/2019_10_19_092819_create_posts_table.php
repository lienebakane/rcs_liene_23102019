<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id'); //kolonna "id"

            //$table->string('author')->nullable();

            $table->string('title');
            $table->text('body');
            $table->string('img')->default('/img/placeholder.jpg');
            $table->string('price');
            $table->string('size');
            $table->string('color');

            $table->timestamp('published_at');

            $table->timestamps(); // 2 kolonnas created at, updated at




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
