<?php

namespace Database\Factories;
use App\Models\User;
use Carbon\Carbon;
use Faker\Factory as Faker;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $user= User::all()->random();
        $faker = Faker::create();

        return [
            //
            'user_id' => $user->id,
            'name' => $user->name,
            'text' => $faker->text(99),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
