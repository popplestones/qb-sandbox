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
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description')->nullable();
            $table->string('sub_account')->nullable();
            $table->string('fully_qualified_name')->nullable();
            $table->boolean('active')->default(false);
            $table->string('classification')->nullable();
            $table->string('account_type')->nullable();
            $table->string('account_sub_type')->nullable();
            $table->string('currency_ref')->default('AUD');
            $table->string('qb_account_id')->nullable();
            $table->integer('sync_failed')->default(0);
            $table->boolean('sync')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accounts');
    }
};
