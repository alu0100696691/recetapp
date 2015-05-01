// /database/seeds/UserTableSeeder.php

<?php

use Illuminate\Database\Seeder;
use App\Models\users;

class UserTableSeeder extends Seeder
{
  public function run()
  {
    DB::table('users')->delete();

    users::create(array(
    	'name'     => 'tony',
        'username' => 'tony',
        'email'    => 'tony@gmail.com',
        'password' => Hash::make('123456'),
    ));
  }
}
