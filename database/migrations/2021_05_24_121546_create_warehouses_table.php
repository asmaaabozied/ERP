<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWarehousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('warehouses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('country_id')->nullable();
            $table->unsignedBigInteger('city_id')->nullable();
            $table->unsignedBigInteger('district_id')->nullable();
            $table->unsignedBigInteger('branch_id')->nullable();
            $table->unsignedBigInteger('employ_id')->nullable();
            $table->unsignedBigInteger('voucher_id')->nullable();
            $table->string('store_first')->nullable();
            $table->string('store_last')->nullable();
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->unsignedBigInteger('in_foriegn')->nullable();
            $table->unsignedBigInteger('out_foriegn')->nullable();

            $table->foreign('country_id')->references('id')->on('countries');
            $table->foreign('city_id')->references('id')->on('cities');
            $table->foreign('district_id')->references('id')->on('districts');
            $table->foreign('branch_id')->references('id')->on('branches');
            $table->foreign('employ_id')->references('id')->on('employes');
            $table->foreign('voucher_id')->references('id')->on('vouchers');
            $table->foreign('parent_id')->references('id')->on('warehouses');
            $table->foreign('in_foriegn')->references('id')->on('vouchers');
            $table->foreign('out_foriegn')->references('id')->on('vouchers');
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
        Schema::dropIfExists('warehouses');
    }
}
