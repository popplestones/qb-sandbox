<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'type' => ['shipping', 'billing'][mt_rand(0,1)],
            'line1' => $this->faker->streetAddress(),
            'line2' => null,
            'city' => $this->faker->city(),
            'country' => null,
            'state' => ['QLD', 'NSW', 'ACT', 'VIC', 'TAS', 'NT', 'SA', 'WA'][mt_rand(0,7)],
            'postal_code' => $this->faker->postcode(),
            'long' => $this->faker->longitude(),
            'lat' => $this->faker->latitude()
        ];
    }
}
