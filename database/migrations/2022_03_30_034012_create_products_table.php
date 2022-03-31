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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description')->nullable();
            $table->boolean('active')->default(true);
            $table->boolean('sub_item')->default(false);
            $table->string('parent_ref')->nullable();
            $table->integer('level')->nullable();
            $table->string('fully_qualified_name')->nullable();
            $table->boolean('taxable')->default(true);
            $table->boolean('sales_tax_included')->default(false);
            $table->string('unit_price')->nullable();
            $table->string('type')->default('Category');
            $table->string('income_account_ref')->nullable();
            $table->boolean('purchase_tax_included')->default(false);
            $table->string('purchase_cost')->nullable();
            $table->string('expense_account_ref')->nullable();
            $table->boolean('track_qty_on_hand')->default(false);
            $table->string('qty_on_hand')->nullable();
            $table->string('sales_tax_code_ref')->nullable();
            $table->string('purchase_tax_code_ref')->nullable();
            $table->string('qb_product_id')->nullable();
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
        Schema::dropIfExists('products');
    }
};
