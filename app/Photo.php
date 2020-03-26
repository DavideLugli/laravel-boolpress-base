<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
  protected $fillable = [
      'user_id',
      'path',
      'desc',
  ];


 public function user()
 {
   return $this->belongsTo('App\User');
 }

}
