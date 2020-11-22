<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->json('name');
            $table->json('currency');
            $table->integer('tax');
            // $table->string('img');
            $table->string('zip_code')->unique();
            $table->integer('price_of_first_ten_kilo');
            //after the ten kilo
            $table->integer('price_for_kilo');
            // هذا بدك تضيفه في المودل انه نسبة عامة على مزودي الخدمة ككل
            $table->integer('profitRatio');
            //for postal code validation
            $table->string('country_code')->unique()->nullable();
            $table->double('longitude')->nullable();
            $table->double('latitude')->nullable();
            $table->boolean('status')->default(true);
            $table->softDeletes();
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
        Schema::dropIfExists('countries');
    }
}
