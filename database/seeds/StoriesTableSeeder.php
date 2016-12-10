<?php

use Illuminate\Database\Seeder;

class StoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {

            DB::table('stories')->insert([
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
                'title' => 'Adventure Story',
                'author_id' => 11,
                'firstline' => 'He told us a very exciting adventure story.',
                'secondline' => 'Malls are great places to shop; I can find everything I need under one roof.',
                'thirdline' => 'We have never been to Asia, nor have we visited Africa.',
                'forthline' => 'If I don’t like something, I’ll stay away from it.',
                'fifthline' => 'She advised him to come back at once.',
             ]);

             DB::table('stories')->insert([
                 'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                 'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
                 'title' => 'The baggage',
                 'author_id' => 12,
                 'firstline' =>'Let me help you with your baggage.',
                 'secondline' => 'Abstraction is often one floor above you.',
                 'thirdline' => 'The sky is clear; the stars are twinkling.',
                 'forthline' => 'I want more detailed information.',
                 'fifthline' => 'The stranger officiates the meal.',
              ]);

              DB::table('stories')->insert([
                  'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                  'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
                  'title' => 'English',
                  'author_id' => 13,
                  'firstline' => 'Yeah, I think its a good environment for learning English.',
                  'secondline' => 'She borrowed the book from him many years ago and hasnt yet returned it.',
                  'thirdline' => 'Id rather be a bird than a fish.',
                  'forthline' => 'The waves were crashing on the shore; it was a lovely sight.',
                  'fifthline' => 'Check back tomorrow; I will see if the book has arrived.',
               ]);

               DB::table('stories')->insert([
                   'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                   'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
                   'title' => 'Purple pig',
                   'author_id' => 14,
                   'firstline' => 'A purple pig and a green donkey flew a kite in the middle of the night and ended up sunburnt.',
                   'secondline' => 'Please wait outside of the house.',
                   'thirdline' => 'The lake is a long way from here.',
                   'forthline' => 'There was no ice cream in the freezer, nor did they have money to go to the store.',
                   'fifthline' => 'Is it free?',
                ]);

                DB::table('stories')->insert([
                    'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                    'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
                    'title' => 'Movie night',
                    'author_id' => 15,
                    'firstline' => 'Everyone was busy, so I went to the movie alone.',
                    'secondline' => 'Last Friday in three weeks time I saw a spotted striped blue worm shake hands with a legless lizard.',
                    'thirdline' => 'Should we start class now, or should we wait for everyone to get here?',
                    'forthline' => 'Lets all be unique together until we realise we are all the same.',
                    'fifthline' => 'The earth is round!',
                 ]);

     }
}
