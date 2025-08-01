<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseResultsTable extends Migration
{
    public function up()
    {
        Schema::create('course_results', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('course_id')->constrained()->onDelete('cascade');
            $table->float('score');
            $table->boolean('passed');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('course_results');
    }
}

