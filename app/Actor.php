<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
  protected $fillable = [
    'name', 'country', 'image', 'x-factor'
  ];
  public function movies() {
    return $this->belongsToMany('App\Movie');
  }
  public function awards() {
    return $this->hasMany('App\Award');
  }
}
