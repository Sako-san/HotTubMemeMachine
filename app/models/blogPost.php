<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blogPost extends Model
{
    protected $fillable = ['DateOfBirth', 'Title', 'DogeRating', 'BlogContent'];
}
