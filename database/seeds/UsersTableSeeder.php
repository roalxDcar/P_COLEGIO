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
        	'name' => 'Martin',
            'id_rol' => 1,
            'paternal' => 'Sinka',
            'maternal' => 'Castillo',
            'gender' => 'Masculino',
            'address' => 'Calle: Melchor Guzman',
            'ci' => '8400954',
            'cellphone' => '61155135',
        	'email' => 'sinkamartins@gmail.com',
        	'password' => bcrypt(12345678),
        ]);
    }
}
