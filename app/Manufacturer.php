<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    protected $fillable = ['manufacturer_name'];

    public function carmodels() {

    return $this -> hasMany(Carmodels::class);
  }
}
