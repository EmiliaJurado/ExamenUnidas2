<?php

namespace Database\Seeders;

use App\Models\Libro;
use Illuminate\Database\Seeder;

class LibroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hw = new Libro();
        $hw->Titulo = "La llorona";
        $hw->Autor = "Leonardo";
        $hw->Editorial = "Mexico";
        $hw->Fecha_de_publicacion = "12/12/2009";
        $hw->Numero_de_paginas = "121";
        $hw->save();
    }
}
