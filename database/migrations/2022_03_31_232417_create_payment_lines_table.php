<?php

use App\Models\Invoice;
use App\Models\Payment;
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
        Schema::create('payment_lines', function (Blueprint $table) {
            $table->id();
            $table->decimal('amount');
            $table->foreignIdFor(Invoice::class);
            $table->foreignIdFor(Payment::class);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payment_lines');
    }
};
