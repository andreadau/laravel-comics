<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = ['title', 'img','description'];

    // Artists
    public function artists()
    {
    return $this->belongsToMany('App\Artist');
    }

    // Writers

    public function writers()
    {
    return $this->belongsToMany('App\Writer');
    }
  
}
