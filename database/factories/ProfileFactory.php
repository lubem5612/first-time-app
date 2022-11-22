<?php

namespace Database\Factories;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use function Symfony\Component\String\width;

class ProfileFactory extends Factory
{

    protected $model = Profile::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id,
            'gender' => 'male',
            'photo_url' => $this->faker->imageUrl(360, 360, 'animals', true, 'dogs', true)
        ];
    }
}
