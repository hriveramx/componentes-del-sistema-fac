<?php

namespace Database\Seeders;

use App\Models\Broker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrokersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Broker::create([
            'broker' => 'Broker 1'
        ]);

        Broker::create([
            'broker' => 'Broker 2'
        ]);

        Broker::create([
            'broker' => 'Broker 3'
        ]);

        Broker::create([
            'broker' => 'Broker 4'
        ]);

        Broker::create([
            'broker' => 'Broker 5'
        ]);
    }
}
