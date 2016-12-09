<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *

     * @return void
     */
    public function run()
    {
      $users = [
      ['jill@harvard.edu','Jill','helloworld'],
      ['jama@harvard.edu','Jama','helloworld']
      ];

    }
}
