<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contribution extends Model
{

	public static function open(array $attributes)
	{
		return new static($attributes);
	}



    //
/*
**Fillable fields for a provider.
*/
	protected $fillable = [
	'subject',
	'contribution'
	];
}
