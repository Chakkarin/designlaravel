<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patients extends Model
{
  protected $table = 'patient';

protected $fillable = [
   'People_id','History','patent','title','Name','Last_name',
];


protected $hidden = [];
}
