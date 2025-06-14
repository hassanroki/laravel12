<?php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'   => $this->faker->name(),
            'email'  => $this->faker->unique()->safeEmail(),
            'age'    => $this->faker->numberBetween(18, 60),
            'dob'    => $this->faker->date(), // Generates a valid date
            'gender' => $this->faker->randomElement(['m', 'f']),
            'scores' => $this->faker->numberBetween(1, 100),
        ];

    }
}
