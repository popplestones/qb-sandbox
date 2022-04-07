<?php

use App\Models\Address;
use App\Models\Customer;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Customer::class);
            $table->string('currency_ref')->default('AUD');
            $table->string('exchange_rate')->default('1');
            $table->string('bill_email')->nullable();
            $table->date('transaction_date');
            $table->foreignIdFor(Address::class, 'ship_from_address')->nullable();
            $table->foreignIdFor(Address::class, 'ship_address')->nullable();
            $table->foreignIdFor(Address::class, 'bill_address')->nullable();
            $table->date('ship_date')->nullable();
            $table->string('tracking_num')->nullable();
            $table->date('due_date')->nullable();
            $table->text('private_note')->nullable();
            $table->string('customer_memo')->nullable();
            $table->string('ship_method')->nullable();
            $table->boolean('apply_tax_after_discount')->default(false);
            $table->decimal('total_amount');
            $table->string('qb_invoice_id')->nullable();
            $table->boolean('sync')->default(true);
            $table->integer('sync_failed')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
};
