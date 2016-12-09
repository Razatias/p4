<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
      public function up() {

    Schema::create('stories', function (Blueprint $table) {

        # Increments method will make a Primary, Auto-Incrementing field.
        $table->increments('story_id');
        # This generates two columns: `created_at` and `updated_at` to
        # keep track of changes to a row
        $table->timestamps();
        # The rest of the fields...
        $table->string('title');
        $table->integer('author_id')->nullable();
        $table->string('firstline');
        $table->string('secondline');
        $table->string('thirdline');
        $table->string('forthline');
        $table->string('fifthline');
      });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::drop('stories');
    }
}
