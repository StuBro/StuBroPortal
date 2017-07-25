<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Eloquent;

class Role extends Model
{

  public function user()
  {
    return $this->hasMany('App\User');
  }
}
