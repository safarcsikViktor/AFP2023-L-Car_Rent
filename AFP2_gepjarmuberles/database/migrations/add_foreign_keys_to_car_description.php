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
        Schema::table('car_description', function (Blueprint $table) {
            $table->foreign(['car_category'], 'car_desc_car_category_fk')->references(['car_category'])->on('car_category');
            $table->foreign(['fuel_type'], 'car_desc_fuel_type_fk')->references(['fuel_type_id'])->on('fuel_type');
            $table->foreign(['car_id'], 'car_desc_car_fk')->references(['car_id'])->on('car');
            $table->foreign(['transmission_type'], 'car_desc_transmission_fk')->references(['transmission_type_id'])->on('transmission');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('car_description', function (Blueprint $table) {
            $table->dropForeign('car_desc_car_category_fk');
            $table->dropForeign('car_desc_fuel_type_fk');
            $table->dropForeign('car_desc_car_fk');
            $table->dropForeign('car_desc_transmission_fk');
        });
    }
};
