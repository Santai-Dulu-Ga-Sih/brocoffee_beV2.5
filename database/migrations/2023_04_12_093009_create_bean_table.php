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
        Schema::create('beans', function (Blueprint $table) {
            $table->id('bean_id');
            $table->string('bean_nama');
            $table->integer('bean_number');
            $table->string('bean_deskripsi');
            $table->string('bean_from');
            $table->string('bean_url');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beans');
    }
};
