<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideosTable extends Migration
{
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('type');
            $table->string('title');
            $table->string('instructor');
            $table->string('instructor_title');
            $table->string('thumbnail_url');
            $table->string('video_url');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('videos');
    }
}
