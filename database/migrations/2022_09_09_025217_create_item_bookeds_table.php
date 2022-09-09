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
        Schema::create('item_bookeds', function (Blueprint $table) {
            $table->id('line_id');
            $table->foreignId('booking_id');
            $table->foreignId('item_id');
            $table->string('description');
            $table->integer('quantity');
            $table->date('date_booked');
            $table->string('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item_bookeds');
    }
};
