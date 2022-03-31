<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Address;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::factory(5)->create()->each(function($customer) {
            $customer->shipping_address()->create(Address::factory()->raw(['type' => 'shipping']));
            $customer->billing_address()->create(Address::factory()->raw(['type' => 'billing']));
        });
    }
}
