<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Award extends Model
{
  protected $fillable = [
    'name', 'year'
  ];
  public function actors() {
    return $this->belongsTo('App\Actor');
  }
  public function movies() {
    return $this->belongsTo('App\Movie');
  }

}
