<?php

use Illuminate\Database\Seeder;
use App\Models\Patterns;

class registry_pattern extends Seeder
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
    	'name'=>'DARC',
    	'description'=>'Describe, Analiza, Redacta, Comparte'
    	];
    }
    public function run()
    {
    	$this->initialize();
    	Patterns::insert($this->records);
    }
}
