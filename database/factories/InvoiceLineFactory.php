<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\InvoiceLine>
 */
class InvoiceLineFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $qty = mt_rand(1, 5);
        $price = mt_rand(100, 10000) / 100;
        return [
            'qty' => $qty,
            'unit_price' =>  $price,
            'amount' => $price * $qty,
            'description' => $this->faker->words(3,true),
        ];
    }
}
