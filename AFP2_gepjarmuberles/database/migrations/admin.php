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
        Schema::create('admin', function (Blueprint $table) {
            $table->decimal('admin_id', 10, 0)->primary()->comment('A tábla egyedi azonosítója');
            $table->decimal('profile_id', 10, 0)->nullable()->index('admin_profile_fk')->comment('Regisztrált felhasználó egyedi azonosítója');
            $table->decimal('employee_id', 10, 0)->nullable()->index('admin_employee_fk')->comment('Munkaválló egyedi azonosítója');
            $table->string('permission_type', 10)->comment('Engedély típusa');
            $table->date('permission_start_date')->comment('Engedély kezdete');
            $table->date('permission_end_date')->comment('Engedély lejárata');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin');
    }
};
