<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
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
            $table->uuid('uuid')->unique();
            $table->string('code_product')->unique();
            $table->string('name_product');
            $table->double('vendor_price_product');
            $table->double('profit_product')->nullable();
            $table->text('data')->nullable();
            $table->foreignUuid('vendor_uuid')->nullable();
            $table->foreignUuid('category_uuid')->nullable();
            $table->foreignUuid('sub_category_uuid')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('category_uuid')->references('uuid')->on('categories');
            $table->foreign('sub_category_uuid')->references('uuid')->on('sub_categories');

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
}
