<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            "category_name" => "Penjualan Produk",
        ]);

        Category::create([
            "category_name" => "Biaya Produksi",
        ]);

        Category::create([
            "category_name" => "Biaya Marketing",
        ]);

        Category::create([
            "category_name" => "Perawatan Server",
        ]);
    }
}
