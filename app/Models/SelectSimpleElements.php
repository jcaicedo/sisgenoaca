<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SelectSimpleElements extends Model
{
	
	protected $table = 'select_simple';

	protected $fillable = [
	'id_element',
	'content',
	'type_response'
	];




}
