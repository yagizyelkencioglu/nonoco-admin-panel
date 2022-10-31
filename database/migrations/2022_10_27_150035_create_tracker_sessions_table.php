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
        Schema::create('tracker_sessions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cookie_id');
            $table->string('key');
            $table->timestamp('added_on');


            $table->foreign('cookie_id')->references('id')->on('tracker_cookies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tracker_sessions');
    }
};
