<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    //
      protected $fillable = ["referencetype", "referenceid", "date", "note", "staffuid", "directory", "filename", "type"];

}
