<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Check extends Model
{
  protected $table = 'check_results';

protected $fillable = [
   'results','Paticnt_ID',
];


protected $hidden = [];
}
