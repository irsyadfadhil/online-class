<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Migration for subscriptions table
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->decimal('amount', 10, 2);
            $table->timestamps();
            $table->softDeletes();
        });

        // Migration for mentors table
        Schema::create('mentors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
            $table->softDeletes();
        });

        // Migration for classes table
        Schema::create('classes', function (Blueprint $table) {
            $table->id();
            $table->integer('mentor_id');
            $table->string('name');
            $table->timestamps();
            $table->softDeletes();
        });

        // Migration for watch_times table
        Schema::create('watch_times', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('class_id');
            $table->integer('minutes');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscriptions');
        Schema::dropIfExists('mentors');
        Schema::dropIfExists('classes');
        Schema::dropIfExists('watch_times');
    }
};
