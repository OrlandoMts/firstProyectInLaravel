<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'email' => $this->faker->unique()->safeEmail,
            // 'email_verified_at' => now(),
            'password' => bcrypt('secret'), // password
            // 'remember_token' => Str::random(10),
            'name' => $this->faker->name,
            'lastName' => $this->faker->lastName,
            'motherLastName' => $this->faker->lastName,
            'phone' => '833-251-5482',
            'role' => $this->faker->randomElement(['student','teacher'])
        ];
    }
}
