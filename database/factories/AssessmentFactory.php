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
        $random_number = rand(0,1);
        $answer_type = ['word', 'list'][rand(0,1)];
        $list_questions = ['Explain any three factors that determine the size of a country’s labour force', 'Explain any three reasons that account for differences in wages paid to different categories of labour in different occupations.']; 
        $word_questions = ['Define labour', 'What is central bank?'];
        $list_answers = [
                ['The size of the population and population growth rate: large population and high rate of population growth cause the size of the labour force to increase and vice versa.', 'The age structure of the population: If the population is largely made up of people in the working age, size of the labour force will be large and vice versa.', 'Official age of entry into employment: If this is reduced, the labour force will be large. Also if the age of retirement is raised, the size of the labour force will increase and vice versa.', 'If the number of professional students who stay longer in school is high, the size of labour will be low and vice versa', 'The size of the disabled or physically challenged: If the population has a large number of the disabled, the size of the labour force will be low and vice versa.', 'Wage rate: If the wage rate is high, more people will be attracted from self employment and voluntary retirement to look for job.'
                ],
                [
                    'Labour may be defined as man’s mental and physical efforts geared to production of goods and services', 'Cost of training; If the amount spent to acquire the qualification is high, wage rate will also be high to compensate for the amount spent in course of training','Rigid and difficult entry requirements reduce the size of labour and thereby cause wage rate to rise.', 'Degree of responsibility: If this is high, labour has to be highly compensated e.g Surgeons.', 'Degree of risk involved: If the job is more risky, it requires high wage to encourage people to take such risk e.g. Airline pilots, Ship captains etc.'
                ]
            ]; 
        $word_answers = ['Labour may be defined as man’s mental and physical efforts geared to production of goods and services', 'A central bank is a government-owned bank responsible for supervising and controlling the monetary and financial system of a country.']; 
        return [
            'question' => ($answer_type === 'word') ? $word_questions[$random_number] : $list_questions[$random_number], #$this->faker->text($maxNbChars = 200),
            'answer' => ($answer_type === 'word') ? $word_answers[$random_number] : json_encode($list_answers[$random_number]),#$this->faker->text($maxNbChars = 400),
            'identifier' => Str::random(10),
            'parent_id' => rand(1,3),
            'answer_type' => $answer_type,
            // 'answer_type' => $this->faker->randomElement($array = array ('word','list')),
            'mark' => rand(5, 20)
        ];
    }
}
