<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();

            $table->foreignId('classroom_id')->constrained();

            $table->Integer('enrollment')->unsigned()->nullable()->unique();
            $table->integer('list_number')->nullable();
            $table->string('run')->unique();
            $table->string('last_name_1');
            $table->string('last_name_2')->nullable();
            $table->string('names');
            $table->string('gender');
            $table->date('birthday');
            $table->date('enroll_date');
            $table->string('address')->nullable();
            $table->date('withdraw_date')->nullable();
            $table->char('withdrawal_reason')->nullable();

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
        Schema::dropIfExists('students');
    }
}
