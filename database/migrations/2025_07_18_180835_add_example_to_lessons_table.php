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
        
Schema::table('lessons', function (Blueprint $table) {
    $table->text('example')->nullable();
    $table->text('example_description')->nullable();
});


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
      Schema::table('lessons', function (Blueprint $table) {
    $table->dropColumn('example');
});

    }
};
