<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $users = [
        'shibu', 'milky', 'alvi', 'arnob'
      ];
      foreach ($users as $user) {
        User::create([
          'name' => $user,
          'email' => $user . '@gmail.com',
          'password' => bcrypt('secret'),
        ]);
      }
    }
}
