<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cliente::create([
            'cliente' => 'GMEX',
        ]);

        Cliente::create([
            'cliente' => '2',
        ]);

        Cliente::create([
            'cliente' => '3',
        ]);

        Cliente::create([
            'cliente' => '4',
        ]);

        Cliente::create([
            'cliente' => '5',
        ]);
    }
}
