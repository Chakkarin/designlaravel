<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ANC extends Model
{
  protected $table = 'anc';

  protected $fillable = [

     'ANC_ID','Patient_ID','ANC_Date_check','ANC_Inspechtion','ANC_Time_cheek','ANC_ womb',

  ];


  protected $hidden = [];

}
