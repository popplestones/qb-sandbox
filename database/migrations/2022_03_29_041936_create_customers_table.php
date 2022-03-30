<?php

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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('given_name')->nullable();
            $table->string('family_name')->nullable();
            $table->string('fully_qualified_name');
            $table->string('company_name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('display_name');
            $table->string('print_on_check_name');
            $table->boolean('active')->default(true);
            $table->boolean('taxable')->default(true);
            $table->boolean('job')->default(false);
            $table->boolean('bill_with_parent')->default(false);
            $table->string('currency_ref')->nullable();
            $table->string('preferred_delivery_method')->default('None');
            $table->boolean('is_project')->default(false);
            $table->string('primary_email_addr')->nullable();

            $table->string('qb_customer_id')->nullable();
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
        Schema::dropIfExists('customers');
    }
};
