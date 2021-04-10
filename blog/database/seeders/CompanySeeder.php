<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CompanySeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i <= 1000000 ; $i++) { 
            DB::table('companies')->insert(
                ['company_name' => 'hieutm',
                'company_web' => 'aaa.com',
                'company_address' => 'TDC',
                'company_code' =>'281',
                'company_phone' => '12345']
            );
        }
    }
}
