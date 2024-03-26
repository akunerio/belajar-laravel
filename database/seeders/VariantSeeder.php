<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VariantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('variants')->insert([
            'name' => "1S",
            'description' => "Deskripsi",
            'processor' => "ARM",
            'memory' => "8GB",
            'storage' => "256GB",
            'product_id' => 3,
        ]);
    }
}
