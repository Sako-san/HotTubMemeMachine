<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogPostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogPosts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('DateOfBirth');
            $table->string('Title', 30);
            $table->tinyInteger('DogeRating');
            $table->text('BlogContent');
            
            $table->softDeletes();
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
        Schema::dropIfExists('blogPosts');
    }
}
