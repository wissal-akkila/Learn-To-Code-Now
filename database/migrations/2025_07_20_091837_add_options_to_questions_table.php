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
    Schema::table('questions', function (Blueprint $table) {
        $table->string('option_a')->after('question_text');
        $table->string('option_b');
        $table->string('option_c');
        $table->string('option_d');
        $table->string('correct_option');
    });
}

public function down()
{
    Schema::table('questions', function (Blueprint $table) {
        $table->dropColumn(['option_a', 'option_b', 'option_c', 'option_d', 'correct_option']);
    });
}
};
