<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model {
  /**
  * Indicates if the model should be timestamped.
  *
  * @var bool
  */
  public $timestamps = false;

  public function address() {
    return $this->hasOne('App\Address');
  }

  public function projects() {
    return $this->hasMany('App\Project', 'foreign_key');
  }
}
