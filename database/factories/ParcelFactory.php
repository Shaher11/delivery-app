<?php

namespace Database\Factories;

use App\Models\Parcel;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ParcelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Parcel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'sender_id' => User::inRandomOrder()->first()->id,
            'pick_up_point' => rtrim( ucfirst($this->faker->text(20)), '.'),
            'drop_off_point' => rtrim( ucfirst($this->faker->text(20)), '.'),
            'code' => $this->faker->numerify('#####'), 
            'description' => $this->faker->sentence(), 
            'longitude' => $this->faker->longitude(), 
            'latitude' => $this->faker->latitude(), 
        ];
    }
}
