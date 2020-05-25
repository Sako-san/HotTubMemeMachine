<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    protected $fillable = ['DateOfBirth', 'Title', 'DogeRating', 'BlogContent'];
}
