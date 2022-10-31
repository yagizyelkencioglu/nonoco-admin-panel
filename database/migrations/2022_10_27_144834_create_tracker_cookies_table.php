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
        Schema::create('tracker_cookies', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->unsignedBigInteger('device_id');
            $table->unsignedBigInteger('operating_system_id');
            $table->unsignedBigInteger('browser_id');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('device_id')->references('id')->on('tracker_device');
            $table->foreign('operating_system_id')->references('id')->on('tracker_operation_systems');
            $table->foreign('browser_id')->references('id')->on('tracker_browsers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tracker_cookies');
    }
};
