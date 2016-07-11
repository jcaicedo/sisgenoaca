<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Users extends Authenticatable
{
    protected $table = 'users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    'name',
    'username',
    'email',
    'password',
    'avatar_image'
    ];



    protected $hidden = [
    'password', 'remember_token',
    ];


}
