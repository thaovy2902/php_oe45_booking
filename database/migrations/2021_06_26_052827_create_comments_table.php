<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('content');
<<<<<<< HEAD
            $table->string('object_type');
            $table->integer('object_id');
            $table->integer('account_id');
            $table->integer('comment_parent_id')->nullable();
=======
            $table->string('object-type');
            $table->string('object-id');
            $table->string('account-id');
            $table->string('comment-parent-id');
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
        Schema::dropIfExists('comments');
    }
}
