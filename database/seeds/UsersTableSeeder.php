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
        factory(App\User::class, 'admin', 1)->create()->each(function ($user) {
            $user->user_additionals()->save(factory(App\UserAdditional::class, 'admin')->make());
            $user->roles()->save(factory(App\Role::class, 'admin')->make());
        });
    }
}
