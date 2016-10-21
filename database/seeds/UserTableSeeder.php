<?php

use Illuminate\Database\Seeder;

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
    		'id'=>1,
    		'name'=>'Julio',
    		'username'=>'julio',
    		'email'=>'caicedo.julio@gmail.com',
    		

    	]
    }

    public function run()
    {
    	factory(App\Users::class,20)->create();
    }
}

