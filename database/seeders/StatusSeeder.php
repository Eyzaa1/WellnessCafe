<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status::create([
            "order_status" => "Disetujui",
            "style" => "success",
        ]);

        Status::create([
            "order_status" => "Tertunda",
            "style" => "warning",
        ]);

        Status::create([
            "order_status" => "Ditolak",
            "style" => "danger",
        ]);

        Status::create([
            "order_status" => "Selesai",
            "style" => "info",
        ]);

        Status::create([
            "order_status" => "Dibatalkan",
            "style" => "secondary",
        ]);
    }
}
