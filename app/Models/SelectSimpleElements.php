<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SelectSimpleElements extends Model
{
	
	protected $table = 'select_simple';

	protected $fillable = [
	'id_elements',
	'content',
	'type_response'
	];




}
