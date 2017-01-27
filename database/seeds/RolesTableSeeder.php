<?php

use Illuminate\Database\Seeder;
use App\Models\Roles;

class RolesTableSeeder extends Seeder
{

    protected $records = [];

    protected function initialize(){
        $this->records = [
            [
                'name'=>'Administrador'
            ],
            [
                'name'=>'Profesor'
            ]
        ];
    }


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->initialize();
        Roles::insert($this->records);
    }
}
