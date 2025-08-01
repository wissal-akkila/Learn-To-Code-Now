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

    Schema::create('completed_lessons', function (Blueprint $table) {
$table->dropForeign(['lesson_id']); // إذا كان lesson_id مفتاح أجنبي
$table->dropColumn('lesson_id');

        $table->id();
        $table->foreignId('user_id')->constrained()->onDelete('cascade');
        $table->foreignId('course_id')->constrained()->onDelete('cascade');
        $table->timestamps();

        $table->unique(['user_id', 'course_id']); // لضمان عدم تكرار نفس الدرس لنفس المستخدم
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        
        Schema::dropIfExists('completed_lessons');
    }
};
