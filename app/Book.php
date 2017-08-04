<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    Protected $fillable = ['title','author_id','amounth'];
    public function author()
    {
    	return $this->belongsTo('App\Author');
    }
}
