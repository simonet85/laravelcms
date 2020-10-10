<?php

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($count=0; $count < 10; $count++) { 
           App\Category::create([
               'name' => 'Learn C++',
               'created_at' =>Carbon::now()->format('Y-m-d H:i:s')
           ]);
        }
    }
}
