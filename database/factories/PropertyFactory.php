<?php

namespace Database\Factories;

use App\Models\Broker;
use App\Models\Property;
use Illuminate\Database\Eloquent\Factories\Factory;

class PropertyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Property::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->title,
            'address_1' => $this->faker->streetAddress,
            'address_2' => $this->faker->streetName,
            'city' => $this->faker->city,
            'state' => $this->faker->title,
            'zip' => $this->faker->postcode,
            'bath' => $this->faker->randomDigit(),
            'bed' => $this->faker->randomDigit(),
            'year' => $this->faker->year(),
            'broker_id' => Broker::all()->random()->id
        ];
    }
}
