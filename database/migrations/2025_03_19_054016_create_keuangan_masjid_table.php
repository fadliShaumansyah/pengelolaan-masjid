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
        Schema::create('keuangan_masjid', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('tanggal_transaksi');
            $table->enum('jenis_transaksi', ['Pemasukan',

            'Pengeluaran']);

            $table->string('kategori', 255);
            $table->decimal('jumlah', 15, 2);
            $table->text('keterangan');
            $table->string('bukti_transaksi',

255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keuangan_masjid');
    }
};
