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
        Schema::create('general_details', function (Blueprint $table) {
            $table->id();
            $table->string('site_name')->nullable();
            $table->string('logo')->nullable();
            $table->longText('about_us')->nullable();
            $table->longText('contact_us')->nullable();
            $table->longText('misson')->nullable();
            $table->longText('vision')->nullable();
            $table->longText('what_we_do')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('address')->nullable();
            $table->string('phone1')->nullable();
            $table->string('phone2')->nullable();
            $table->string('phone3')->nullable();
            $table->timestamps();
        });

        DB::table('general_details')->insert(
            array(
                'site_name' => 'Habi Clothiers',
                'about_us' => 'content coming soon...',
                'contact_us' => 'content coming soon...',
                'misson' => 'content coming soon...',
                'vision' => 'content coming soon...',
                'what_we_do' => 'content coming soon...',
                'facebook' => '#',
                'twitter' => '#',
                'instagram' => '#',
                'address' => 'Apo Resettlement',
                'phone1' => '(+234)80973822',
                'phone2' => '(+234)908734543',
                'phone3' => '(+234)90873822',
            ) 
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('general_details');
    }
};
