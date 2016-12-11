<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *

     * @return void
     */
    public function run()
    {

          # Define the users you want to add
          $users = [
              ['jill','jill@harvard.edu','helloworld'], # <-- Required for P4
              ['jamal','jamal@harvard.edu','helloworld'], # <-- Required for P4
              ['raz','test@test.com','12345678']
          ];

          # Get existing users to prevent duplicates
          $existingUsers = User::all()->keyBy('email')->toArray();

          foreach($users as $user) {
              # If the user does not already exist, add them
            if(!array_key_exists($user[1],$existingUsers)) {
                  $user = User::create([
                      'email' => $user[1],
                      'name' => $user[0],
                      'password' => Hash::make($user[2]),
                  ]);
              }
          }
          }

    }
