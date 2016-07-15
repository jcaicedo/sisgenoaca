<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class RegistroOaca extends Model
{

	protected $table = 'registrooaca';

	protected $fillable = [
	'content_register',
	'title_oaca',
	'user_id',
	];

	protected static function boot()
	{
		parent::boot();
		self::creating(function ($registro) {
				$uuid = Uuid::uuid3(Uuid::NAMESPACE_DNS, $registro->title);// name-based uuid
				$registro->id = $uuid->toString();
				return true;
			});
	}

}
