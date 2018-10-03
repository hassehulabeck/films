<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
  protected $fillable = [
    'name', 'year', 'image'
  ];
  public function movies() {
    return $this->belongsToMany('App\Movie');
  }
  public function awards() {
    return $this->hasMany('App\Award');
  }
}
