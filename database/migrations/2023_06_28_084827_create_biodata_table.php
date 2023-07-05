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
        Schema::create('biodatas', function(Blueprint $table){
            $table->id();
            $table->string('profile_picture')->nullable();
            $table->string('name');
            $table->string('age');
            $table->string('gender');
            $table->string('phone');
            $table->string('religion');
            $table->string('cast');
            $table->string('interested_in');
            $table->string('age_preference');
            $table->string('religion_preference');
            $table->string('cast_preference');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biodatas');
    }
};
