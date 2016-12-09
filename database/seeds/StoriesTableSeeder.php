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
             'title' => 'The Story of the Four Little Children Who Went Round the World',
             'author_id' => 11,
             'firstline' => 'Once upon a time, a long while ago, there were four little people whose names were and they all thought they should like to see the world.',
             'secondline' => 'So they bought a large boat to sail quite round the world by sea, and then they were to come back on the other side by land.',
             'thirdline' => 'The boat was painted blue with green spots, and the sail was yellow with red stripes;',
             'forthline' => 'and when they set off, they only took a small Cat to steer and look after the boat, besides an elderly Quangle-Wangle, who had to cook dinner and make the tea;',
             'fifthline' => 'for which purposes they took a large kettle.',
          ]);

     }
}
