<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->date('date')->nullable();
            $table->string('statement')->nullable();
            $table->string('subproject')->nullable();
            $table->string('breakeevenvalue')->nullable();
            $table->integer('total_without_tax')->nullable();
            $table->integer('total_with_tax')->nullable();
            $table->integer('total')->nullable();

            
            $table->foreignId('warehouse_id')->nullable()->constrained()->onDelete('cascade');
            $table->foreignId('currency_id')->nullable()->constrained()->onDelete('cascade');
            
            $table->integer('vendor_id')->nullable();
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
        Schema::dropIfExists('purchases');
    }
}
