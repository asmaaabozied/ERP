<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCostWaysTranslationsTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cost_ways_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('cost_way_id');
            $table->string('locale')->index();
            $table->string('name');

            $table->unique(['cost_way_id', 'locale']);
            $table->foreign('cost_way_id')->references('id')->on('cost_ways')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cost_ways_translations_types');
    }
}
