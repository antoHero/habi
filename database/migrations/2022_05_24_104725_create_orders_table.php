<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('delivery_type');
            $table->unsignedBigInteger('user_id');
            $table->string('payment_type');
            $table->double(10, 2, 'order_amount');
            $table->string('status')->default('PENDING');
            $table->string('tracking_id');
            $table->string('reference');
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->string('address');
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->string('code')->nullable();
            $table->longText('note');
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
        Schema::dropIfExists('orders');
    }
};
