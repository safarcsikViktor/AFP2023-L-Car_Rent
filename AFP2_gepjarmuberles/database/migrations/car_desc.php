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
        Schema::create('car_description', function (Blueprint $table) {
            $table->decimal('car_id', 10, 0)->primary()->comment('Gépjármű egyedi azonosítója');
            $table->decimal('manufacturing_year', 10, 0)->comment('Gyártási év');
            $table->string('car_description', 150)->comment('Gépjármű típusának leírása');
            $table->string('car_category', 2)->index('car_desc_car_category_fk')->comment('Gépjármű típusának megnevezése');
            $table->string('transmission_type', 2)->index('car_desc_transmission_fk')->comment('Sebességváltó típusa');
            $table->char('fuel_type', 1)->index('car_desc_fuel_type_fk')->comment('Üzemanyag típusa');
            $table->decimal('engine_power', 10, 0)->nullable()->comment('Motor teljesítménye');
            $table->string('air_conditining', 1)->nullable()->comment('Légkondícionáló');
            $table->string('gps', 1)->nullable()->comment('GPS');
            $table->decimal('number_of_doors', 10, 0)->nullable()->comment('Ajtók száma');
            $table->decimal('number_of_seats', 10, 0)->nullable()->comment('Ülések száma');
            $table->string('packages', 20)->nullable()->comment('Elhelyezhető csomagok');
            $table->decimal('rental_fee', 10, 0)->nullable()->comment('Bérleti díj összege / nap');
            $table->string('reg_num', 10)->comment('A gépjármű rendszáma');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('car_description');
    }
};
