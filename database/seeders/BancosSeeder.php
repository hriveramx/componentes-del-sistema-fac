<?php

namespace Database\Seeders;

use App\Models\Banco;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BancosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Banco::create([
            'clabe' => '138',
            'abreviado' => 'ABC CAPITAL',
            'completo' => 'ABC Capital, S.A. I.B.M',
            'tipo' => 'R',
            'estatus' => '1',
        ]);
        Banco::create([
            'clabe' => '002',
            'abreviado' => 'BANAMEX',
            'completo' => 'Banco Nacional de México, S.A.',
            'tipo' => 'R',
            'estatus' => '1',
        ]);
        Banco::create([
            'clabe' => '072',
            'abreviado' => 'BANORTE',
            'completo' => 'Banco Mercantil del Norte, S.A.',
            'tipo' => 'R',
            'estatus' => '1',
        ]);

        
    }
}