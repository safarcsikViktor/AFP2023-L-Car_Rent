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
        Schema::create('incidents', function (Blueprint $table) {
            $table->decimal('incident_id', 10, 0)->primary()->comment('A tábla egyedi azonosítója');
            $table->decimal('car_id', 10, 0)->index('incident_car_fk')->comment('Az autó egyedi azonosítója');
            $table->string('incident_description', 500)->nullable()->comment('Káresemény leírása');
            $table->string('contract_id', 20)->nullable()->comment('Bérleti szerződés egyei azonosítója, amely szerződés időtartama alatt a káresemény történt.');
            $table->decimal('damage_value', 10, 0)->nullable()->comment('Kár mértéke (Forint)');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('incidents');
    }
};
