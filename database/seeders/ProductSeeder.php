<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
            'name' => 'LG Mobile',
            'price'=>'200',
            'category' =>'mobile',
            'description' =>'A Smart With Smart Feature',
            'gallery'=>'https://www.whatmobile.com.pk/admin/images/LG/LGW41-b.jpg',
            ],
            ['name' => 'Oven',
            'price'=>'150',
            'category' =>'Home Equipment',
            'description' =>'All-in-One Oven',
            'gallery'=>'https://static-01.daraz.pk/p/f81a71c74013bf49f67e0d96bc10eb85.jpg',
            ],
            [   'name' => 'Bat',
                'price'=>'1150',
                'category' =>'Sports',
                'description' =>'Best Bat In The Town',
                'gallery'=>'https://championsports.pk/wp-content/uploads/2021/01/20220212184340872616966.jpg',
            ],
        ]);
    }
}
