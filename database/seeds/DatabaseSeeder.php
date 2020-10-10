<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $this->call(
            [
                UserTableSeeder::class,
                SettingTableSeeder::class,
                PostsTableSeeder::class,
                CategoryTableSeeder::class,
                TagsTableSeeder::class
            ]
        );
    }
}
