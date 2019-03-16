<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    protected $fillable = ['title', 'content', 'thumb'];
    protected $appends = ['thumb_full_url'];

    protected function getThumbFullUrlAttribute()
    {
        if($this->attributes['thumb'])
            return 'https://materializecss.com/images/sample-1.jpg';
        else
            return null;

    }
}