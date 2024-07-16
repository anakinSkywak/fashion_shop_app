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
        Schema::create('khien_mais', function (Blueprint $table) {
            $table->id();
            $table->string('ma_khien_mai');
            $table->string('mo_ta_khien_mai');
            $table->string('gia_tri_khien_mai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('khien_mais');
    }
};
