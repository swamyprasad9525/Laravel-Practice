<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon; //mandatory for using carbon date and time
/**
 * @extends Factory<Student>
 */
class studentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'name' => $this->faker->name(),
            'email' => $this->faker->safeEmail(),
            'subject' => $this->faker->randomElement(['Mathematics', 'Science', 'English', 'History']),
            'created_at' =>Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
