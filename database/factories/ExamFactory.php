<?php

namespace Database\Factories;

use App\Models\Exam;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExamFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Exam::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'subject' => $this->$faker->randomElement(['Cálculo', 'Química', 'Programación', 'Física', 'Administración']),
            'question' => 'pregunta ¿?',
            'answer' => $this->$faker->sentences(1,true),
            'qualification' => $this->$faker->randomElement(['Excelente: 90', 'Bien: 80', 'Regular: 70', 'Repetir'])
        ];
    }
}
