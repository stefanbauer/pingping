<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $user = factory(\App\User::class)->create([
            'email' => 'admin@pingping.io',
            'password' => bcrypt('secret'),
        ]);

        factory(\App\Service::class, 10)->create([
            'user_id' => $user->id,
        ]);
    }
}
