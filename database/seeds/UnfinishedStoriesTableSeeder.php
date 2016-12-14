<?php

use Illuminate\Database\Seeder;

class UnfinishedStoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('unfinished_stories')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'uftitle' => 'Beyond the rainbow',
          'ufauthor_id' => 11,
          'counter' => 2,
          'uffirstline' => 'He ran out of money, so he had to stop playing poker.',
          'ufsecondlinefirstword' => "Jack is",
          'ufsecondline' => null,
          'ufthirdlinefirstword' => null,
          'ufthirdline' => null,
          'ufforthlinefirstword' => null,
          'ufforthline' => null,
          'uffifthlinefirstword' => null,
          'uffifthline' => null,
       ]);

       DB::table('unfinished_stories')->insert([
           'created_at' => Carbon\Carbon::now()->toDateTimeString(),
           'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
           'uftitle' => 'Playing Poker',
           'ufauthor_id' => 12,
           'counter' => 3,
           'uffirstline' => 'Lets all be unique together until we realise we are all the same.',
           'ufsecondlinefirstword' => "Someone I know",
           'ufsecondline' => 'recently combined Maple Syrup & buttered Popcorn thinking it would taste like caramel popcorn. It didn’t and they don’t recommend anyone else do it either.',
           'ufthirdlinefirstword' => 'It was getting dark',
           'ufthirdline' => null,
           'ufforthlinefirstword' => null,
           'ufforthline' => null,
           'uffifthlinefirstword' => null,
           'uffifthline' => null,
        ]);

        DB::table('unfinished_stories')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'uftitle' => 'Fast Rabbit',
            'ufauthor_id' => 11,
            'counter' => 4,
            'uffirstline' => 'The quick brown fox jumps over the lazy dog.',
            'ufsecondlinefirstword' => "If I don’t",
            'ufsecondline' => 'like something, I’ll stay away from it.',
            'ufthirdlinefirstword' => 'The sky',
            'ufthirdline' => 'is clear; the stars are twinkling.',
            'ufforthlinefirstword' => 'She always',
            'ufforthline' => null,
            'uffifthlinefirstword' => null,
            'uffifthline' => null,
         ]);

         DB::table('unfinished_stories')->insert([
             'created_at' => Carbon\Carbon::now()->toDateTimeString(),
             'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
             'uftitle' => 'Where are we?',
             'ufauthor_id' => 11,
             'counter' => 5,
             'uffirstline' => 'The book is in front of the table.',
             'ufsecondlinefirstword' => "She did",
             'ufsecondline' => 'not cheat on the test, for it was not the right thing to do.',
             'ufthirdlinefirstword' => 'Christmas',
             'ufthirdline' =>'is coming.',
             'ufforthlinefirstword' => 'We have',
             'ufforthline' => 'a lot of rain in June',
             'uffifthlinefirstword' => 'If you like tuna',
             'uffifthline' => null,
          ]);

          DB::table('unfinished_stories')->insert([
              'created_at' => Carbon\Carbon::now()->toDateTimeString(),
              'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
              'uftitle' => 'Italy',
              'ufauthor_id' => 13,
              'counter' => 2,
              'uffirstline' => 'Italy is my favorite country; in fact, I plan to spend two weeks there next year.',
              'ufsecondlinefirstword' => "Malls are great",
              'ufsecondline' => null,
              'ufthirdlinefirstword' => null,
              'ufthirdline' => null,
              'ufforthlinefirstword' => null,
              'ufforthline' => null,
              'uffifthlinefirstword' => null,
              'uffifthline' => null,
           ]);

           DB::table('unfinished_stories')->insert([
               'created_at' => Carbon\Carbon::now()->toDateTimeString(),
               'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
               'uftitle' => 'The advice',
               'ufauthor_id' => 12,
               'counter' => 3,
               'uffirstline' => 'She advised him to come back at once.',
               'ufsecondlinefirstword' => "Tom got",
               'ufsecondline' => 'a small piece of pie.',
               'ufthirdlinefirstword' => 'How was',
               'ufthirdline' => null,
               'ufforthlinefirstword' => null,
               'ufforthline' => null,
               'uffifthlinefirstword' => null,
               'uffifthline' => null,
            ]);


    }
}
