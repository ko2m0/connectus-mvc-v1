<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('profile_video');
            $table->string('profile_pic');
            $table->string('profile_name');
            $table->string('profile_job');
            $table->string('profile_ws');
            $table->string('profile_about');
            $table->string('profile_phonenumber');
            $table->string('profile_email');
            $table->string('profile_client_img1');
            $table->string('profile_client_img2');
            $table->string('profile_client_img3');
            $table->string('profile_client_img4');
            $table->string('profile_smlink1');
            $table->string('profile_smlink2');
            $table->string('profile_smlink3');
            $table->string('profile_smlink4');
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
        Schema::dropIfExists('profiles');
    }
};
