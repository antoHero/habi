<?php

use App\Models\Style;
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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->float('amount', 12,2)->nullable();
            $table->string('image')->nullable();
            $table->string('qty')->nullable();
            $table->unsignedBigInteger('accessory_id')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('sub_category_id')->nullable();
            $table->unsignedBigInteger('fabric_id')->nullable();
            $table->string('color')->nullable();
            $table->string('type')->nullable();
            $table->json('size')->nullable();
            $table->string('gallery')->nullable();
            $table->string('occasion')->nullable();
            $table->foreignIdFor(Style::class)->nullable();
            $table->string('material')->nullable();
            $table->string('slug')->nullable();
            $table->longText('detail')->nullable();
            $table->string('status')->default('INACTIVE');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
