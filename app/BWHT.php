<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BWHT extends Model
{
  protected $table = ' bwht history';

protected $fillable = [
  'BWHT_ID','Pationt_ID','Webght_ID','Height_ID','Height_Date','Historg_weight','Historg_Height','Historg_result','VHV_ID','He_ID',

];

protected $hidden = [];
}
