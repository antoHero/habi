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
        Schema::create('measurements', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->float('chest')->nullable();
            $table->float('neck')->nullable();
            $table->float('shoulder')->nullable();
            $table->float('arm_length')->nullable();
            $table->float('men_bicep')->nullable();
            $table->float('men_wrist')->nullable();
            $table->float('back_length')->nullable();
            $table->float('stomach')->nullable();
            $table->float('waist')->nullable();
            $table->float('hip')->nullable();
            $table->float('crouch')->nullable();
            $table->float('thigh')->nullable();
            $table->float('bust')->nullable();
            $table->float('shoulder_bust')->nullable();
            $table->float('full_height')->nullable();
            $table->float('waist_to_floor_length')->nullable();
            $table->float('ankle')->nullable();
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
        Schema::dropIfExists('measurements');
    }
};
