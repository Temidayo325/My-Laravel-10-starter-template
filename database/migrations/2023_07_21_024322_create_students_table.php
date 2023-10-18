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
        Schema::create('students', function (Blueprint $table) {
            // 'state', 'gender', 'admission_number', 'result', 'score', 'answer', 'school_type', 'theoryResult', 'theoryAnswers'
            $table->id();
            $table->string("admission_number", 10);
            $table->set("gender", ['male', 'female']);
            $table->string("state", 12);
            $table->double("result", 5, 2)->nullable();
            $table->text("answers")->nullable();
            $table->integer('score', false, true);
            $table->integer('age', false, true);
            $table->set('school_type', ['public', 'private']);
            $table->double("theoryResult", 5, 2)->nullable();
            $table->text("theoryAnswers")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
