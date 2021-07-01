<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
<<<<<<< HEAD
            $table->text('description');
            $table->integer('duration');
            $table->integer('num_of_participants');
            $table->integer('cat_tour_id');
            $table->float('rating')->nullable();
            $table->integer('price');
=======
            $table->string('description');
            $table->string('duration');
            $table->string('num-of-participants');
            $table->string('cat_tour_id');
            $table->float('rating');
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
        Schema::dropIfExists('tours');
    }
}
