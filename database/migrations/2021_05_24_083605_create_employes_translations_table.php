<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployesTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employes_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employ_id');
            $table->string('locale')->index();
            $table->string('name');
            $table->string('title');
            
            $table->unique(['employ_id', 'locale']);
            $table->foreign('employ_id')->references('id')->on('employes')->onDelete('cascade');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employe_translations');
    }
}
