<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = App\User::create([
            'name' => 'Lasha Palelashvili',
            'email' => 'falelashvili@gmail.com',
            'password' => bcrypt('123456'),
            'admin' => 1
        ]);

        App\Profile::create([
            'user_id' => $user->id,
            'avatar' => 'link to image',
            'about' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque, sed, tempora! Assumenda cum dolorem doloremque eligendi, eum facere fugiat hic libero, minima nihil placeat quas sequi sit veniam, voluptate voluptatum!',
            'facebook' => 'facebook.com',
            'youtube' => 'youtube.com'
        ]);
    }
}
