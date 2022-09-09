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
        Schema::create('master_bookings', function (Blueprint $table) {
            $table->id('booking_id');
            $table->string('items_booked');
            $table->date('date_booked');            
            $table->string('program_title')->nullable();
            $table->string('program_topic')->nullable();
            $table->string('producer')->nullable();
            $table->string('location')->nullable();
            $table->time('recording_time')->nullable();
            $table->time('setting_time')->nullable();
            $table->time('rehearsal_time')->nullable();
            $table->string('designer')->nullable();
            $table->string('guests')->nullable();            
            $table->string('presenters')->nullable();
            $table->string('remarks')->nullable();
            $table->string('operation_crew')->nullable();
            $table->string('shift_leader')->nullable();
            $table->string('approval_level1')->nullable();
            $table->string('approver1_id')->nullable();
            $table->date('approval1_time')->nullable();
            $table->string('approval_level2')->nullable();
            $table->string('approver2_id')->nullable();
            $table->date('approval2_time')->nullable(); 
            $table->string('approval_level3')->nullable();
            $table->string('approver3_id')->nullable();
            $table->date('approval3_time')->nullable();  
            $table->foreignId('user_id');          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('master_bookings');
    }
};
