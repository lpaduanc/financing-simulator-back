<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InstallmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('installments')->insert([
            'installment' => 6,
            'active' => 1,
        ]);

        DB::table('installments')->insert([
            'installment' => 12,
            'active' => 1,
        ]);

        DB::table('installments')->insert([
            'installment' => 48,
            'active' => 1,
        ]);
    }
}
