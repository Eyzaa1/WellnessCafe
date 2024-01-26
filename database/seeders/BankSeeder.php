<?php

namespace Database\Seeders;

use App\Models\Bank;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bank::create([
            "bank_name" => "BCA",
            "account_number" => "123 4567 8909 8765",
            "logo" => "bank-bca.svg"
        ]);
    }
}
