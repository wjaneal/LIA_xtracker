<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fee extends Model
{
  protected $fillable = [
        'applicationfee',
        'guardianshipfee',
        'tuitiondeposit',
        'tuitionsemester',
        'tuitionshortsemester',
        'tuitioncredit',
        'accommsinglefour',
        'accommsingletwo',
        'accommdoublefour',
        'accommdoubletwo',
        'residencedeposit',
        'mealfour',
        'mealtwo',
        'lunchonly',
        'twomeals',
        'uniform',
        'healthyear',
        'healthsix',
        'healththree',
        'airport'
        ];
    //
}
