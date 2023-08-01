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
        Schema::create('register_events', function (Blueprint $table) {
            $table->id();
            $table->string('EventName');
            $table->date('EventDate');
            $table->time('EventTime');
            $table->string('name');
            $table->string('email');
            $table->integer('no1');
            $table->integer('no2');
            $table->text('image');
            $table->string('occupation');
            $table->string('religion');
            $table->string('gender');
            $table->text('address');
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
        Schema::dropIfExists('register_events');
    }
};
