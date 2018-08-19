<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model {
  /**
  * Indicates if the model should be timestamped.
  *
  * @var bool
  */

  public function client() {
    return $this->belongsTo('App\Client', 'foreign_key');
  }

  public function employer() {
    return $this->belongsTo('App\Client', 'foreign_key');
  }
}
