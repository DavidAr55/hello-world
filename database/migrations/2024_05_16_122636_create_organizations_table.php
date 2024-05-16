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
        /**
         * Defining the structure of Organizations categories Table.
         */
        Schema::create('org_categories', function (Blueprint $table) {
            $table->id();
            $table->string('org_category', 255);
            $table->timestamps();
        });

        /**
         * Defining the structure of Organizations Table.
         */
        Schema::create('organizations', function (Blueprint $table) {
            $table->id();
            $table->string('organization_name', 255);
            $table->unsignedBigInteger('org_category');
            $table->foreign('org_category')->references('id')->on('org_categories');
            $table->text('location');
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Desactivar restricciones de clave externa
        Schema::disableForeignKeyConstraints();

        // Rollback de las tablas en el orden inverso
        Schema::dropIfExists('org_categories');
        Schema::dropIfExists('organizations');

        // Activar restricciones de clave externa
        Schema::enableForeignKeyConstraints();
    }
};
