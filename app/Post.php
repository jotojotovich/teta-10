<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function tags()
    {
      return $this->belongToMany(Tag::class);
    }

    public function category()
    {
      return $this->belongsTo(Category::class);
    }
}
