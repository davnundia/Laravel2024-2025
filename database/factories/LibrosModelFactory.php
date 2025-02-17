<?php

namespace Database\Factories;

use App\Models\LibrosModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LibrosModel>
 */
class LibrosModelFactory extends Factory
{
    protected $model = LibrosModel::class;

    public function definition()
    {
        return [
            'titulo' => $this->faker->sentence,
            'paginas' => $this->faker->numberBetween(100, 500),
            'editorial' => $this->faker->company,
            'autor' => $this->faker->name,
        ];
    }
}
?>