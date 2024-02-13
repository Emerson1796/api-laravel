<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EstadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $estados = [
            ['nome' => 'Acre', 'sigla' => 'AC'],
            ['nome' => 'Alagoas', 'sigla' => 'AL'],
        ];

        foreach ($estados as $estado) {
            \App\Models\Estado::create($estado);
        }
    }
}
