<?php

use Illuminate\Database\Seeder;
use App\Models\Users;

class UserTableSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */

  protected $records = [];
  protected function initialize(){
    $this->records=[
      [	'id'=>1,
      'name'=>'admin',
      'username'=>'admin',
      'email'=>'admin@sisgeoaca.com',
      'password' => bcrypt('adminadmin'),
      'role'=>1,
      'avatar_image'=>'/assets/imgs/profiles/image_profile.jpg'
    ],
    [
      'id'=>2,
      'name'=>'profesor',
      'username'=>'profesor',
      'email'=>'profesor@sisgeoaca.com',
      'password' => bcrypt('adminadmin'),
      'role'=>2,
      'avatar_image'=>'/assets/imgs/profiles/image_profile.jpg'
    ]

  ];
}

public function run()
{
  $this->initialize();
  Users::insert($this->records);
  //factory(App\Users::class,10)->create();
}
}
