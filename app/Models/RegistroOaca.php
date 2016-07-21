<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class RegistroOaca extends Model
{

	const REGISTROID = "eec39131-e210-3a72-8fd0-09f0916f23fb";
	protected $table = 'registrooaca';
	protected $primaryKey = 'id';
	public $incrementing = false;

	protected $fillable = [
	'content_register',
	'title_oaca',
	'user_id',
	];

	protected static function boot()
	{
		parent::boot();
		self::creating(function ($registro) {
				$uuid = Uuid::uuid3(Uuid::NAMESPACE_DNS, $registro->title_oaca);// name-based uuid
				$registro->id = $uuid->toString();
				return true;
			});
	}

	public function parentRegistrooaca()
	{
		return $this->belongsTo('App\Models\RegistroOaca', 'parent');
	}

}
