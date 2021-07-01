<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_tours', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
<<<<<<< HEAD
            $table->string('cat_name');
=======
            $table->string('cat-name');
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
        Schema::dropIfExists('category_tours');
    }
}
