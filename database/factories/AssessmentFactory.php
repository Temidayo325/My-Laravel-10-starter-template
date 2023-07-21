<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Assessment>
 */
class AssessmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $answer_types = ['word', 'list'][rand(0,1)];
        $list_questions = ['']; 
        $word_questions = [];
        $list_answers = []; 
        $word_answers = []; 
        return [
            'question' => $this->faker->text($maxNbChars = 200),
            'answer' => $this->faker->text($maxNbChars = 400),
            'identifier' => Str::random(10),
            'parent_id' => rand(1,3),
            'answer_type' => $answer_types,
            // 'answer_type' => $this->faker->randomElement($array = array ('word','list')),
            'mark' => rand(5, 20)
        ];
    }
}
