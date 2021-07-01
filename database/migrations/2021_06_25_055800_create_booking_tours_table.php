<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_tours', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
<<<<<<< HEAD
            $table->string('total_price');
            $table->date('booking_start_date');
            $table->boolean('status');
            $table->integer('quantity');
            $table->integer('tour_id');
            $table->integer('account_id');
=======
            $table->string('total-price');
            $table->date('booking-start-date');
            $table->boolean('status');
            $table->integer('quantity');
            $table->string('tour-id');
            $table->string('account-id');
>>>>>>> first commit
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booking_tours');
    }
}
