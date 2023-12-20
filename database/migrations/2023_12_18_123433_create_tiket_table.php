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
        Schema::create('tiket', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pemesan');
            $table->string('alamat_pemesan');
            $table->enum('jenis_tiket', ['VIP', 'VVIP', 'Festival']);
            $table->enum('tanggal_konser', ['26 April', '1 Mei', '8 Desember']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tiket');
    }
};
