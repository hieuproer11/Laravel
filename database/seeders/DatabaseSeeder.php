<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Cat;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::->create();

        Cat::create([
            'name' => 'Big Billy',
            'price' => '5000',
            'description' =>'Big and Chonky Cat',
            'image'=>'',
            'birth_date' =>'2001-10-21'
        ]);
        Cat::create([
            'name' => 'Big Nelly',
            'price' => '8000',
            'description' =>'Healthy Cat',
            'image'=>'',
            'birth_date' =>'1999-10-21'
        ]);
        Cat::create([
            'name' => 'Pastor',
            'price' => '6000',
            'description' =>'Big and Chonky Cat',
            'image'=>'',
            'birth_date' =>'2001-02-11'
        ]);
        Cat::create([
            'name' => 'Bailey',
            'price' => '7500',
            'description' =>'A very Chearfull Cat',
            'image'=>'',
            'birth_date' =>'1998-4-12'
        ]);
        Cat::create([
            'name' => 'Pilfort',
            'price' => '4000',
            'description' =>'Smartest cat of the bunch',
            'image'=>'',
            'birth_date' =>'1997-5-21'
        ]);
        Cat::create([
            'name' => 'Stan',
            'price' => '2000',
            'description' =>'A malnourished cat from the streets',
            'image'=>'',
            'birth_date' =>'2005-12-22'
        ]);
    }
}
