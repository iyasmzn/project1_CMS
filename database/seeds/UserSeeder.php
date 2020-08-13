<?php

use App\Model\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create([
            'name'     => 'admin',
            'email'    => 'admin@admin',
            'password' => bcrypt('admin'),
            'role'     => 'admin',
        ]);
        User::create([
            'name'     => 'editor',
            'email'    => 'editor@editor',
            'password' => bcrypt('editor'),
            'role'     => 'editor',
        ]);
        User::create([
            'name'     => 'author',
            'email'    => 'author@author',
            'password' => bcrypt('author'),
            'role'     => 'author',
        ]);
    }
}
