<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Antenatal extends Model
{
  protected $table = 'antenatal_care';

protected $fillable = [
   'Patient_id',
];

protected $hidden = [];
}
