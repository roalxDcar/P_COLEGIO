<?php

use App\User;
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
        User::create([
        	'name' => 'Deynar Adir',
        	'email' => 'deynaradirmt@gmail.com',
        	'password' => bcrypt(12345678),
        ]);
        User::create([
            'name' => 'jaqui',
            'email' => 'jaqui@gmail.com',
            'password' => bcrypt(87654321),
        ]);
    }
}
