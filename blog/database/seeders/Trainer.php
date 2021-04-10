<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class Trainer extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
            for ($i=0; $i <= 1000000 ; $i++) { 
            DB::table('trainers')->insert(
                ['trainer_name' => 'hieutm', 
                'company_id' => '11',
                'trainer_email' => 'hieutm@gmail.com',
                'trainer_phone' =>'123456']
            );
        }
    }
}
