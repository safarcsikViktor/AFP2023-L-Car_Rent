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
        Schema::create('car', function (Blueprint $table) {
            $table->decimal('car_id', 10, 0)->primary()->comment('Gépjármű egyedi azonosítója');
            $table->char('status', 1)->index('car_status_fk')->comment('Gépjármű aktuális státusza');
            $table->binary('photo')->nullable()->comment('Fénykép');
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
        Schema::dropIfExists('car');
    }
};
