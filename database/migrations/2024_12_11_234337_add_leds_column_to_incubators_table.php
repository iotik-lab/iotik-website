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
        Schema::table('incubators', function (Blueprint $table) {
            $table->json('leds')->after('egg_total')->default('[]')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('incubators', function (Blueprint $table) {
            $table->dropColumn('leds');
        });
    }
};
