<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogPostsTable extends Migration
{
    public function up()
    {
        Schema::create('blog_posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('category_id')->notNullable();
            $table->string('post_title', 255)->notNullable();
            $table->string('post_slug', 255)->notNullable();
            $table->string('post_image', 255)->notNullable();
            $table->text('post_short_description')->notNullable();
            $table->text('post_long_description')->notNullable();
            $table->timestamp('created_at')->nullable()->default(null);
            $table->timestamp('updated_at')->nullable()->default(null);

            $table->foreign('category_id')->references('id')->on('blog_categories')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('blog_posts');
    }
}