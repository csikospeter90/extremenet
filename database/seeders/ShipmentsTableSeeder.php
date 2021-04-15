<?php

namespace Database\Seeders;

use App\Models\Shipment;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ShipmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Shipment::create(['vaccine_id' => 1, 'quantity' => 1960125, 'arrival_date'=>Carbon::now()]);
        Shipment::create(['vaccine_id' => 2, 'quantity' => 216000, 'arrival_date'=>Carbon::now()]);
        Shipment::create(['vaccine_id' => 3, 'quantity' => 695500, 'arrival_date'=>Carbon::now()]);
        Shipment::create(['vaccine_id' => 4, 'quantity' => 28800, 'arrival_date'=>Carbon::now()]);
        Shipment::create(['vaccine_id' => 5, 'quantity' => 1225600, 'arrival_date'=>Carbon::now()]);
        Shipment::create(['vaccine_id' => 6, 'quantity' => 1100000, 'arrival_date'=>Carbon::now()]);
    }
}
