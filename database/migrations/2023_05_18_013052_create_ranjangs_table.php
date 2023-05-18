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
        Schema::create('ranjangs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('produks_id')->constraint('produks');
            $table->integer('qty')->unsigned();
            $table->integer('subTotal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ranjangs');
    }
};
