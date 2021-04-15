<?php

namespace Database\Seeders;

use App\Models\Vaccine;
use Illuminate\Database\Seeder;

class VaccinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vaccine::create(['name' => 'Pfizer-BioNtech']);
        Vaccine::create(['name' => 'Moderna']);
        Vaccine::create(['name' => 'AstraZeneca']);
        Vaccine::create(['name' => 'Janssen']);
        Vaccine::create(['name' => 'Szputnyik']);
        Vaccine::create(['name' => 'Sinopharm']);
    }
}
