<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_addresses', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('_user')->constrained('users');
            $table->integer('CP')->comments('codigo postal');
            $table->string('state')->comments('estado de domicilio lo busque en internet y me tradujo tal cual eso jaja');
            $table->string('municipality')->comments('municipio o alcaldia');
            $table->string('cologne')->comments('colonia');
            $table->string('street')->comments('calle');
            $table->string('interior_number')->comments('numero interior');
            $table->string('outdoor_number')->comments('numero exterior');
            $table->string('reference_street_1')->nullable()->comments('calle de referencia 1');
            $table->string('reference_street_2')->nullable()->comments('calle de referencia 2');
            $table->foreignId('_type')->constrained('address_type')->comments('tipo de domicilio trabajo o casa');
            $table->bigInteger('contac_number')->comments('numero telefono contacto de el domicilio');
            $table->string('observation')->comments('observaciones');
            $table->datetimetz('created_at')->useCurrent()->comment('fecha de creacion');
            $table->datetimetz('updated_at')->useCurrent()->comment('fecha de creacion');
            $table->datetimetz('deleted_at')->nullable()->comment('fecha de creacion');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_addresses');
    }
};
