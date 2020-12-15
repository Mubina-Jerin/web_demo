<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class review extends Model
{
    //
    protected $table='reviews';
    protected $primary_key='id';
    protected $user_id; 
    protected $post_id;	
    protected $comment;
    protected $rating;
    protected $fillable=[
        'user_id', 'post_id','comment','rating',
    ];

}
