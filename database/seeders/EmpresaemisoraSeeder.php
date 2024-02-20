<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Empresaemisora;
class EmpresaemisoraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Empresaemisora::create([
            'razonsocial' => 'TELEMARKETING & BRANDING SA DE CV',
            'rfc' => 'TAB160620TN9',
            'nivel' => 'N1',
            'grupo' => 'GMEX',
        ]);

        Empresaemisora::create([
            'razonsocial' => 'TMB BOSS MARKETER SA DE CV',
            'rfc' => 'TMB1606224X1',
            'nivel' => 'N3',
            'grupo' => 'QMEX',
        ]);

        Empresaemisora::create([
            'razonsocial' => 'MERVALTEC SA DE CV',
            'rfc' => 'MER230522175',
            'nivel' => 'N3',
            'grupo' => 'QMEX',
        ]); 
    }
}
