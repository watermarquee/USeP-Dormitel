<?php
use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder {

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run() {

    DB::table('users')->insert([
      'name'   => 'admin',
      'email'      => 'usep.dormitel@gmail.com',
      'password'   => Hash::make('root'),
      'created_at' => new DateTime(),
      'updated_at' => new DateTime()
    ]);
  }
}
