<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeaturesTable extends Migration
{
    public function up()
    {
        Schema::create('features', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('name');
            $table->string('title');
            $table->text('description');
            $table->string('sub_title1')->nullable();
            $table->text('sub_description1')->nullable();
            $table->string('sub_title2')->nullable();
            $table->text('sub_description2')->nullable();
            $table->string('sub_title3')->nullable();
            $table->text('sub_description3')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('features');
    }
}
