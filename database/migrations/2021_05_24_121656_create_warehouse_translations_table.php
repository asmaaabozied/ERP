<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWarehouseTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('warehouse_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('warehouse_id');
            $table->string('locale')->index();
            $table->string('ware_name');
            $table->string('address')->nullable();
            $table->string('notes')->nullable();
    
            $table->unique(['warehouse_id', 'locale']);
            $table->foreign('warehouse_id')->references('id')->on('warehouses')->onDelete('cascade');


           
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
        Schema::dropIfExists('warehouse_translations');
    }
}
