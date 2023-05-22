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
        Schema::create('transmission', function (Blueprint $table) {
            $table->string('transmission_type_id', 2)->primary()->comment('Sebességváltó típus azonosítója');
            $table->string('transmission_type_description', 150)->comment('Sebességváltó fajta (automata, kézi) leírása');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transmission');
    }
};
