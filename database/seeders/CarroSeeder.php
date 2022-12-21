<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Carro;

class CarroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $carros = [
            ['id' => 1 , 'conocido_id' =>1 , 'marca' => 'Ford'],
            ['id' => 2 , 'conocido_id' =>1 , 'marca' => 'Nisan'],
            ['id' => 3 , 'conocido_id' =>1 , 'marca' => 'Chevrolet'],
            ['id' => 4 , 'conocido_id' =>2 , 'marca' => 'Kia'],
            ['id' => 5 , 'conocido_id' =>3 , 'marca' => 'Tesla'],
            ['id' => 6 , 'conocido_id' =>3, 'marca' => 'Honda'],
        ];
        foreach ($carros as $carro) {
            $nuevo = Carro::create($carro);
        }    }
}
