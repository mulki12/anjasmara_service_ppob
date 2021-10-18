<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction_histories', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->double('selling_price_history');
            $table->foreignUuid('product_uuid')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('product_uuid')->references('uuid')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ppob_histories');
    }
}
