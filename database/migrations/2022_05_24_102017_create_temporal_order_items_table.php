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
        Schema::create('temporal_order_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('temporal_order_id');
            $table->unsignedBigInteger('product_id');
            $table->string('name');
            $table->float('amount')->nullable();
            $table->integer('qty');
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
        Schema::dropIfExists('temporal_order_items');
    }
};
