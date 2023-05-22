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
        Schema::create('employee', function (Blueprint $table) {
            $table->decimal('employee_id', 10, 0)->primary()->comment('Munkavállaó egyedi azonosítója');
            $table->string('first_name', 100)->comment('Munkavállaló keresztneve');
            $table->string('middle_name', 100)->nullable()->comment('Munkavállaló középső neve');
            $table->string('last_name', 100)->comment('Munkavállaló vezetékneve');
            $table->date('work_since')->comment('Munkavállalás kezdete');
            $table->date('work_until')->nullable()->comment('Munkavállalás vége');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee');
    }
};
