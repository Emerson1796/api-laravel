<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CidadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $cidades = [
            ['nome' => 'Maceió', 'id_estado' => 2],
        ];

        foreach ($cidades as $cidade) {
            \App\Models\Cidade::create($cidade);
        }
    }
}
