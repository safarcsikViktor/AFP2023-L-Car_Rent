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
        Schema::create('profile', function (Blueprint $table) {
            $table->decimal('profile_id', 10, 0)->primary()->comment('Regisztrált felhasználó egyedi azonosítója');
            $table->string('user_name', 100)->comment('Felhasználónév');
            $table->string('email_address', 100)->comment('Regisztráció során megadott email cím');
            $table->string('phone_number', 100)->nullable()->comment('Telefonszám');
            $table->date('date_of_registration')->comment('Regisztráció időpontja');
            $table->string('status', 5)->nullable()->comment('Regisztrált profil státusza');
            $table->string('pwd', 500)->nullable()->comment('Jelszó (titkosítottan tárolt)');
            $table->string('city', 150)->nullable()->comment('Város');
            $table->string('postcode', 15)->nullable()->comment('Irányítószám');
            $table->string('street', 200)->nullable()->comment('Utca, házszám és további címadatok');
            $table->date('date_of_birth')->nullable()->comment('Születési dátum');
            $table->string('first_name', 100)->nullable()->comment('Keresztnév');
            $table->string('last_name', 100)->nullable()->comment('Vezetéknév');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profile');
    }
};
