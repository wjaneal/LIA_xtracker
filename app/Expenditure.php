<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expenditure extends Model
{
    //
 	protected $fillable=[
	'category',
	'subcategory',
	'description',
	'date',
	'amount',
	'departmentid'
	];
}
