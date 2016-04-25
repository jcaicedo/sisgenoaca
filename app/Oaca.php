<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oaca extends Model
{
    protected $table = 'oaca';

    protected $fillable = [

    	'name',
    	'status',
    	'user',
    	'register',
    	'content'
    ];
}
