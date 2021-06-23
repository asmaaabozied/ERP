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
            $table->foreignId('category_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('products_type_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('cost_way_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('discount_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('transport_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('currency_id')->nullable()->constrained()->nullOnDelete();


            $table->integer('parcode_product_type')->nullable();
            $table->string('model_product')->nullable();
            $table->integer('code_product_type')->nullable();
            $table->decimal('price',8,2)->default(0);
            $table->integer('greet_numper')->nullable();
            $table->integer('small_numper')->nullable();
            $table->integer('order_limit')->nullable();
            $table->integer('Consumer_price')->nullable();
            $table->integer('min_price_sell')->nullable();
            $table->integer('price_buy')->nullable();

            $table->string('image')->nullable();


            $table->unsignedBigInteger('unit_id');
            $table->foreign('unit_id')->references('id')->on('units')->onDelete('cascade');

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
        Schema::dropIfExists('porducts');
    }
}
