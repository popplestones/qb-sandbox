<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Account>
 */
class AccountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'description' => $this->faker->sentence(),
            'sub_account' => null,
            'fully_qualified_name' => $this->faker->name(),
            'active' => [true,false][mt_rand(0,1)],
            'classification' => null,
            'account_type' => null,
            'account_sub_type' => null,
            'currency_ref' => 'AUD',
            'qb_account_id' => null,
            'sync' => true
        ];
    }
}
