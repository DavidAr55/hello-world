<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        /**
         * Defining the structure of Plans Table.
         */
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->string('plan_name', 255);
            $table->text('description');
            $table->string('content', 255);
            $table->timestamps();
        });

        /**
         * Defining the rules of User roles Table.
         */
        Schema::create('accepted_user_roles', function (Blueprint $table) {
            $table->string('value', 20)->primary();
        });
        
        DB::table('accepted_user_roles')->insert([
            ['value' => 'Free'],
            ['value' => 'VIP'],
            ['value' => 'Organizational'],
            ['value' => 'Associated users'],
            ['value' => 'Admin'],
        ]);
        
        /**
         * Defining the structure of User roles Table.
         */
        Schema::create('user_roles', function (Blueprint $table) {
            $table->id();
            $table->string('user_role', 20);
            $table->unsignedBigInteger('organization_id')->nullable();
            $table->foreign('organization_id')->references('id')->on('organizations');
            $table->text('description');
            $table->timestamps();
        
            $table->foreign('user_role')->references('value')->on('accepted_user_roles');
        });

        /**
         * Defining the structure of Users Table.
         */
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('user_name', 255);
            $table->string('email', 255)->unique();
            $table->binary('sald', 16);
            $table->string('hash', 255);
            $table->unsignedBigInteger('plan_id');
            $table->foreign('plan_id')->references('id')->on('plans');
            $table->unsignedBigInteger('user_role_id');
            $table->foreign('user_role_id')->references('id')->on('user_roles');
            $table->unsignedBigInteger('organization_id');
            $table->foreign('organization_id')->references('id')->on('organizations');
            $table->string('code', 5);
            $table->dateTime('email_verified_at')->nullable();
            $table->integer('attemps_failed');
            $table->dateTime('temporary_lock')->nullable();
            $table->timestamps();
        });

        /**
         * Defining the rules of Payment record Table.
         */
        Schema::create('payment_statuses', function (Blueprint $table) {
            $table->string('value', 20)->primary();
        });
        
        DB::table('payment_statuses')->insert([
            ['value' => 'pending'],
            ['value' => 'paid'],
            ['value' => 'canceled'],
        ]);  

        /**
         * Defining the structure of Payment record Table.
         */
        Schema::create('payment_record', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('plan_id');
            $table->foreign('plan_id')->references('id')->on('plans');
            $table->string('status', 20);
            $table->double('amount_paid', 10, 2);
            $table->timestamps();
        
            $table->foreign('status')->references('value')->on('payment_statuses');
        });

        /**
         * Defining the structure of Sessions record Table.
         */
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
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
        Schema::dropIfExists('sessions');
        Schema::dropIfExists('org_categories');
        Schema::dropIfExists('organizations');
        Schema::dropIfExists('plans');
        Schema::dropIfExists('payment_record');
        Schema::dropIfExists('payment_statuses');
        Schema::dropIfExists('users');
        Schema::dropIfExists('accepted_user_roles');
        Schema::dropIfExists('user_roles');

        // Activar restricciones de clave externa
        Schema::enableForeignKeyConstraints();
    }
};