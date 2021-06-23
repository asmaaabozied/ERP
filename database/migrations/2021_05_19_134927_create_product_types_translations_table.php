<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTypesTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_types_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('product_type_id');
            $table->string('locale')->index();
            $table->string('name');
            $table->unique(['product_type_id', 'locale']);
            $table->foreign('product_type_id')->references('id')->on('products_types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_types_translations');
    }
}
