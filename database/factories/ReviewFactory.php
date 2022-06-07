<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'comment'=>$this->faker->text(),
            'rating'=>$this->faker->randomElement([3,4,5]),
            'user_id'=>User::all()->random()->id
        ];
    }
}
