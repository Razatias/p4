<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnfinishedStoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('unfinished_stories', function (Blueprint $table) {

          # Increments method will make a Primary, Auto-Incrementing field.
          $table->increments('ufstory_id');
          # This generates two columns: `created_at` and `updated_at` to
          # keep track of changes to a row
          $table->timestamps();
          # The rest of the fields...
          $table->integer('counter');
          $table->string('uftitle');
          $table->integer('ufauthor_id')->nullable();
          $table->string('uffirstline');
          $table->string('ufsecondlinefirstword');
          $table->string('ufsecondline')->nullable();
          $table->string('ufthirdlinefirstword')->nullable();
          $table->string('ufthirdline')->nullable();
          $table->string('ufforthlinefirstword')->nullable();
          $table->string('ufforthline')->nullable();
          $table->string('uffifthlinefirstword')->nullable();
          $table->string('uffifthline')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::drop('unfinished_stories');

    }
}
