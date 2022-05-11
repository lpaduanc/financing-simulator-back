<?php

namespace Database\Seeders;

use App\Models\Brands;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
            'name' => Brands::STRING_HONDA,
            'active' => 1,
        ]);

        DB::table('brands')->insert([
            'name' => Brands::STRING_CHEVROLET,
            'active' => 1,
        ]);

        DB::table('brands')->insert([
            'name' => Brands::STRING_PEUGEOT,
            'active' => 1,
        ]);

        DB::table('brands')->insert([
            'name' => Brands::STRING_MITISUBISHI,
            'active' => 1,
        ]);

        DB::table('brands')->insert([
            'name' => Brands::STRING_VOLKSWAGEN,
            'active' => 1,
        ]);
    }
}
