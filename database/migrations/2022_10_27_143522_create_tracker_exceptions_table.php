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
        Schema::create('tracker_exceptions', function (Blueprint $table) {
            $table->id();
            $table->string('exceptions');
            $table->text('message');
            $table->integer('code');
            $table->unsignedBigInteger('file');
            $table->string('line');
            $table->timestamp('added_on');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tracker_exceptions');
    }
};
