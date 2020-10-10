<?php

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($count=0; $count < 10; $count++) { 
            
            App\Post::create(
                [
                    'title' => 'Create a stunning website with vuejs',
                    'slug' => 'website',
                    'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati quisquam labore ipsum facilis perferendis harum fuga error maxime placeat! Tenetur dolorem at dolor vero mollitia sint eaque, cumque nobis libero!',
                    'category_id' => 1,
                    'featured' => 'uploads/posts/1602262073work-1.jpg',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'user_id' => 1
                ]
            );
            
        }
       
    }
}
