<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    DB::table('users')->insert([
      'name' => 'admin',
      'email' => 'anapfefferkorn@gmail.com',
      'password' => bcrypt("ore-679280."),
      'photo' => 'users_img/default.jpg',
      'remember_token' => str_random(10),
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
    ]);
  }
}
