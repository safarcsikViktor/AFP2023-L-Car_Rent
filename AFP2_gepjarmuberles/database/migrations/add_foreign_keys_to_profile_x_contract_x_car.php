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
        Schema::table('profile_x_contract_x_car', function (Blueprint $table) {
            $table->foreign(['car_id'], 'pcc_car_fk')->references(['car_id'])->on('car');
            $table->foreign(['profile_id'], 'pcc_profile_fk')->references(['profile_id'])->on('profile');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('profile_x_contract_x_car', function (Blueprint $table) {
            $table->dropForeign('pcc_car_fk');
            $table->dropForeign('pcc_profile_fk');
        });
    }
};
