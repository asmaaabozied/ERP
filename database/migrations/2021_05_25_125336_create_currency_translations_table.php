<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCurrencyTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('currency_translations', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('currency_id');
            $table->string('locale')->index();

            $table->string('name')->nullable();

            $table->unique(['currency_id', 'locale']);
            $table->foreign('currency_id')->references('id')->on('currencies')->onDelete('cascade');

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
        Schema::dropIfExists('currency_translations');
    }
}
