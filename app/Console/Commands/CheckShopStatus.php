<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CheckShopStatus extends Command
{
    /**
     * Signature untuk memanggil perintah di terminal dengan parameter jam (opsional).
     */
    protected $signature = 'pos:status {jam?}';

    /**
     * Deskripsi perintah saat dicek via php artisan list.
     */
    protected $description = 'Mengecek status operasional Toko Kelontong POS';

    /**
     * Eksekusi logika utama perintah.
     */
    public function handle()
    {
        $namaKasir = $this->ask('Masukkan nama Anda');
        $jam = $this->argument('jam') ?? 10;

        if (!is_numeric($jam) || $jam < 0 || $jam > 23) {
            $this->error("Jam tidak valid! Masukkan angka antara 0-23.");
            return 1; // exit dengan kode error
        }

        $this->info("=== SISTEM MONITORING TOKO KELONTONG ===");

        // Pengecekan jam operasional (08:00 - 21:00)
        if ($jam >= 8 && $jam <= 21) {
            $this->info("Halo {$namaKasir}, Status Toko pada jam {$jam}:00 WIB adalah: BUKA");
            $this->comment("Silakan kasir bersiap di meja transaksi.");
        } else {
            $this->error("Halo {$namaKasir}, Status Toko pada jam {$jam}:00 WIB adalah: TUTUP");
            $this->warn("Akses transaksi kasir dinonaktifkan sementara.");
        }
    }
}