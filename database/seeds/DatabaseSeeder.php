<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;


class DatabaseSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    $this->call(RolesTableSeeder::class);
    $this->call(UserTableSeeder::class);
    $this->call(registry_pattern::class);

  }
}
