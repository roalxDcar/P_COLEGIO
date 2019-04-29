<?php

use App\Punishment;
use Illuminate\Database\Seeder;

class PunishmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Punishment::create([
        	'punishment1' => 1,
        	'punishment2' => 3,
        ]);
    }
}
