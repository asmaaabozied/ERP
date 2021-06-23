<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBulkUnitProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bulkunit_product', function (Blueprint $table) {
            $table->id();
            $table->enum('symbol',['divide','multiply'])->default('multiply');
            $table->integer('quantity')->nullable();
            $table->decimal('price',8,2)->default(0);
            $table->integer('great_number')->nullable();
            $table->integer('small_number')->nullable();
            $table->integer('order_limit')->nullable();
            $table->integer('consumer_price')->nullable();
            $table->integer('min_price_sell')->nullable();
            $table->integer('price_buy')->nullable();

            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');

            $table->unsignedBigInteger('bulkunit_id');
            $table->foreign('bulkunit_id')->references('id')->on('bulk_units')->onDelete('cascade');

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
        Schema::dropIfExists('bulk_units_products');
    }
}
