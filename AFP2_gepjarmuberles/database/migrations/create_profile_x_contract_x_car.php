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
        Schema::create('profile_x_contract_x_car', function (Blueprint $table) {
            $table->decimal('profile_id', 10, 0)->comment('Regisztrált felhasználó egyedi azonosítója');
            $table->decimal('car_id', 10, 0)->index('pcc_car_fk')->comment('Bérelt autó egyedi azonosítója');
            $table->string('contract_id', 20)->comment('Szerződés egyedi azonosítója');

            $table->primary(['profile_id', 'contract_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profile_x_contract_x_car');
    }
};
