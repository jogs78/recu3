<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Conocido;


class ConocidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $conocidos = [
            ['id' => 1 , 'usuario_id' =>1 , 'nombre' => 'Berenice'],
            ['id' => 2 , 'usuario_id' =>1 , 'nombre' => 'Bulmaro'],
            ['id' => 3 , 'usuario_id' =>2 , 'nombre' => 'Ciro'],
            ['id' => 4 , 'usuario_id' =>2 , 'nombre' => 'Consuelo'],
            ['id' => 5 , 'usuario_id' =>3 , 'nombre' => 'Deyanira'],
            ['id' => 6 , 'usuario_id' =>3 , 'nombre' => 'Dionicio'],
        ];
        foreach ($conocidos as $conocido) {
            $nuevo = Conocido::create($conocido);
        }
    }
}
