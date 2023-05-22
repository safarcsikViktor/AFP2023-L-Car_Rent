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
        Schema::create('fuel_type', function (Blueprint $table) {
            $table->char('fuel_type_id', 1)->primary()->comment('Üzemeanyagtípus (benzin, dízel, hibrid, elektromos) azonosítója');
            $table->string('fuel_type_description', 150)->comment('Üzemanyagtípus megnevezése');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fuel_type');
    }
};
