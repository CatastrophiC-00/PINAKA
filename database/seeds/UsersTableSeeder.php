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
        $user = new App\User();
		$user->password = Hash::make('password');
		$user->email = 'test@test.com';
		$user->name = 'Admin';
		$user->save();
    }
}
