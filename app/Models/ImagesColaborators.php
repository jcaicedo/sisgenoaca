<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImagesColaborators extends Model
{
    protected $table = 'image_colaborators';

    protected $fillable = [
    'name',
    'path'
    ];

    public $timestamps = false;public $timestamps = false;
}
