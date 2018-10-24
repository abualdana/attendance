<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFileContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('file_contents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('term_code');
            $table->string('crn');
            $table->string('session_indicator');
            $table->string('start_time');
            $table->string('student_id');
            $table->string('student_name');
            $table->string('confidential_indicator');
            $table->string('meeting_days');
            $table->string('expected_hours');
            $table->string('actual_hours');
            $table->string('absent_hours');
            $table->string('attendance_indicator');
            $table->string('authorized_absence');
            $table->string('comments');
            $table->string('meeting_id');
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
        Schema::dropIfExists('file_contents');
    }
}
