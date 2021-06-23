<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart_translations', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('cart_id');
            $table->string('locale')->index();

            $table->string('name')->nullable();
            $table->string('name_type')->nullable();

            $table->unique(['cart_id', 'locale']);
            $table->foreign('cart_id')->references('id')->on('carts')->onDelete('cascade');


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
        Schema::dropIfExists('cart_translations');
    }
}
