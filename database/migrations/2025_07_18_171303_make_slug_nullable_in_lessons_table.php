<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up()
{
    Schema::table('lessons', function (Blueprint $table) {
        $table->string('slug')->nullable()->change();
    });
}

public function down()
{
    Schema::table('lessons', function (Blueprint $table) {
        $table->string('slug')->nullable(false)->change();
    });
}
};
