<?php

namespace App\Providers;

use App\Models\Account;
use App\Models\Customer;
use App\Models\Invoice;
use App\Models\Item;
use App\Models\Product;
use Illuminate\Support\ServiceProvider;
use Popplestones\Quickbooks\Facades\CallbackManager;
use Popplestones\Quickbooks\Services\QuickbooksHelper;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        CallbackManager::registerAccounts(
            fn() => Account::query(),
            fn($q) => $q->whereNull('qb_account_id')->whereSync(true)
        );

        CallbackManager::registerCustomers(
            fn() => Customer::query()->with(['shipping_address', 'billing_address']),
            fn($q) => $q->whereNull('qb_customer_id')->whereSync(true)
        );

        CallbackManager::registerItems(
            fn() => Product::query(),
            fn($q) => $q->whereNull('qb_product_id')->whereSync(true)
        );
    }


}
