<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model {

  /**
    * Indicates if the model should be timestamped.
    *
    * @var bool
    */
   public $timestamps = false;

   public function client() {
     return $this->belongsTo('App\Client', 'client_id');
   }

   public function employer() {
     return $this->belongsTo('App\Employer', 'employer_id');
   }

   public function images() {
     return $this->hasMany('App\Image', 'foreign_key');
   }

   /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
   protected $fillable = [
       'name', 'startdate', 'duration', 'employer_id', 'client_id'
   ];
}
