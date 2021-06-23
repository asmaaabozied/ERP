<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuaranteeTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guarantee_translations', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('guarantee_id');
            $table->string('locale')->index();

            $table->string('kind_guarantee')->nullable();


            $table->unique(['guarantee_id', 'locale']);
            $table->foreign('guarantee_id')->references('id')->on('guarantees')->onDelete('cascade');

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
        Schema::dropIfExists('guarantee_translations');
    }
}
