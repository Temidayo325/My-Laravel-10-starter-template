<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $answers = explode(',', $this->faker->realText($maxNbChars = 400, $indexSize = 5));
        return [
            'admission_number' => Str::random(10),
            'result' => rand(20, 100),
            'answers' => json_encode($answers),
        ];
    }
}
