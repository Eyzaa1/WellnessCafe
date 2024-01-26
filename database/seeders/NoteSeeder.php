<?php

namespace Database\Seeders;

use App\Models\Note;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class NoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Note::create([
            "order_notes" => "Menunggu pembayaran COD"
        ]);

        Note::create([
            "order_notes" => "[Tidak ada bukti transfer] menunggu bukti transaksi dikirimkan"
        ]);

        Note::create([
            "order_notes" => "Bukti transfer berhasil terkirim, menunggu persetujuan dari admin"
        ]);

        Note::create([
            "order_notes" => "Bukti transfer disetujui, menunggu produk diterima"
        ]);

        Note::create([
            "order_notes" => "Transaksi berhasil"
        ]);

        Note::create([
            "order_notes" => "Pesanan dibatalkan langsung oleh pengguna"
        ]);
    }
}
