<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RegistroOaca extends Model
{

	protected $table = 'registrooaca';

	protected $fillable = [
	'registro_content',
	'title_oaca',
	'user_id',
	];

}
