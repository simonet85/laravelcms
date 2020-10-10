<?php

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Tag::create([
            'tag'=>'java',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);
        App\Tag::create([
            'tag'=>'javascript',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);
        App\Tag::create([
            'tag'=>'vue',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);
        App\Tag::create([
            'tag'=>'php',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
