<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePointofsaleTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pointofsales_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pointofsale_id');
            $table->string('locale')->index();
            $table->string('point_name');
            
    
            $table->unique(['pointofsale_id', 'locale']);
            $table->foreign('pointofsale_id')->references('id')->on('pointofsales')->onDelete('cascade');
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
        Schema::dropIfExists('pointofsale_translations');
    }
}
