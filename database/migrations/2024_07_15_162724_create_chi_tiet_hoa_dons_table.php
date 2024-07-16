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
        Schema::create('chi_tiet_hoa_dons', function (Blueprint $table) {
            $table->id();
            $table->string('ten_san_pham');
            $table->double('gia',10 ,2);
            $table->unsignedInteger('so_luong');
            $table->double('tong_tien',10 ,2);
            $table->string('anh_san_pham');
            $table->unsignedBigInteger('id_san_pham');
            $table->unsignedBigInteger('id_khuyen_mai');
            $table->unsignedBigInteger('id_hoa_don');


            $table->foreign('id_san_pham')->references('id')->on('san_phams')->onDelete('cascade');
            $table->foreign('id_khuyen_mai')->references('id')->on('khien_mais')->onDelete('cascade');
            $table->foreign('id_hoa_don')->references('id')->on('hoa_dons')->onDelete('cascade');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chi_tiet_hoa_dons');
    }
};
