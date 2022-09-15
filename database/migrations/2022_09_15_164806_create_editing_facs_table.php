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
        Schema::create('editing_facs', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('suitID');
            $table->string('program_title');
            $table->string('program_topic');
            $table->string('producer');
            $table->date('booking_date');
            $table->string('requirements');
            $table->date('editing_date');
            $table->time('start_time');
            $table->time('endtime_time');
            $table->string('remarks');
            $table->string('approval_level1')->nullable()->default("Pending");
            $table->string('approver1_id')->nullable();
            $table->date('approval1_time')->nullable();
            $table->string('approval_level2')->nullable()->default("Pending");
            $table->string('approver2_id')->nullable();
            $table->date('approval2_time')->nullable();
            $table->string('approval_level3')->nullable()->default("Pending");
            $table->string('approver3_id')->nullable();
            $table->date('approval3_time')->nullable();
            $table->foreignId('user_id');
            $table->date('updated_at');
            $table->date('created_at');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('editing_facs');
    }
};
