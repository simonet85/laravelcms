<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = App\User::create([

            'name' => 'chris',
            'email' => 'christian.85@live.fr',
            'password' => bcrypt('PointyGoose.1985'),
            'admin' => 1

        ]);

        App\Profile::create([

            'user_id' => $user->id,

            'avatar' => 'uploads/avatar/jasonpic.jpg',

            'about'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus totam a porro deserunt dignissimos possimus, ea, iste harum placeat eaque maxime dolorem? Cum voluptas, eum quis laudantium iste praesentium itaque.
            ',

            'facebook'=>'facebook.com',

            'youtube'=>'youtube.com'

        ]);
    }
}
