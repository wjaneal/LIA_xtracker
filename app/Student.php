<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
      public static $rules = [
                'slname'=>'required',
                'sfname'=>'required',
                'grade'=>'required',
                'country'=>'required|alpha_dash',
                'gender'=>'required',
                'student_email_1'=>'email',
                'flanguage'=>'alpha_dash',
                'immigration'=>'',
                'canada_doe'=>'',
                'lia_doe'=>'',
                'dob'=>'',
                'assessment_date'=>'',
                'education_note'=>'alpha_dash',
                'translator'=>'alpha_dash',
                'trans_relationship'=>'alpha_dash',
                'career'=>'alpha_dash',
                'recommendations'=>'alpha_dash',
                'agentid'=>'integer',
                'parent1'=>'integer',
                'parent2'=>'integer'

                // 'title' => 'required'
        ];

        // Don't forget to fill this array
        protected $fillable = ["slname", "sfname","snname", "gender","country", "flanguage", "student_email_1", "parent1", "parent2","immigration","status", "grade", "address", "city", "postalcode", "phone", "lia_doe", "canada_doe", "dob", "assessment_date", "recommendations", "trans_relationship","career"];

}
