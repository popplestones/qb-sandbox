<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $company = $this->faker->company();

        return [
            'given_name' => $this->faker->firstName(),
            'family_name' => $this->faker->lastName(),
            'fully_qualified_name' => $company,
            'company_name' => $company,
            'display_name' => $company,
            'print_on_check_name' => $company,
            'active' => $this->faker->boolean(),
            'taxable' => $this->faker->boolean(80),
            'job' => false,
            'bill_with_parent' => false,
            'currency_ref' => 'AUD',
            'preferred_delivery_method' => 'None',
            'is_project' => false
        ];
    }
}
