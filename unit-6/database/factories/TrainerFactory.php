<?php

namespace Database\Factories;

use App\Models\Trainer;//it is already imported at top
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Trainer>
 */
class TrainerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // faker
            'name'=>$this->faker->name(),
            'email'=>$this->faker->safeEmail()
            

        ];
    }
}
