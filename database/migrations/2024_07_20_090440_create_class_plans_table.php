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
        Schema::create('class_plans', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('icon');
            $table->text('features');
            $table->integer('max_users');
            $table->integer('class_options');
            $table->decimal('price', 10, 2);
            $table->decimal('promo_price', 10, 2);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('class_plans');
    }
};
