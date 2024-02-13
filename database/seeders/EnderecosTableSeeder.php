<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EnderecosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        \App\Models\Endereco::create([
            'id_usuario' => 1,
            'logradouro' => 'Rua Exemplo',
            'numero' => '123',
            'complemento' => 'Apto 1',
            'cep' => '12345-678',
            'id_cidade' => 1,
        ]);
    }
}
