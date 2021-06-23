<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOptionValuesTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('option_values_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('option_value_id');
            $table->string('locale')->index();
            $table->string('name');
            
            $table->unique(['option_value_id', 'locale']);
            $table->foreign('option_value_id')->references('id')->on('option_values')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('values_translations');
    }
}
