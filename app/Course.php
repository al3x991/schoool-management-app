<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
  /**
     * The database table used by the model.
     */
    protected $table = 'courses';
    /**
       * Disable timestamps.
       */
    public $timestamps = false;
    /**
     * Get the ratings for courses relatiobship.
     */
    public function tc_tuto_rating()
    {
        return $this->hasMany('App\tc_tuto_rating');
    }
}
