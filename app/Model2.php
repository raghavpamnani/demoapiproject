<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Model2 extends Model
{
   protected $fillable = ['model_name', 'color', 'manufacturing_year','registration_number','note','image','manufacturer_id'];
}
