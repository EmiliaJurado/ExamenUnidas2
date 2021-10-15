<?php

namespace Database\Factories;

use App\Models\Libro;
use Illuminate\Database\Eloquent\Factories\Factory;

class LibroFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Libro::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Titulo'=> $this -> faker -> title(),
            'Autor'=> $this -> faker -> name(),
            'Editorial'=> $this -> faker -> title(),
            'Fecha_de_publicacion'=> $this -> faker -> date(),
            'Numero_de_paginas'=> $this -> faker -> randomNumber(),

        ];
    }
}
