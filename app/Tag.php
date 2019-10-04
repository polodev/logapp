<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
  protected $guarded = [];
  public function posts()
  {
    return $this->belongsToMany( Post::class );
  }
  public function logs()
  {
    return $this->belongsToMany( Post::class )->where( 'type', 'log' );
  }
  public function gists()
  {
    return $this->belongsToMany( Post::class )->where( 'type', 'gist' );
  }
  public function tutorials()
  {
    return $this->belongsToMany( Post::class )->where( 'type', 'tutorial' );
  }
}
