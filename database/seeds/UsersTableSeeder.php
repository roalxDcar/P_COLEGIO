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
        	'name' => 'Deyanr',
            'id_rol' => 1,
            'paternal' => 'Mamani',
            'maternal' => 'Tangara',
            'gender' => 'Masculino',
            'address' => 'Calle: Gregorio Garcia Lanza',
            'ci' => '12344321',
            'cellphone' => '78998700',
        	'email' => 'deynaradirmt@gmail.com',
        	'password' => bcrypt(12345678),
        ]);
    }
}
