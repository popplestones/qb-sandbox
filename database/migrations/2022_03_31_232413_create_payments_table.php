<?php

use App\Models\Account;
use App\Models\Customer;
use App\Models\PaymentMethod;
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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Customer::class);
            $table->foreignIdFor(Account::class);
            $table->foreignIdFor(PaymentMethod::class)->nullable();
            $table->decimal('total_amount')->default(0);
            $table->string('qb_payment_id')->nullable();
            $table->string('private_note')->nullable();
            $table->decimal('unapplied_amount')->default(0);
            $table->date('transaction_date')->nullable();
            $table->string('currency_ref')->default('AUD');
            $table->string('exchange_rate')->default('1');
            $table->boolean('sync')->default(true);
            $table->integer('sync_failed')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
};
