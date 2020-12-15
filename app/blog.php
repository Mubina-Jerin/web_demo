<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    //For Bloging Articles
    
    protected $table='blogs';
    protected $primary_key= 'id';
    
    
    protected $user_id;
    protected $blog_title;
    protected $blog_introduction;
    protected $blog_body;
    protected $blog_conclusion;
    protected $resource_id;


    protected $fillable = [
        'user_id', 'blog_title', 
        'blog_introduction',
        'blog_body',
        'blog_conclusion',
        'resource_id',
        ];




}
