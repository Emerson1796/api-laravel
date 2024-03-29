<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        \App\Models\Usuario::create([
            'nome' => 'Nome do Usuário',
            'email' => 'email@exemplo.com',
        ]);
    }
}
