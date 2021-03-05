<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = ['title', 'img','description'];
    public function artists()
    {
    return $this->belongsToMany('App\Artist');
    }
    public function writers()
    {
    return $this->belongsToMany('App\Writer');
    }
  
}
