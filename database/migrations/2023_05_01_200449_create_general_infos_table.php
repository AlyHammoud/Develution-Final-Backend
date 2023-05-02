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
        Schema::create('general_infos', function (Blueprint $table) {
            $table->id();
            $table->string('address')->nullable();
            $table->string('logo')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('facebook')->nullable();
            $table->string('insta')->nullable();
            $table->string('company_image')->nullable();
            $table->string('company_simage')->nullable();
            $table->string('company_name')->nullable();
            $table->string('moto')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('general_infos');
    }
};
