<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enrolled extends Model
{
  /**
     * The database table used by the model.
     */
    protected $table = 'enrolled';
    /**
       * Disable timestamps.
       */
    public $timestamps = false;
}
