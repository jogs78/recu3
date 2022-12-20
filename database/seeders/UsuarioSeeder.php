<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Usuario;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nuevo = Usuario::create(['id'=>1, 'seudonimo' => 'benito', 'clave' => bcrypt("paso") , 'nombre' => 'Benito Juarez Garcia' ]);
        $nuevo = new Usuario();
        $nuevo->id = 2;
        $nuevo->seudonimo = "carlos";
        $nuevo->clave = bcrypt("paso") ;
        $nuevo->nombre="Carlos I de España";
        $nuevo->save();
        DB::table('usuarios')->insert(
            ['id'=>3, 'seudonimo' => 'daniel', 'clave' => bcrypt("paso") , 'nombre' => 'Daniel Jacob Cliffe' ]
        );

//        $nuevo = Usuario::create(['id'=>4, 'seudonimo' => 'benito', 'clave' => bcrypt("paso") , 'nombre' => 'Benito Segundo' ]);
    }

}
