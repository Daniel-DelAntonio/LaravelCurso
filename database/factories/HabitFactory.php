<?php

namespace Database\Factories;

use App\Models\Habit;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Habit>
 */
class HabitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $habits = [
            'Ler 5 paginas',
            'Exercitar-se por 30 minutos',
            'Escrever 1000 palavras',
            'Beber 2 litros de água',
            'Dormir 8 horas',
            'Meditar por 15 minutos',
        ];
        return [
            'user_id' => 1,
            'name' => $this->faker->unique()->randomElement($habits),
        ];
    }
}
