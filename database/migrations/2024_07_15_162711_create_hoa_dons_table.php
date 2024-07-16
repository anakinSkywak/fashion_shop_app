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
        Schema::create('hoa_dons', function (Blueprint $table) {
            $table->id();
            $table->string('ten_khach_hang');
            $table->date('ngay_mua');
            $table->string('dia_chi');
            $table->string('sdt');
            $table->string('email');
            $table->double('tong_tien', 10 , 2);
            $table->string('trang_thai');
            $table->unsignedBigInteger('id_khach_hang');
            $table->unsignedBigInteger('id_khuyen_mai');

            $table->foreign('id_khach_hang')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_khuyen_mai')->references('id')->on('khien_mais')->onDelete('cascade');




            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hoa_dons');
    }
};
