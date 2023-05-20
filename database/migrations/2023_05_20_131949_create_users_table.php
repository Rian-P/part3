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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('image')->nullable();
            $table->string('email');
            $table->string('no_hp');
            $table->string('level');
            $table->string('status');
            $table->string('password');
            $table->timestamps();
            $table->rememberToken();
            $table->softDeletes($column = 'deleted_at', $precision =0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
