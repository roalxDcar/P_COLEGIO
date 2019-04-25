<?php

use App\Config;
use Illuminate\Database\Seeder;

class ConfigsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Config::create([
        	'primer_intento' => 1,
        	'segundo_intento' => 3
        ]);
    }
}
