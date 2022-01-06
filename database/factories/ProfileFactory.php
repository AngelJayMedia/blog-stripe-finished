<?php

namespace Database\Factories;

use App\Models\Profile;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProfileFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Profile::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'bio'           => $this->faker->paragraph(),
            'facebook'      => $this->faker->url(),
            'twitter'       => $this->faker->url(),
            'instagram'     => $this->faker->url(),
            'linkedin'      => $this->faker->url(),
        ];
    }
}
