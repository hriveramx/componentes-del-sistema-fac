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

        Empresaemisora::create([
            'razonsocial' => 'CONSTRUCTORA YACATE SAPI DE CV',
            'rfc' => 'CYA221206BS9',
            'nivel' => 'N3',
            'Grupo' => 'QMEX',

        ]);

        Empresaemisora::create([
            'razonsocial' => 'FREEMAN AND SONS SAÍ DE CV',
            'rfc' => 'FSO2306026J3',
            'nivel' => 'N3',
            'Grupo' => 'QMEX',

        ]);

        Empresaemisora::create([
            'razonsocial' => 'INSUMOS Y SERVICIOS TECNOBRA SAPI DE CV ',
            'rfc' => 'IST230602944',
            'nivel' => 'N3',
            'Grupo' => 'QMEX',

        ]);

        Empresaemisora::create([
            'razonsocial' => 'MERVALTEC SA DE CV',
            'rfc' => 'MER230522I75',
            'nivel' => 'N3',
            'Grupo' => 'QMEX',

        ]);

        Empresaemisora::create([
            'razonsocial' => 'PROID CONTROL SA DE CV',
            'rfc' => 'PCO230522TQA',
            'nivel' => 'N3',
            'Grupo' => 'QMEX',

        ]);
        
        Empresaemisora::create([
            'razonsocial' => 'COMERCIALIZADORA VEDDOJ SA DE CV',
            'rfc' => 'CVE2212144E1',
            'nivel' => 'N3',
            'Grupo' => 'QMEX',

        ]);
        
        Empresaemisora::create([
            'razonsocial' => 'FINANCIERA HIGH HILLS FBP SAPI DE CV ',
            'rfc' => 'FHH221206UGA ',
            'nivel' => 'N3',
            'Grupo' => 'QMEX',

        ]);
        
    }
}
