<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Panol;
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
      public function up()
    {

        Schema::create('panol', function (Blueprint $table) {
            $table->id();
            $table->string('room');
            $table->string('staff_name');
            $table->string('staff_id');
            $table->enum('staff_department',['IT', 'Account', 'Marketing']); // Select input in form
            $table->enum('meeting_type', ['meeting', 'training']);
            $table->text('description')->nullable();
            $table->date('date');
            $table->time('start_time');
            $table->time('end_time');
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
        Schema::dropIfExists('panol');
    }
};
