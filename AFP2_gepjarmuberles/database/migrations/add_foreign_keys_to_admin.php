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
        Schema::table('admin', function (Blueprint $table) {
            $table->foreign(['employee_id'], 'admin_employee_fk')->references(['employee_id'])->on('employee');
            $table->foreign(['profile_id'], 'admin_profile_fk')->references(['profile_id'])->on('profile');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('admin', function (Blueprint $table) {
            $table->dropForeign('admin_employee_fk');
            $table->dropForeign('admin_profile_fk');
        });
    }
};
