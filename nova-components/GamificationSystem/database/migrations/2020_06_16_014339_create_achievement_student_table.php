<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAchievementStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('achievement_student', function (Blueprint $table) {
            $table->id();
            $table->foreignId('achievement_id')->constrained();
            $table->foreignId('student_id')->constrained();
            $table->integer('points_earned');
            $table->timestamp('unlocked_at')->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('achievement_student');
    }
}
