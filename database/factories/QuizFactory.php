<?php

namespace Database\Factories;

use App\Models\Quiz;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class QuizFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
protected $model = Quiz::class;

    public function definition()
    {
        return [
            'title'=>$this->faker->sentence(rand(3,7)),
            'description'=>$this->faker->text(100),
        ];
    }
}
