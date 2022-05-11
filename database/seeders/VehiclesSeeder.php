<?php

namespace Database\Seeders;

use App\Models\Brands;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehiclesSeeder extends Seeder
{
    private $count = 0;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vehicles')->insert([
            'vehicle_code' => 'VU'. str_pad(++$this->count, 11, '0', STR_PAD_LEFT),
            'brand_id' => Brands::HONDA,
            'name' => 'Civic Ex',
            'description' => Brands::STRING_HONDA. ' Civic Ex 1.8 2003, prata',
            'vehicle_value' => 29990.00,
            'active' => 1,
        ]);

        DB::table('vehicles')->insert([
            'vehicle_code' => 'VU'. str_pad(++$this->count, 11, '0', STR_PAD_LEFT),
            'brand_id' => Brands::CHEVROLET,
            'name' => 'Prisma LTZ',
            'description' => Brands::STRING_CHEVROLET. ' Prisma LTZ 1.4 2018, preto',
            'vehicle_value' => 70900.00,
            'active' => 1,
        ]);

        DB::table('vehicles')->insert([
            'vehicle_code' => 'VU'. str_pad(++$this->count, 11, '0', STR_PAD_LEFT),
            'brand_id' => Brands::PEUGEOT,
            'name' => '3008 GT',
            'description' => Brands::STRING_PEUGEOT. ' 3008 GT Package prata, 2022',
            'vehicle_value' => 249990.00,
            'active' => 1,
        ]);

        DB::table('vehicles')->insert([
            'vehicle_code' => 'VU'. str_pad(++$this->count, 11, '0', STR_PAD_LEFT),
            'brand_id' => Brands::MITISUBISHI,
            'name' => 'Outlander 4x4',
            'description' => Brands::STRING_MITISUBISHI. ' Outlander 4x4 marrom, 2016',
            'vehicle_value' => 112800.00,
            'active' => 1,
        ]);

        DB::table('vehicles')->insert([
            'vehicle_code' => 'VU'. str_pad(++$this->count, 11, '0', STR_PAD_LEFT),
            'brand_id' => Brands::HONDA,
            'name' => 'HR-V Touring',
            'description' => Brands::STRING_HONDA. ' HR-V Touring preto, 2021',
            'vehicle_value' => 145990.00,
            'active' => 1,
        ]);

        DB::table('vehicles')->insert([
            'vehicle_code' => 'VU'. str_pad(++$this->count, 11, '0', STR_PAD_LEFT),
            'brand_id' => Brands::VOLKSWAGEN,
            'name' => 'Nivus Highline',
            'description' => Brands::STRING_VOLKSWAGEN. ' Nivus Highline branco, 2022',
            'vehicle_value' => 134920.00,
            'active' => 1,
        ]);
    }
}
