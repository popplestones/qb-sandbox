<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;
use App\Models\Invoice;
use App\Models\InvoiceLine;

class InvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Create 0-10 invoices per customer
        Customer::each(function ($customer) {
            $customer->invoices()->createMany(
                Invoice::factory(mt_rand(0,10))->raw()
            );
        });


        // Add 1-3 lines per invoice
        Invoice::each(function($invoice) {
            $invoice->invoice_lines()->createMany(
                InvoiceLine::factory(mt_rand(1,3))->raw()
            );
        });

    }
}
