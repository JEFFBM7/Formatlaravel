<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperPost
 */
class Post extends Model
{
    protected $filable = [
        'title',
        'content',
        'slug',
        'author'
      
    ];
    protected $guarded = ['id', 'created_at', 'updated_at'];  
    use HasFactory;
}
