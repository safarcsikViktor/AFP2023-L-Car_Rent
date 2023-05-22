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
        Schema::create('car_category', function (Blueprint $table) {
            $table->string('car_category', 2)->primary()->comment('Gépjármű típusa (B, P, ...)');
            $table->string('car_category_description', 150)->comment('Gépjármű típus leírása');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('car_category');
    }
};
