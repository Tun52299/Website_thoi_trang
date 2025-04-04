<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('colors')->insert([
            ['name' => 'Đen', 'code' => '#000000'],
            ['name' => 'Trắng', 'code' => '#FFFFFF'],
            ['name' => 'Xanh dương', 'code' => '#0000FF'],
            ['name' => 'Xanh lá', 'code' => '#008000'],
            ['name' => 'Đỏ', 'code' => '#FF0000'],
            ['name' => 'Vàng', 'code' => '#FFFF00'],
            ['name' => 'Xám', 'code' => '#808080'],
            ['name' => 'Nâu', 'code' => '#A52A2A'],
            ['name' => 'Hồng', 'code' => '#FFC0CB'],
            ['name' => 'Tím', 'code' => '#800080'],
        ]);
    }
}
