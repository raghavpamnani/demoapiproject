<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carmodels extends Model
{
    protected $fillable = ['model_name', 'color', 'manufacturing_year','registration_number','note','image','manufacturer_id'];

    public function manufacturer() {

    return $this -> belongsTo(Manufacturer::class);
  }
}
