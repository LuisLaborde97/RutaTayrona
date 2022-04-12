<?php

namespace Database\Factories;

use App\Models\Tour;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tour>
 */
class TourFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     * 
     */

     protected $model = Tour::class;

    public function definition()
    {
        return [
             'nombre' => $this->faker->sentence(), 
             'descripcion' => $this->faker->paragraph(), 
             'precio' => $this->faker->randomElement([300, 500]), 
             'duracion' => $this->faker->randomElement([3,4,5]), 
             'estado' => $this->faker->numberBetween(0,1)
        ];
    }
}
