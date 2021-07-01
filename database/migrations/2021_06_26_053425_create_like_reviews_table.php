<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLikeReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('like_reviews', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
<<<<<<< HEAD
            $table->integer('review_id');
            $table->integer('account_id');
            $table->boolean('like_status')->default(false);
=======
            $table->string('review-id');
            $table->string('account-id');
            $table->string('like-status');
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
        Schema::dropIfExists('like_reviews');
    }
}
