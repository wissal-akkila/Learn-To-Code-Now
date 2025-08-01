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
        $table->unsignedBigInteger('quiz_id')->after('id'); // أو حسب مكان العمود المطلوب
        $table->foreign('quiz_id')->references('id')->on('quizzes')->onDelete('cascade');
    });
}

public function down()
{
    Schema::table('questions', function (Blueprint $table) {
        $table->dropForeign(['quiz_id']);
        $table->dropColumn('quiz_id');
    });
}
};
