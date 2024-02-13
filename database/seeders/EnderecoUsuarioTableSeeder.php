<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Usuario;
use App\Models\Endereco;

class EnderecoUsuarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $usuarios = Usuario::all();
        $enderecos = Endereco::all()->pluck('id');

        foreach ($usuarios as $usuario) {
            $usuario->enderecos()->attach($enderecos->random());
        }
    }
}
