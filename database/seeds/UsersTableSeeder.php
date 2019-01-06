<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'username' => 'admin',
            'email' => 'admin@example.com',
        ]);
        factory(User::class)->create([
            'username' => 'super-admin',
            'email' => 'super-admin@example.com',
        ]);
        factory(User::class)->create([
            'username' => 'master',
            'email' => 'master@example.com',
        ]);
        factory(User::class, 20)->create();
    }
}
