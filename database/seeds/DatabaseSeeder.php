<?php

use App\Entities\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Entities\User::class)->create([
            'username' => 'admin',
            'email' => 'admin@example.com',
            'role' => 'admin'
        ]);

        factory(\App\Entities\User::class)->create([
            'username' => 'user',
            'email' => 'user@example.com',
            'role' => 'user'
        ]);

        factory(\App\Entities\User::class, 5)->create();
    }
}
