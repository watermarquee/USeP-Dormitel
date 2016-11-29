<?php
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder {

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run() {

    DB::table('users')->insert([
      'name'   => 'goodsidesoldier',
      'email'      => 'lightwalker@rebels.com',
      'password'   => Hash::make('hesnotmydad'),
      'created_at' => new DateTime(),
      'updated_at' => new DateTime()
    ]);
  }

}
