<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\AccountType;
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
        $name = $this->faker->word();
        
        return [
            'name' => $name,
            
            'description' => $this->faker->sentence(),
            'fully_qualified_name' => $name,
            'account_type' => AccountType::inRandomOrder()->first()->name,
            'active' => [true,false][mt_rand(0,1)],
            'currency_ref' => 'AUD',
            'sync' => true
        ];
    }
}
