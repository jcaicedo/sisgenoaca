<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ElementsOaca extends Model
{
	protected $table = 'elements';
	

	protected $fillable = [
	'type_element',
	'content',
	'area',
	'position_order',
	'register_id',
	];

	

}
