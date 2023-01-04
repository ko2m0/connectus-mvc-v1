<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MeetingFormTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meetingform_contacts', function (Blueprint $table) {
            $table->id();
            $table->string('meetingNameField');
            $table->string('meetingEmailField');
            $table->string('meetingPhoneField');
            $table->string('meetingDateField');
            $table->text('meetingMsg');
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
        Schema::dropIfExists('meetingform_contacts');
    }
}

