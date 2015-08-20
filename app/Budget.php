<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    //
    public static $rules = array(
	'category'=>'required',
	'subcategory'=>'required',
	'amount'=>'required|numeric',
	'startdate'=>'required|date',
	'departmentid'=>'required|numeric');

    protected $fillable=[
	'category',
	'subcategory',
	'amount',
	'startdate',
	'departmentid'
	];
}
