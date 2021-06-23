<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('cost_way_id')->nullable();
            $table->unsignedBigInteger('unit_id')->nullable();
            $table->unsignedBigInteger('type_id')->nullable();

            $table->integer('is_parent')->default(0)->nullable();
            $table->double('code');
            $table->string('image')->nullable();
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('cost_way_id')->references('id')->on('cost_ways');
            $table->foreign('unit_id')->references('id')->on('units');
            $table->foreign('type_id')->references('id')->on('products_types');

            $table->integer('active')->default(1);
            $table->integer('apply_taxes')->default(0);

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
        Schema::dropIfExists('categories');
    }
}
