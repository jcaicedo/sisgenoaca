<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class RegistroOaca extends Model
{

	const REGISTROID = "51ed7b57-6638-39c0-93c2-a66b57525b2c";
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

	public function elements(){
		return $this->hasMany('App\Models\ElementsOaca','register_id');
	}

}
