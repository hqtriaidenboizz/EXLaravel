<?php

namespace Database\Seeders;
// use App\Models\UserSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customer')->insert(
            [
                [
                    'name'=>"tri",
                    'phone'=>"012212121"
                ]  ,  
                [
                    'name'=>"ga",
                    'phone'=>"du"
                ]  
            ]);
    
    }
}