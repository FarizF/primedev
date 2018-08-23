<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
  public function project() {
    return $this->belongsTo('App\Project', 'foreign_key');
  }

  public function employer() {
    return $this->belongsTo('App\Employer', 'foreign_key');
  }

  public function client() {
    return $this->belongsTo('App\Client', 'foreign_key');
  }
}
