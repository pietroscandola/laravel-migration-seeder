<?php

use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $train = new Train();
        $train->company = 'Trenitalia';
        $train->departure_station = 'Verona';
        $train->arrival_station = 'Milano';
        $train->departure_time = '14:00';
        $train->arrival_time = '16:00';
        $train->train_code_number = '12345678';
        $train->carriages = 6;
        $train->on_time = true;
        $train->cancelled = false;

        $train->save();
    }
}
