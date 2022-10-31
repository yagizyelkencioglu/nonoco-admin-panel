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
        Schema::create('tracker_visits', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cookie_id');
            $table->unsignedBigInteger('session_id');
            $table->string('ip');
            $table->time('hour');
            $table->integer('week');
            $table->string('query_string');
            $table->string('referer');
            $table->text('utm');
            $table->timestamp('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tracker_visits');
    }
};
