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
        Schema::create('history', function (Blueprint $table) {
            $table->decimal('car_id', 10, 0)->comment('Gépjármű egyedi azonosítója');
            $table->string('contract_id', 20)->comment('Bérleti szerződés egyedi azonosítója');
            $table->date('date_from')->comment('Szerződés kezdete');
            $table->date('date_to')->comment('Szerződés vége dátum');
            $table->decimal('incident_id', 10, 0)->nullable()->comment('Káresemény azonosítója');

            $table->primary(['car_id', 'contract_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('history');
    }
};
