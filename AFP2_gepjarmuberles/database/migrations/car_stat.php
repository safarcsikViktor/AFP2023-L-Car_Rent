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
        Schema::create('car_status', function (Blueprint $table) {
            $table->char('status_id', 1)->primary()->comment('Autó státuszok azonosítója');
            $table->string('status_description', 100)->comment('Autó státuszok leírása (elérhető/ bérelhető, megsérült, szervíz alatt, bérlés alatt)');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('car_status');
    }
};
