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
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('creater_id')->nullable();
            $table->foreign('creater_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('title');
            $table->string('tags');
            $table->string('company');
            $table->string('location');
            $table->string('website');
            $table->string('email');
            $table->longText('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('listings', function(Blueprint $table){
            $table->dropForeign(['creator_id']);
        });
        Schema::dropIfExists('listing');
    }
};
