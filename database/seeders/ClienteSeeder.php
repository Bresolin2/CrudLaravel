<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Models\ModelCliente;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(ModelCliente $cliente)
    {
        $cliente->create([
            'nome'=>'Felipe',
            'telefone'=>'54991008319',
            'email'=>'felipe.b@gmail.com'
        ]);
    }
}
