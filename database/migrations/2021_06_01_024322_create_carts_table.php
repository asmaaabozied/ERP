<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->integer('limited_money')->nullable();//
            $table->enum('Account_Category', ['عميل', 'مورد','موظف','مزدوج', 'نقدى', 'اخرى'])->default('عميل');//
            $table->boolean('isActive')->default(1);//
            $table->text('Note')->nullable();//
            $table->integer('Credit_limit')->nullable();//
            $table->integer('Balance_relay')->nullable();//

            $table->string('address')->nullable();
            $table->bigInteger('phone_number1')->nullable();
            $table->bigInteger('phone_number2')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('iban')->nullable();
            $table->string('bank_account_number')->nullable();
            $table->string('tax_registration_number')->nullable();
            $table->enum('type', ['رئيسي', 'فرعي'])->default('رئيسي');

            $table->foreignId('employe_id')->constrained()->cascadeOnDelete();
            $table->foreignId('currency_id')->constrained()->cascadeOnDelete();
            $table->foreignId('vip_id')->constrained()->cascadeOnDelete();
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
        Schema::dropIfExists('carts');
    }
}
