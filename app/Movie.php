<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
  protected $fillable = [
    'name', 'year', 'image'
  ];
  public function actors() {
    return $this->belongsToMany('App\Actor');
  }
  public function awards() {
    return $this->hasMany('App\Award');
  }

}
